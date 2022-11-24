<template>
    <v-app  id="inspire">

        <subheading></subheading>


        <v-sheet
            class=" ma-2"
            elevation="0"
            color="grey lighten-5"
        >

            <v-content>
                <v-card elevation="2" >
                    <v-card-title primary-title >
                        <v-spacer></v-spacer>
                        Employment Types
                        <v-spacer></v-spacer>
                    </v-card-title>

                    <v-card-text>

                        <v-row>


                            <v-dialog v-model="dialog_crud" max-width="500px"  @keydown.esc="close()"  @keydown.enter="crudConfirm()" persistent>
                                <template v-slot:activator="{ on }">
                                    <v-btn color="primary" dark class="mb-2 ml-5" v-on="on">Add a new {{ formTitle }}</v-btn>
                                </template>
                                <v-card>
                                    <v-card-title>
                                        <v-spacer></v-spacer>
                                        <span class="headline"> <span v-if="!editingId">Add a new </span><span v-if="editingId">Edit </span><strong>{{ formTitle }}</strong></span>
                                        <v-spacer></v-spacer>
                                    </v-card-title>

                                    <v-form @submit.prevent="crudConfirm()">
                                        <v-card-text>
                                            <v-container>
                                                <v-row>
                                                    <v-col cols="12" sm="12" md="12">
                                                        <v-text-field name="employmentType" label="Employment Type*" v-model="employmenttype.employmentType"
                                                            :rules="employmentTypeRules"
                                                            :error-messages="employmenttypeError.employmentType"
                                                        ></v-text-field>
                                                    </v-col>
                                                </v-row>
                                            </v-container>
                                        </v-card-text>

                                        <v-card-actions>
                                            <v-spacer></v-spacer>
                                            <v-btn color="blue darken-1" text @click="close()">Cancel</v-btn>
                                            <v-btn color="success" type="submit">Save</v-btn>
                                        </v-card-actions>
                                    </v-form>
                                </v-card>
                            </v-dialog>


                            <v-spacer></v-spacer>
                            <v-text-field
                                v-model="search"
                                append-icon="mdi-magnify"
                                label="Search"
                                single-line
                                hide-details
                            ></v-text-field>
                        </v-row>

                        <v-data-table
                        :headers="headers"
                        :items="employmenttypes"
                        :search="search"
                        >

                            <template v-slot:[`item.action`]="{ item }">

                                <v-tooltip top>
                                    <template v-slot:activator="{ on }">
                                        <v-icon @click="editDialog(item.employmentTypeId)" v-on="on">edit</v-icon>
                                    </template>
                                    <span>Edit Record ?</span>
                                </v-tooltip>

                                <!-- v-if="item.isDeletable==1" -->
                                <v-tooltip top >
                                    <template v-slot:activator="{ on }">
                                        <v-icon @click="deleteConfirm(item.employmentTypeId)" v-on="on">delete</v-icon>
                                    </template>
                                    <span>Delete Record ?</span>
                                </v-tooltip>

                            </template>

                        </v-data-table>

                    </v-card-text>
                </v-card>
            </v-content>

        </v-sheet>

        <modal_alert
            :s_alert="s_alert"
            s_msg="Successfully saved !"
            :e_alert="e_alert"
            e_msg="Something went wrong !"
            :w_alert="w_alert"
            w_msg="Do you really want to proceed ?"
            :i_alert="i_alert"
            i_msg="Information "
            @cancelAlert="cancelAlert()"
            @cancelAlertAndProceed="cancelAlertAndProceed()"

        ></modal_alert>


        <v-spacer></v-spacer>
        <footer_b></footer_b>

    </v-app>
</template>


<script>
    import subheading from './subheading.vue'

    import modal_alert from './../../frontend/components/modals/alert.vue'
    import modal_alert_mixin from './../../frontend/components/modals/alertMixins.vue'
    import footer_b from './footer.vue'

    export default {
        data () {
            return {
                token: localStorage.getItem('token'),

                search: '',
                headers: [
                    {
                        text: 'Employment Type Id',
                        align: 'start',
                        // sortable: false,
                        value: 'employmentTypeId',
                    },
                    { text: 'Employment Type', value: 'employmentType' },
                    { text: 'Actions', value: 'action', sortable: false },
                ],


                employmenttypes: [],
                // add dialog
                formTitle: 'Employment Type',
                employmenttype: {
                    employmentType: '',
                },
                employmenttypeError: {
                    employmentType: '',
                },
                employmentTypeRules: [
                    v => !!v || 'Employment Type is required',
                ],
            }
        },
        mounted () {
          this.getEmployment();
        },
        components:{
            subheading, modal_alert, footer_b
        },
        mixins: [modal_alert_mixin],
        methods: {
            getEmployment(){
                var _this = this;
                axios.get('/api/getEmploymentTypes'+'?token='+this.token)
                .then(function (response) {
                    _this.employmenttypes = response.data.data;
                })
                .catch(function (error) {
                })
            },
            clearForm(){
                this.employmenttype= { employmentType: '' }
                this.employmenttypeError= { employmentType: '' }
            },

            adding(){
                console.log(this.employmenttype)
                var _this=this
                axios.post('/api/addEmploymentType'+'?token='+this.token, this.employmenttype)
                .then(function (response) {
                    _this.getEmployment()
                    _this.s_alert = true;
                    _this.dialog_crud = false
                    _this.clearForm()
                    _this.addingConfirmed=''
                })
                .catch(function (error) {
                    _this.e_alert = true;
                    _this.employmenttypeError = { employmentType: error.response.data.employmentType };
                })
            },

            deleting(){
                console.log(this.deletingId)
                var _this = this;
                axios.post('/api/deleteEmploymentType/'+this.deletingId+'?token='+this.token)
                .then(function (response) {
                    _this.getEmployment()

                    _this.s_alert = true;
                })
                .catch(function (error) {
                    _this.e_alert = true;
                })
                this.deletingId=''
            },

            setEditDialogFields(id){
                var _this = this;
                axios.get('/api/getEmploymentType/'+id+'?token='+this.token)
                .then(function (response) {
                    _this.employmenttype = response.data.data;
                })
                .catch(function (error) {
                })
            },

            editing(){
                var _this = this;
                axios.post('/api/editEmploymentType?token='+this.token, this.employmenttype)
               .then(function (response) {
                    _this.s_alert = true;

                    _this.dialog_crud = false
                    _this.getEmployment()
                    _this.clearForm()
                    _this.editingId=''
                })
                .catch(function (error) {
                    _this.e_alert = true;
                    _this.employmenttypeError = { employmentType: error.response.data.employmentType };
                })
            },


        },
    }
</script>

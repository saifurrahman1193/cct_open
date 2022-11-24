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
                        Designations
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
                                                        <v-text-field name="designation" label="Designation*" v-model="designation.designation"
                                                            :rules="designationRules"
                                                            :error-messages="designationError.designation"
                                                        ></v-text-field>
                                                    </v-col>
                                                    <v-col cols="12" sm="12" md="12">
                                                        <v-text-field name="designationBN" label="Designation BN*" v-model="designation.designationBN"
                                                            :rules="designationBNRules"
                                                            :error-messages="designationError.designationBN"
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
                        :items="designations"
                        :search="search"
                        >

                            <template v-slot:[`item.action`]="{ item }">

                                <v-tooltip top>
                                    <template v-slot:activator="{ on }">
                                        <v-icon @click="editDialog(item.designationId)" v-on="on">edit</v-icon>
                                    </template>
                                    <span>Edit Record ?</span>
                                </v-tooltip>

                                <!-- v-if="item.isDeletable==1" -->
                                <!-- <v-tooltip top >
                                    <template v-slot:activator="{ on }">
                                        <v-icon @click="deleteConfirm(item.designationId)" v-on="on">delete</v-icon>
                                    </template>
                                    <span>Delete Record ?</span>
                                </v-tooltip> -->

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
                        text: 'Designation Id',
                        align: 'start',
                        // sortable: false,
                        value: 'designationId',
                    },
                    { text: 'Designation', value: 'designation' },
                    { text: 'Designation BN', value: 'designationBN' },
                    { text: 'Actions', value: 'action', sortable: false },
                ],


                designations: [],
                // add dialog
                formTitle: 'Designation',
                designation: {
                    designation: '', designationBN: '',
                },
                designationError: {
                    designation: '', designationBN: '',
                },
                designationRules: [
                    v => !!v || 'Designation is required',
                ],
                designationBNRules: [
                    v => !!v || 'Designation BN is required',
                ],
            }
        },
        mounted () {
          this.getDesignations();
        },
        components:{
            subheading, modal_alert, footer_b
        },
        mixins: [modal_alert_mixin],
        methods: {
            getDesignations(){
                var _this = this;
                axios.get('/api/getDesignations'+'?token='+this.token)
                .then(function (response) {
                    _this.designations = response.data.data;
                })
                .catch(function (error) {
                })
            },
            clearForm(){
                this.designation= { designation: '', designationBN: '' }
                this.designationError= { designation: '', designationBN: '' }
            },

            adding(){
                console.log(this.designation)
                var _this=this
                axios.post('/api/addDesignation'+'?token='+this.token, this.designation)
                .then(function (response) {
                    _this.getDesignations()
                    _this.s_alert = true;
                    _this.dialog_crud = false
                    _this.clearForm()
                    _this.addingConfirmed=''
                })
                .catch(function (error) {
                    _this.e_alert = true;
                    _this.designationError = { designation: error.response.data.designation };
                })
            },

            deleting(){
                console.log(this.deletingId)
                var _this = this;
                axios.post('/api/deleteDesignation/'+this.deletingId+'?token='+this.token)
                .then(function (response) {
                    _this.getDesignations()

                    _this.s_alert = true;
                })
                .catch(function (error) {
                    _this.e_alert = true;
                })
                this.deletingId=''
            },

            setEditDialogFields(id){
                var _this = this;
                axios.get('/api/getDesignation/'+id+'?token='+this.token)
                .then(function (response) {
                    _this.designation = response.data.data;
                })
                .catch(function (error) {
                })
            },

            editing(){
                var _this = this;
                axios.post('/api/editDesignation?token='+this.token, this.designation)
               .then(function (response) {
                    _this.s_alert = true;

                    _this.dialog_crud = false
                    _this.getDesignations()
                    _this.clearForm()
                    _this.editingId=''
                })
                .catch(function (error) {
                    _this.e_alert = true;
                    _this.designationError = { designation: error.response.data.designation };
                })
            },
            designationDataUpdate(designation){
                this.getDesignations()
            }

        },
    }
</script>

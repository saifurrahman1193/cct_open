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
                        Shiftings
                        <v-spacer></v-spacer>
                    </v-card-title>

                    <v-card-text>

                        <v-row>


                            <v-dialog v-model="dialog_crud" max-width="500px"  @keydown.esc="close()"  @keydown.enter="crudConfirm()" persistent>
                                <!-- <template v-slot:activator="{ on }">
                                    <v-btn color="primary" dark class="mb-2 ml-5" v-on="on">Add a new {{ formTitle }}</v-btn>
                                </template> -->
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
                                                        <v-text-field name="shifting" label="Shifting*" v-model="shifting.shifting"
                                                            :rules="shiftingRules"
                                                            :error-messages="shiftingError.shifting"
                                                        ></v-text-field>
                                                    </v-col>

                                                    <v-col cols="12" sm="12" md="12">
                                                        <v-text-field name="inTimeHour" label="In Time Hour*"
                                                            v-model="shifting.inTimeHour"
                                                            type="number"
                                                            :rules="inTimeHourRules"
                                                            :error-messages="shiftingError.inTimeHour"
                                                            placeholder="0-23"
                                                        ></v-text-field>
                                                    </v-col>

                                                    <v-col cols="12" sm="12" md="12">
                                                        <v-text-field name="inTimeMin" label="In Time Min*"
                                                            v-model="shifting.inTimeMin"
                                                            type="number"
                                                            :rules="inTimeMinRules"
                                                            :error-messages="shiftingError.inTimeMin"
                                                            placeholder="0-59"
                                                        ></v-text-field>
                                                    </v-col>


                                                    <v-col cols="12" sm="12" md="12">
                                                        <v-text-field name="outTimeHour" label="Out Time Hour*"
                                                            v-model="shifting.outTimeHour"
                                                            type="number"
                                                            :rules="outTimeHourRules"
                                                            :error-messages="shiftingError.outTimeHour"
                                                            placeholder="0-23"
                                                        ></v-text-field>
                                                    </v-col>

                                                    <v-col cols="12" sm="12" md="12">
                                                        <v-text-field name="outTimeMin" label="Out Time Min*"
                                                            v-model="shifting.outTimeMin"
                                                            type="number"
                                                            :rules="outTimeMinRules"
                                                            :error-messages="shiftingError.outTimeMin"
                                                            placeholder="0-59"
                                                        ></v-text-field>
                                                    </v-col>

                                                    <v-col cols="12" sm="12" md="12">
                                                        <v-text-field name="lateMin" label="Late Min*"
                                                            v-model="shifting.lateMin"
                                                            type="number"
                                                            :rules="lateMinRules"
                                                            :error-messages="shiftingError.lateMin"
                                                            placeholder="0-59"
                                                        ></v-text-field>
                                                    </v-col>

                                                    <v-col cols="12" sm="12" md="12">
                                                        <v-text-field name="earlyMin" label="Early Min*"
                                                            v-model="shifting.earlyMin"
                                                            type="number"
                                                            :rules="earlyMinRules"
                                                            :error-messages="shiftingError.earlyMin"
                                                            placeholder="0-59"
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
                        :items="shiftings"
                        :search="search"
                        >
                            <template  v-slot:[`item.shiftingTime`]="{ item }">
                                {{ getHourTimeToHourTimeAMPM(item.inTimeHour, item.inTimeMin, item.outTimeHour, item.outTimeMin ) }}
                            </template>

                            <template v-slot:[`item.action`]="{ item }">

                                <v-tooltip top>
                                    <template v-slot:activator="{ on }">
                                        <v-icon @click="editDialog(item.shiftingId)" v-on="on">edit</v-icon>
                                    </template>
                                    <span>Edit Record ?</span>
                                </v-tooltip>

                                <!-- v-if="item.isDeletable==1" -->
                                <!-- <v-tooltip top >
                                    <template v-slot:activator="{ on }">
                                        <v-icon @click="deleteConfirm(item.shiftingId)" v-on="on">delete</v-icon>
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
                        text: 'Shifting Id',
                        align: 'start',
                        // sortable: false,
                        value: 'shiftingId',
                    },
                    { text: 'Shifting', value: 'shifting' },
                    { text: 'Shifting Time', value: 'shiftingTime' },
                    { text: 'Late Min', value: 'lateMin' },
                    { text: 'Early Min', value: 'earlyMin' },


                    { text: 'Actions', value: 'action', sortable: false },
                ],


                shiftings: [],
                // add dialog
                formTitle: 'Shifting',
                shifting: {
                    shifting: '',
                    inTimeHour: 0,
                    inTimeMin: 0,
                    outTimeHour: 0,
                    outTimeMin: 0,
                    lateMin: 0,
                    earlyMin: 0,
                },
                shiftingError: {
                    shifting: '',
                    inTimeHour: 0,
                    inTimeMin: 0,
                    outTimeHour: 0,
                    outTimeMin: 0,
                    lateMin: 0,
                    earlyMin: 0,

                },
                shiftingRules: [
                    v => !!v || 'Shifting is required',
                ],
                inTimeHourRules: [
                    v => !!v || 'In Time Hour is required',
                ],
                outTimeHourRules: [
                    v => !!v || 'Out Time Hour is required',
                ],
                inTimeMinRules: [
                    v => !!v || 'In Time Min is required',
                ],
                outTimeMinRules: [
                    v => !!v || 'Out Time Min is required',
                ],
                lateMinRules: [
                    v => !!v || 'Late Min is required',
                ],
                earlyMinRules: [
                    v => !!v || 'Early Min is required',
                ],
            }
        },
        mounted () {
          this.getShiftings();
        },
        components:{
            subheading, modal_alert, footer_b
        },
        mixins: [modal_alert_mixin],
        methods: {
            getShiftings(){
                var _this = this;
                axios.get('/api/getShiftings'+'?token='+this.token)
                .then(function (response) {
                    _this.shiftings = response.data.data;
                })
                .catch(function (error) {
                })
            },
            clearForm(){
                this.shifting= {
                    shifting: '',
                    inTimeHour: '',
                    inTimeMin: 0,
                    outTimeHour: '',
                    outTimeMin: 0,
                    lateMin: 0,
                    earlyMin: 0,
                 }
                this.shiftingError= {
                    shifting: '',
                    inTimeHour: '',
                    inTimeMin: 0,
                    outTimeHour: '',
                    outTimeMin: 0,
                    lateMin: 0,
                    earlyMin: 0,
                 }
            },

            adding(){
                console.log(this.shifting)
                var _this=this
                axios.post('/api/addShifting'+'?token='+this.token, this.shifting)
                .then(function (response) {
                    _this.getShiftings()
                    _this.s_alert = true;
                    _this.dialog_crud = false
                    _this.clearForm()
                    _this.addingConfirmed=''
                })
                .catch(function (error) {
                    _this.e_alert = true;
                    _this.shiftingError = { shifting: error.response.data.shifting };
                })
            },

            deleting(){
                console.log(this.deletingId)
                var _this = this;
                axios.post('/api/deleteShifting/'+this.deletingId+'?token='+this.token)
                .then(function (response) {
                    _this.getShiftings()

                    _this.s_alert = true;
                })
                .catch(function (error) {
                    _this.e_alert = true;
                })
                this.deletingId=''
            },

            setEditDialogFields(id){
                var _this = this;
                axios.get('/api/getShifting/'+id+'?token='+this.token)
                .then(function (response) {
                    _this.shifting = response.data.data;
                })
                .catch(function (error) {
                })
            },

            editing(){
                var _this = this;
                axios.post('/api/editShifting?token='+this.token, this.shifting)
               .then(function (response) {
                    _this.s_alert = true;

                    _this.dialog_crud = false
                    _this.getShiftings()
                    _this.clearForm()
                    _this.editingId=''
                })
                .catch(function (error) {
                    _this.e_alert = true;
                    _this.shiftingError = { shifting: error.response.data.shifting };
                })
            },
            shiftingDataUpdate(shifting){
                this.getShiftings()
            }

        },
        watch: {

        },
    }
</script>

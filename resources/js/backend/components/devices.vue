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
                        Devices
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
                                                        <v-text-field name="deviceCustomizedName" label="Device Name*" v-model="device.deviceCustomizedName"
                                                            :rules="deviceCustomizedNameRules"
                                                            :error-messages="deviceError.deviceCustomizedName"
                                                        ></v-text-field>
                                                    </v-col>


                                                    <v-col cols="12" sm="12" md="12">
                                                        <v-text-field name="deviceIP" label="Device IP*" v-model="device.deviceIP"
                                                            :rules="deviceIPRules"
                                                            :error-messages="deviceError.deviceIP"
                                                        ></v-text-field>
                                                    </v-col>

                                                    <v-col cols="12" sm="12" md="12">
                                                        <v-text-field name="port" label="Port*" v-model="device.port"
                                                            :rules="portRules"
                                                            :error-messages="deviceError.port"
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
                        :items="devices"
                        :search="search"
                        >

                            <template v-slot:[`item.deviceActions`]="{ item }">
                                <devicestatus :device="item" @deviceDataUpdate="deviceDataUpdate"></devicestatus>
                            </template>

                            <!-- <template v-slot:[`item.lastSyncTime`]="{ item }">
                                {{datetimeprocessing(item.lastSyncTime)}}
                            </template> -->

                            <template v-slot:[`item.deviceInfo`]="{ item }">
                                <v-list>
                                    <v-chip color="pink" dark
                                    v-if="!(item.isSecured==1)"
                                > Device Is not secured. Make a user as a &nbsp; <b>Super Admin</b></v-chip>
                                </v-list>
                                <lists
                                    :lists="[
                                        {key: '<b>Device Name</b>', value: (item.deviceCustomizedName || '') +' ('+(item.deviceName || '')+')' },
                                        {key: '<b>Device IP</b>', value: item.deviceIP },
                                        {key: '<b>Device Port</b>', value: item.port },

                                        {key: '<b>Device Firmware Version</b>', value: item.fmVersion },
                                        {key: '<b>Device Platform</b>', value: item.platform },
                                        {key: '<b>Serial Number</b>', value: item.serialNumber },
                                        {key: '<b>Device Work Code</b>', value: item.workCode },
                                        {key: '<b>Device SSR</b>', value: item.ssr },
                                        {key: '<b>Pin Width</b>', value: item.pinWidth },


                                        {key: '<b>Last Sync Time</b>', value: datetimeprocessing(item.lastSyncTime) },
                                        {key: '<b>Last Checked Device Time</b>', value: datetimeprocessing(item.lastDeviceTime) },
                                    ]"
                                ></lists>



                            </template>






                            <template v-slot:[`item.action`]="{ item }">

                                <v-tooltip top>
                                    <template v-slot:activator="{ on }">
                                        <v-icon @click="editDialog(item.deviceId)" v-on="on">edit</v-icon>
                                    </template>
                                    <span>Edit Record ?</span>
                                </v-tooltip>

                                <!-- v-if="item.isDeletable==1" -->
                                <!-- <v-tooltip top >
                                    <template v-slot:activator="{ on }">
                                        <v-icon @click="deleteConfirm(item.deviceId)" v-on="on">delete</v-icon>
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
    import lists from './lists.vue'

    import modal_alert from './../../frontend/components/modals/alert.vue'
    import devicestatus from './devicestatus.vue'
    import modal_alert_mixin from './../../frontend/components/modals/alertMixins.vue'
    import footer_b from './footer.vue'

    export default {
        data () {
            return {
                token: localStorage.getItem('token'),

                search: '',
                headers: [
                    {
                        text: 'Device Id',
                        align: 'start',
                        // sortable: false,
                        value: 'deviceId',
                    },
                    // { text: 'Device Name', value: 'deviceName' },
                    // { text: 'Device IP', value: 'deviceIP' },
                    // { text: 'Port', value: 'port' },
                    { text: 'Device Information', value: 'deviceInfo' },

                    { text: 'Device Actions', value: 'deviceActions' },

                    { text: 'Actions', value: 'action', sortable: false },
                ],


                devices: [],
                // add dialog
                formTitle: 'Device',
                device: {
                     deviceCustomizedName: '', deviceIP: '', port:''
                },
                deviceError: {
                     deviceCustomizedName: '', deviceIP: '', port:''
                },
                deviceCustomizedNameRules: [
                    v => !!v || 'Device name is required',
                ],

                deviceIPRules: [
                    v => !!v || 'Device IP is required',
                ],
                portRules: [
                    v => !!v || 'Device port is required',
                ],
            }
        },
        mounted () {
          this.getDevices();
        },
        components:{
            subheading, modal_alert, devicestatus, lists, footer_b
        },
        mixins: [modal_alert_mixin],
        methods: {
            getDevices(){
                var _this = this;
                axios.get('/api/getDevices'+'?token='+this.token)
                .then(function (response) {
                    _this.devices = response.data.data;
                })
                .catch(function (error) {
                })
            },
            clearForm(){
                this.device= { deviceCustomizedName: '', deviceIP: '', port: '' }
                this.deviceError= { deviceCustomizedName: '', deviceIP: '', port: '' }
            },

            adding(){
                console.log(this.device)
                var _this=this
                axios.post('/api/addDevice'+'?token='+this.token, this.device)
                .then(function (response) {
                    _this.getDevices()
                    _this.s_alert = true;
                    _this.dialog_crud = false
                    _this.clearForm()
                    _this.addingConfirmed=''
                })
                .catch(function (error) {
                    _this.e_alert = true;
                    _this.deviceError = { device: error.response.data.device };
                })
            },

            deleting(){
                console.log(this.deletingId)
                var _this = this;
                axios.post('/api/deleteDevice/'+this.deletingId+'?token='+this.token)
                .then(function (response) {
                    _this.getDevices()

                    _this.s_alert = true;
                })
                .catch(function (error) {
                    _this.e_alert = true;
                })
                this.deletingId=''
            },

            setEditDialogFields(id){
                var _this = this;
                axios.get('/api/getDevice/'+id+'?token='+this.token)
                .then(function (response) {
                    _this.device = response.data.data;
                })
                .catch(function (error) {
                })
            },

            editing(){
                var _this = this;
                axios.post('/api/editDevice?token='+this.token, this.device)
               .then(function (response) {
                    _this.s_alert = true;

                    _this.dialog_crud = false
                    _this.getDevices()
                    _this.clearForm()
                    _this.editingId=''
                })
                .catch(function (error) {
                    _this.e_alert = true;
                    _this.deviceError = { device: error.response.data.device };
                })
            },
            deviceDataUpdate(){
                this.getDevices()
            }

        },
    }
</script>

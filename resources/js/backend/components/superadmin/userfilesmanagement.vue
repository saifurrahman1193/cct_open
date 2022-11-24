<template>

    <div>
        <v-dialog v-model="dialog_add_file" max-width="500px"  @keydown.esc="close()"  @keydown.enter="fileUploadPost()" persistent>
            <template v-slot:activator="{ on }">
                <v-btn  small  v-on="on" >
                    Add File
                </v-btn>
            </template>
            <v-card>
                <v-card-title>
                    <v-spacer></v-spacer>
                    <span class="headline">Add file</span>
                    <v-spacer></v-spacer>
                </v-card-title>

                <v-form @submit.prevent="fileUploadPost">
                    <v-card-text>
                        <v-container>
                            <v-row>

                                <v-col cols="12" >
                                    <v-text-field name="fileName" label="File Name*"
                                        v-model="file.fileName"
                                        :rules="fileNameRules"
                                        :error-messages="fileError.fileName"
                                        counter
                                    ></v-text-field>
                                </v-col>

                                <v-col cols="12" >

                                    <v-btn raised @click="onPickFile('fileInput')">Upload File</v-btn>

                                    <input type="file" ref="fileInput"
                                        @change="onFilePickedFromObj($event, 'file', 'file')"
                                        class="d-none" />

                                    <v-chip v-if="fileSize">{{fileSize}}</v-chip>

                                    <span v-if="fileError.file" class="text-danger ma-0 pa-0">{{fileError.file[0]}}</span>
                                </v-col>

                                <v-col cols="12" >
                                    <v-textarea
                                        label="Purpose"
                                        name="purpose"
                                        id="purpose"
                                        v-model="file.purpose"
                                        rows="5"
                                        auto-grow
                                        outlined
                                    ></v-textarea>
                                </v-col>

                            </v-row>
                        </v-container>
                    </v-card-text>

                    <v-card-actions>
                        <v-spacer></v-spacer>
                        <v-btn color="blue darken-1" text @click="close()">Cancel</v-btn>
                        <v-btn color="success"  type="submit" >Submit</v-btn>
                    </v-card-actions>
                </v-form>
            </v-card>
        </v-dialog>

        <v-simple-table class="mt-1">
            <tbody>
                <tr
                    v-for="(item, i) in userFiles"
                    :key="item.fileName+'-'+i"
                >
                    <td>
                        <a :href="item.filePath" target="_blank" class="link-info">{{item.fileName}}</a><br>
                        {{item.purpose}}<br>
                    </td>
                    <td>
                        <v-tooltip top>
                            <template v-slot:activator="{ on }">
                                    <v-icon @click="deleteConfirm(item.fileId)" v-on="on">delete</v-icon>
                            </template>
                            <span>Delete Record ?</span>
                        </v-tooltip>
                    </td>
                </tr>
            </tbody>
        </v-simple-table>

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
    </div>


</template>


<script>


    import picture_mixin from './../../../mixins/picture.vue'

    import modal_alert from './../../../frontend/components/modals/alert.vue'
    import modal_alert_mixin from './../../../frontend/components/modals/alertMixins.vue'

    export default {
        components:{
            modal_alert
        },
        mounted() {
            this.getUserFiles(0)
        },

        mixins: [picture_mixin, modal_alert_mixin],
        data() {
            return {
                token: localStorage.getItem('token'),
                dialog_add_file: false,
                userFiles: [],
                fileInitial:{
                    fileId: '',
                    fileName: '',
                    file: '',
                    purpose: '',
                    userId: this.user.id,
                },
                file: {
                    fileId: '',
                    fileName: '',
                    file: '',
                    purpose: '',
                    userId: this.user.id,
                },
                fileError: {
                    fileId: '',
                    fileName: '',
                    file: '',
                    purpose: '',
                    userId: this.user.id,
                },

                fileNameRules: [
                    v => !!v || 'File name is required',
                ],
                fileRules: [
                    v => !!v || 'File is required',
                ],
                filePath:'',
                fileSize:''

            }
        },
        methods: {
            close(){
                this.dialog_add_file = false
                this.file = {
                    fileId: '',
                    fileName: '',
                    file: '',
                    purpose: '',
                    userId: this.user.id,
                }
                this.filePath='';
                this.fileSize='';
            },
            clearForm(){
                this.file = {
                    fileId: '',
                    fileName: '',
                    file: '',
                    purpose: '',
                    userId: this.user.id,
                }
                this.fileError = {
                    fileId: '',
                    fileName: '',
                    file: '',
                    purpose: '',
                    userId: this.user.id,
                }
                this.filePath='';
                this.fileSize='';
            },

            fileUploadPost(){
                var _this=this
                axios.post('/api/userFilesUploadPost'+'?token='+_this.token, this.file)
                .then(function (response) {
                    _this.dialog_add_file = false
                    _this.clearForm()
                    _this.getUserFiles()
                })
                .catch(function (error) {
                    _this.fileError =  {
                        fileName: error.response.data.fileName,
                        file: error.response.data.file,
                     };
                })
            },

            getUserFiles(){
                var _this=this
                axios.post('/api/getUserFiles'+'?token='+_this.token, {user: this.user})
                .then(function (response) {
                    _this.userFiles = response.data.data
                })
                .catch(function (error) {

                })
            },

            deleting(){
                console.log(this.deletingId)
                var _this = this;
                axios.post('/api/deleteUserFile'+'?token='+_this.token, {fileId: _this.deletingId})
                .then(function (response) {
                    _this.getUserFiles()
                    _this.s_alert = true;
                })
                .catch(function (error) {
                    _this.e_alert = true;
                })
                this.deletingId=''
            },

        },
        props: [ "user" ],
        computed: {

        },


    }
</script>


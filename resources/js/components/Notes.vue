<template>
    <div>
        <v-card >
            <v-card-title primary-title class="justify-center">
                Notes
            </v-card-title>
            <v-card-text>
                <!-- <v-alert type="success" :value="true">Successfully Inserted !</v-alert> -->
                <v-form @submit.prevent="modals.saveConfirmModal = true" >
                <!-- <v-form > -->
                    <v-row>
                        <v-col>
                            <v-text-field
                                name="note"
                                label="Note"
                                id="note"
                                v-model="noteInsertDetails.note"
                                :rules="noteRules"
                            >
                            </v-text-field>
                        </v-col>
                        <v-col>
                            <!-- <v-btn color="success" type="submit" @click.stop="saveConfirmModal = true"> -->
                            <v-btn color="success" type="submit" @click.stop="modals.saveConfirmModal = true">
                                <v-icon>add</v-icon>
                                Save
                            </v-btn>
                        </v-col>
                    </v-row>
                </v-form>
            </v-card-text>
        </v-card>

        <v-dialog v-model="modals.saveConfirmModal" max-width="290" >
            <v-card>
                <v-alert type="info">
                    Save ?
                </v-alert>
                
                <v-card-text class="pt-6">Do you really want to save ?</v-card-text>
                <v-card-actions class="teal lighten-5">
                    <v-spacer></v-spacer>
                    <v-btn color="red darken-1" text @click="modals.saveConfirmModal = false">Cancel</v-btn>
                    <v-btn color="green darken-1 " dark @click="insertNote()">Save</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>

        <v-dialog v-model="modals.successfulModal" max-width="290" >
            <v-card>
                <v-alert type="success">
                    Successful !
                </v-alert>
                <v-card-text class="pt-6">Successfully saved !</v-card-text>
                <v-card-actions class="green lighten-5">
                    <v-spacer></v-spacer>
                    <v-btn color="green darken-1" dark  @click="modals.successfulModal=false">Ok</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>

        <v-dialog v-model="modals.unsuccessfulModal" max-width="290" >
            <v-card>
                <v-alert type="error" >
                    Unsuccessful !
                </v-alert>
                <v-card-text class="pt-6">Something went wrong !</v-card-text>
                <v-card-actions class="red lighten-5">
                    <v-spacer></v-spacer>
                    <v-btn color="green darken-1" dark  @click="modals.unsuccessfulModal=false">Ok</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>



        

    </div>
</template>

<script>
    const queryString = window.location.search;
    console.log(queryString);
    const urlParams = new URLSearchParams(queryString);
    const token = urlParams.get('token')

export default {
    data() {
        return {
            noteInsertDetails : { note: '' },
            noteInsertDetailsErrors : { error:false, note: '' },
            noteEditDetails : { noteId: '', note: '' },
            noteEditDetailsErrors : { error:false, noteId: '', note: '' },
            notes:[],
            noteRules: [
                v => !!v || 'Note is required',
            ],

            modals:{
                saveConfirmModal : false,
                successfulModal : false,
                unsuccessfulModal : false,
            }
            
        }
    },
    methods: {
        insertNote(){
                this.modals.saveConfirmModal = true;
                
                var _this = this;
                console.log(this.noteInsertDetails.note)

                axios.post('/api/insertNote'+'?token='+token,  this.noteInsertDetails)
                .then(function (response) {
                    console.log('success !');

                    // Swal.fire('Successfully Added !', '', 'success')

                    _this.noteInsertDetails={ note: '' };
                    // _this.getNotes();
                    _this.modals.saveConfirmModal = false;
                    _this.modals.successfulModal = true;
                })
                .catch(function (error) {
                    console.log('failure !');
            
                    console.log(error);
                    _this.modals.saveConfirmModal = false;
                    _this.modals.unsuccessfulModal = true;

                    
                    // console.log(error.response);
                    // console.log(error.response.data.errors.note);
                    // console.log(error.response.data.errors.note);
                    // _this.noteInsertDetailsErrors = { error:true, note: error.response.data.errors.note };
                })
                                               
        },
    }
}
</script>


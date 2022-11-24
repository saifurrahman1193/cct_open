<template>

    <div>
        <!-- <v-switch  v-model="isUserEnabled"  inset :label="userStatusInDevice==1 ? 'Active' : 'Blocked'" false-value="0" true-value="1" color="green" @click="dialog_block=1"></v-switch> -->


        <v-dialog v-model="dialog_block" max-width="500px"  @keydown.esc="close()"  @keydown.enter="setUserAccess()" persistent>
            <template v-slot:activator="{ on }">
                <!-- <v-btn :color="userStatusInDevice==1 ? 'success' : 'warning'" dark class="mb-2 ml-5" v-on="on" @click="dialog_block=1">{{userStatusInDevice==1 ? 'Active' : 'Blocked'}}</v-btn> -->
                <v-chip  @click="dialog_block=1"  :color="userStatusInDevice==1 ? 'success' :'red lighten-1'"  v-on="on" dark>
                    {{userStatusInDevice==1 ? 'User Status Active':'User Status Blocked'}}
                </v-chip>
            </template>
            <v-card>
                <v-card-title>
                    <v-spacer></v-spacer>
                    <span class="headline"><strong> <span v-text="userStatusInDevice==1 ? 'Block' : 'Unblock' "></span></strong> this user</span>
                    <v-spacer></v-spacer>
                </v-card-title>

                <v-form @submit.prevent="setUserAccess()">
                    <v-card-text>
                        <v-container>
                            <v-row>
                                <v-col cols="12" sm="12" md="12">
                                    <v-textarea
                                        label="Reason"
                                        name="reason"
                                        id="reason"
                                        v-model="block.reason"
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
    </div>



</template>


<script>



    export default {
        components:{
        },
        mounted() {


        },
        data() {
            return {
                token: localStorage.getItem('token'),
                dialog_block: false,
                block: {
                    reason: '',
                    userStatusInDevice: 0,
                }

            }
        },
        methods: {
            setUserAccess(){

                if(this.userStatusInDevice==1){
                    this.block.userStatusInDevice=0
                    console.log(this.block.userStatusInDevice, ' = 0');
                }
                else{
                    this.block.userStatusInDevice=1
                    console.log(this.block.userStatusInDevice, ' = 1');
                }

                var _this=this
                axios.post('/api/setUserAccess?token='+this.token, {userData: this.user, block: this.block})
                .then(function (response) {
                    _this.close()
                    _this.$emit("getUsers")

                })
                .catch(function (error) {
                    _this.close()
                })
            },
            close(){
                this.dialog_block = false
                this.block= {
                    reason: '',
                    userStatusInDevice: 0,
                }
            },
        },
        props: ["userStatusInDevice", "user"],
        computed: {

        },


    }
</script>


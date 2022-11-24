<template>
    <div>

        <v-row class="mt-10 hidden-sm-and-down"></v-row>

        <v-layout row wrap align-center>
            <v-flex>
                <v-card :width="isXS?320:500" class="mx-auto" floating>
                    <v-card-title>
                        <h1 class="display-1 mx-auto font-weight-light">Change Password</h1>
                    </v-card-title>

                    <v-card-text>
                        <v-form  @submit.prevent="changePasswordPostConfirm()"  ref="form" v-model="isFormValid" >

                            <v-text-field
                                label="Current Password"
                                name="currentPassword"
                                id="currentPassword"
                                v-model="changePasswordDetails.currentPassword"
                                :append-icon="showCurrentPassword ? 'visibility' : 'visibility_off'"
                                :type="showCurrentPassword ? 'text' : 'password'"
                                @click:append="showCurrentPassword= !showCurrentPassword"
                                :rules="currentPasswordRules"
                                :error-messages="changePasswordDetailsError.password"
                                @keyup="clearErrors('changePasswordDetailsError', 'password')"
                            ></v-text-field>

                            <v-text-field
                                label="New Password"
                                name="password"
                                id="password"
                                v-model="changePasswordDetails.password"
                                :append-icon="showPassword ? 'visibility' : 'visibility_off'"
                                :type="showPassword ? 'text' : 'password'"
                                @click:append="showPassword= !showPassword"
                                :rules="passwordRules"
                            ></v-text-field>

                            <v-text-field
                                label="Confirm Password"
                                name="confirmPassword"
                                id="confirmPassword"
                                v-model="changePasswordDetails.confirmPassword"
                                :append-icon="showConfirmPassword ? 'visibility' : 'visibility_off'"
                                :type="showConfirmPassword ? 'text' : 'password'"
                                @click:append="showConfirmPassword= !showConfirmPassword"
                                :rules="confirmPasswordRules"
                            ></v-text-field>




                            <v-card-actions>

                                <v-spacer></v-spacer>
                                <v-btn color="success" type="submit"  :disabled="!isFormValid">
                                    Change password
                                </v-btn>
                            </v-card-actions>
                        </v-form>
                    </v-card-text>
                </v-card>
            </v-flex>
        </v-layout>




        <modal_alert
            :s_alert="s_alert"
            s_msg="Password successfully changed !"
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


    import modal_alert from './modals/alert.vue'
    import modal_alert_mixin from './modals/alertMixins.vue'

    export default {
        components:{
            modal_alert
        },
        mixins:[modal_alert_mixin],
        mounted() {
            this.topFunction()
        },
        data() {
            return {
                changePasswordDetails:{password:''},
                changePasswordDetailsError : { password: '' },

                currentPasswordRules: [
                    v => !!v || 'Current password is required',
                ],
                showCurrentPassword:false,

                passwordRules: [
                    v => !!v || 'New password is required',
                    v => v.length >= 6 || "Password must be at least 6 characters long"
                ],
                showPassword:false,

                confirmPasswordRules: [
                    v => !!v || "Confirm password is required",
                    V => V == this.changePasswordDetails.password || "Password & confirm password field didn't match"
                ],
                showConfirmPassword:false,

                isFormValid:false,
            }
        },
        methods: {
            changePasswordPostConfirm(){
                this.$refs.form.validate()
                this.w_alert = true
            },
            changePasswordPost(){

                var _this = this;
                axios.post('/api/auth/changePassword?token='+localStorage.getItem('token'),  this.changePasswordDetails)
                .then(function (response) {
                    console.log('success !');
                    _this.changePasswordDetailsError = {  password: "" };
                    _this.s_alert = true;
                    _this.$refs.form.reset()
                })
                .catch(function (error) {
                    console.log(error.response.data.error)
                    _this.changePasswordDetailsError = {  password: error.response.data.message };
                    _this.e_alert = true;
                })
            },

            cancelAlertAndProceed(){
                this.s_alert=false;
                this.e_alert=false;
                this.w_alert=false;
                this.i_alert=false;
                this.changePasswordPost()
            },
            clearErrors( obj, property){
                this[obj][property] = ''
            }

        },
        metaInfo: {
            titleTemplate: '%s Change Password'
        }




    }
</script>

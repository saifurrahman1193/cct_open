<template>
    <v-app>


        <v-sheet
                class="mx-auto mt-12"
                elevation="0"
                 color="grey lighten-5"
            >
            <v-row class="mt-10 hidden-sm-and-down"></v-row>

            <v-layout row wrap align-center>
                <v-flex>
                    <v-card :width="isXS?320:500"  class="mx-auto mt-4 mb-2" floating>
                        <v-card-title>
                            <h1 class="display-1 mx-auto font-weight-light">Password successfully changed.</h1>
                        </v-card-title>

                        <v-card-text>
                                <v-divider></v-divider>
                                <p class="text-center hover-text-underline" style="cursor: pointer;" @click="gotorouterview('/login')">
                                <v-icon>navigate_before</v-icon>
                                Back to Login
                                </p>

                        </v-card-text>
                    </v-card>
                </v-flex>
            </v-layout>

            <v-dialog v-model="loading" fullscreen >
                <v-container fluid fill-height style="background-color: rgba(255, 255, 255, 0.5);">
                <v-layout justify-center align-center>
                    <v-progress-circular
                    indeterminate
                    color="primary">
                    </v-progress-circular>
                </v-layout>
                </v-container>
            </v-dialog>




        </v-sheet>

        <v-spacer></v-spacer>

    </v-app>
</template>


<script>
    import { mapState } from 'vuex'

    import subheading_f from './subheading.vue'


    export default {
        components:{
            subheading_f,
        },
        mounted() {
            this.$store.dispatch('checkIsLoggedIn')
            this.topFunction()
            // console.log('Component mounted.');
            // console.log(this.$store.getters.welcome)
            this.loading=false;
            this.dynamicChangepasswordFromEncryption()
        },
        data() {
            return {
                showPassword:false,
                resetpassword : {  email: '', password: '' },
                resetpasswordError : { error:false, resetError: '', email: '' , password:'' },
                resetpasswordValid : { valid:false, validMessage: '' },

                loading:true,
            }
        },
        methods: {

            dynamicChangepasswordFromEncryption(){
                    this.resetpassword = {
                        email: this.$route.params.email,
                        password: this.$route.params.password,
                    };

                    var _this = this;
                    axios.post('/api/auth/dynamicChangepasswordFromEncryption',  this.resetpassword)
                    .then(function (response) {
                        _this.loading=false;
                        _this.resetpasswordError = { error:false, resetError: "" , email: '' , password:''};
                        _this.resetpasswordValid = { valid:true, validMessage: 'Email successfully sent! Please check your mail.' }
                    })
                    .catch(function (error) {
                        _this.resetpasswordError = { error:true, resetError: "Link expired or violeted!", email: error.response.data.email, password: error.response.data.password };
                        _this.resetpasswordValid = { valid:false, validMessage: '' }
                        _this.loading=false;
                    })
            },

        },
        computed: {
            ...mapState([
                'isLoggedIn', 'userInfo'
            ]),
        }
    }
</script>

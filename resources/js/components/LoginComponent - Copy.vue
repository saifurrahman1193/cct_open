<template>

    <v-app dense>
        <navigation-drawer-component></navigation-drawer-component>

        <v-card width="400" class="mx-auto" floating>
            <v-card-title>
                <h1 class="display-1 mx-auto font-weight-light">Login</h1>
            </v-card-title>

            <v-card-text>
                <v-form  @submit.prevent="loginPost()" >
                    <v-text-field
                        name="email"
                        label="Email"
                        id="email"
                        v-model="loginDetails.email"
                        prepend-icon="person"
                        :rules="emailRules"
                    ></v-text-field>
                    <v-text-field
                        name="password"
                        label="Password"
                        id="password"
                        v-model="loginDetails.password"
                        prepend-icon="lock"
                        :append-icon="showPassword ? 'visibility' : 'visibility_off'"
                        :type="showPassword ? 'text' : 'password'"
                        @click:append="showPassword= !showPassword"
                        :rules="passwordRules"

                    ></v-text-field>

                    <v-divider></v-divider>
                    <p v-if="loginDetailsError.error==true" class="text-danger mt-1 red--text lighten-1 text-center">{{ loginDetailsError.loginError }}</p>

                    <v-card-actions>
                        <v-btn color="info" text>
                            <v-icon>person_add</v-icon>
                            Register
                        </v-btn>
                        <v-spacer></v-spacer>
                        <v-btn color="success" type="submit">
                            <v-icon>verified_user</v-icon>
                            Login
                        </v-btn>
                    </v-card-actions>
                </v-form>
            </v-card-text>
        </v-card>


    </v-app>

</template>


<script>

    export default {

        mounted() {
            console.log('Component mounted.');
        },
        data() {
            return {
                showPassword:false,
                loginDetails : {  email: '', password: '' },
                loginDetailsError : { error:false, loginError: '' },
                emailRules: [
                    v => !!v || 'E-mail is required',
                    v => /.+@.+\..+/.test(v) || 'E-mail must be valid',
                ],
                passwordRules: [
                    v => !!v || 'Password is required',
                ],


            }
        },
        methods: {

            loginPost(){

                    var _this = this;
                    console.log(this.loginDetails.email)
                    axios.post('/api/auth/login',  this.loginDetails)
                    .then(function (response) {
                        console.log('success !');
                        console.log(response.data.access_token);
                        window.location.href = '/home?token='+response.data.access_token;

                    })
                    .catch(function (error) {
                        console.log('failure !');
                        console.log(error.response);
                        console.log(error.response.data.error);
                        // _this.loginDetailsError = { error:true, loginError: error.response.data.error };
                        _this.loginDetailsError = { error:true, loginError: "Invalid email or password" };

                    })

            },

        },

    }
</script>

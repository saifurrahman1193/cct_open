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
                        <v-card :width="isXS?320:500"   class="mx-auto mb-2" floating>
                            <v-card-title>
                                <h1 class="display-1 mx-auto font-weight-light">Profile</h1>
                            </v-card-title>

                            <v-card-text>
                                <v-form  @submit.prevent="profileUpdatePostConfirm()" >
                                    <!-- <v-text-field
                                        label="Name*"
                                        name="name"
                                        id="name"
                                        v-model="profileDetails.name"
                                        type="text"
                                        :rules="nameRules"
                                    ></v-text-field> -->

                                    <v-text-field name="deviceUserName" label="Name" v-model="profileDetails.deviceUserName"
                                        :rules="deviceUserNameRules"
                                        counter
                                    ></v-text-field>


                                    <v-text-field
                                        label="Phone"
                                        name="phone"
                                        id="phone"
                                        v-model="profileDetails.phone"
                                        type="text"
                                        :rules="phoneRules"
                                    ></v-text-field>


                                    <!-- <v-autocomplete
                                        label="Area*"
                                        v-model="profileDetails.areaId"
                                        :items="areas"
                                        item-text="area"
                                        item-value="areaId"
                                        dense
                                        filled
                                        :rules="areaRules"
                                        id="areaId"
                                        name="areaId"
                                    ></v-autocomplete> -->


                                    <v-text-field
                                        label="Email"
                                        name="email"
                                        id="email"
                                        v-model="profileDetails.email"
                                        :rules="emailRules"
                                        disabled
                                    ></v-text-field>

                                    <v-textarea
                                        label="Address"
                                        name="address"
                                        id="address"
                                        v-model="profileDetails.address"
                                        :rules="addressRules"
                                        rows="2"
                                        auto-grow
                                        outlined
                                    ></v-textarea>


                                    <v-menu
                                        ref="menu"
                                        v-model="menu"
                                        :close-on-content-click="false"
                                        transition="scale-transition"
                                        offset-y
                                        min-width="290px"
                                    >
                                        <template v-slot:activator="{ on }">
                                        <v-text-field
                                            id="dob"
                                            name="dob"
                                            v-model="formattedDob"
                                            label="Birthday date"
                                            append-icon="event"
                                            v-on="on"
                                        ></v-text-field>
                                        </template>
                                        <v-date-picker
                                        ref="picker"
                                        v-model="profileDetails.dob"
                                        :max="new Date().toISOString().substr(0, 10)"
                                        min="1950-01-01"
                                        @change="save"
                                        ></v-date-picker>
                                    </v-menu>


                                    <!-- <v-file-input
                                        :rules="photoPathRules"
                                        accept="image/png, image/jpeg, image/bmp"
                                        placeholder="Pick an image"
                                        prepend-icon="add_a_photo"
                                        label="Prifile picture"
                                        name="photoPath"
                                        v-model="profileDetails.photoPath"
                                    ></v-file-input> -->
                                    <v-btn raised @click="onPickFile('photoPathInput')">Upload Image</v-btn>

                                    <input type="file" ref="photoPathInput"
                                        accept="image/*"
                                        @change="onFilePickedFromObj($event, 'profileDetails', 'photoPath')" class="d-none">

                                    <v-img v-if="profileDetails.photoPath" :src="profileDetails.photoPath" max-height="190" min-height="190" aspect-ratio contain class="mt-5" ></v-img>




                                    <v-card-actions>

                                        <v-spacer></v-spacer>
                                        <v-btn color="success" type="submit" >
                                            Save
                                        </v-btn>
                                        <v-spacer></v-spacer>
                                    </v-card-actions>
                                </v-form>
                            </v-card-text>
                        </v-card>
                    </v-flex>
                </v-layout>


        </v-sheet>



        <modal_alert
            :s_alert="s_alert"
            s_msg="Profile successfully update !"
            :e_alert="e_alert"
            e_msg="Something went wrong !"
            :w_alert="w_alert"
            w_msg="Do you really want to proceed ?"
            :i_alert="i_alert"
            i_msg="Information "
            @cancelAlert="cancelAlert()"
            @cancelAlertAndProceed="cancelAlertAndProceed()"

        ></modal_alert>

    </v-app>
</template>


<script>


    import modal_alert from './modals/alert.vue'
    import modal_alert_mixin from './modals/alertMixins.vue'
    import picture_mixin from './../../mixins/picture.vue'


    export default {
        components:{
            modal_alert
        },

        mounted() {

            this.topFunction()
            this.getAreas();
            this.getUserInfo();
        },
        mixins: [modal_alert_mixin, picture_mixin],
        data() {
            return {
                token: localStorage.getItem('token'),
                // dob
                menu: false,
                // dob
                profileDetails : {  email: '', name:'', phone:'', deviceUserName: '', dob:'', address:'', photoPath:'' },
                profileDetailsError : { error:false},
                emailRules: [
                    v => !!v || 'E-mail is required',
                    v => /.+@.+\..+/.test(v) || 'E-mail must be valid',
                ],

                nameRules: [
                    v => !!v || 'Name is required',
                ],
                phoneRules: [
                    // v => !!v || 'Phone is required',
                ],
                areaRules: [
                    v => !!v || 'Area is required',
                ],
                addressRules: [
                ],
                // photoPathRules: [
                //     value => !value || value.size < 2000000 || 'Avatar size should be less than 2 MB!',
                // ],
                areas: [],
                deviceUserNameRules: [
                    v => !!v || 'Device username is required',
                    v => v.length <= 20 || "Device username must be at most 20 characters long",
                ],


            }
        },
        methods: {
            getAreas(){
                var _this = this;
                axios.get('/api/getAreas')
                .then(function (response) {
                    _this.areas = response.data.data;
                    console.log(response.data.data)
                })
                .catch(function (error) {
                })
            },
            getUserInfo(){
                console.log('getUserInfo called')
                var _this = this;
                axios.post('/api/auth/me?token='+_this.token)
                .then(function (response) {
                    _this.profileDetails = response.data.userData;
                    console.log('getUserInfo called')
                })
                .catch(function (error) {
                })
            },
            profileUpdatePostConfirm(){
                this.w_alert = true
            },
            profileUpdatePost(){
                    console.log(this.profileDetails);
                    var _this = this;
                    axios.post('/api/profileUpdate?token='+_this.token,  this.profileDetails)
                    .then(function (response) {
                        console.log('success !');
                        _this.s_alert = true;

                        _this.profileDetailsError = { error:false };

                        if(_this.profileDetails.photoPath && _this.profileDetails.photoPath.length>100){
                            console.log(_this.profileDetails.photoPath.length);
                            location.reload();
                        }


                    })
                    .catch(function (error) {
                        _this.profileDetailsError = { error:true};
                        _this.e_alert = true;
                    })
            },

            save (dob) {
                this.$refs.menu.save(dob)
            },

            formatDate (date) {
                if (!date) return null

                const [year, month, day] = date.split('-')
                return `${day}-${month}-${year}`
            },

            cancelAlertAndProceed(){
                this.s_alert=false;
                this.e_alert=false;
                this.w_alert=false;
                this.profileUpdatePost()
                this.i_alert=false;
            }


        },
        watch: {
            menu (val) {
                val && setTimeout(() => (this.$refs.picker.activePicker = 'YEAR'))
            },
            profileDetails(val){
                val.areaId = this.profileDetails.areaId +''
            }
        },
        computed:{
            formattedDob(){
                return this.formatDate(this.profileDetails.dob)
            },

        },
        metaInfo: {
            titleTemplate: '%s Profile'
        }
    }
</script>

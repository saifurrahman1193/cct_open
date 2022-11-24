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
                            Company Info
                        <v-spacer></v-spacer>
                    </v-card-title>
                    <v-form @submit.prevent="updateCompanyInfoPost()">
                        <v-card-text>

                            <v-row>
                                <v-col cols="12" sm="12" md="6">
                                    <v-text-field name="name" label="Company Name" v-model="companyinfo.name"
                                        type="text"
                                        :rules="nameRules"
                                        :error-messages="companyinfoError.name"
                                    ></v-text-field>
                                </v-col>

                                <v-col cols="12" sm="12" md="6">
                                    <v-text-field name="email" label="Email" v-model="companyinfo.email"
                                        :rules="emailRules"
                                        :error-messages="companyinfoError.email"
                                    ></v-text-field>
                                </v-col>
                            </v-row>

                            <v-row>
                                <v-col cols="12" sm="12" md="6">
                                    <v-text-field name="phone" label="Phone" v-model="companyinfo.phone" type="text"></v-text-field>
                                </v-col>

                                <v-col cols="12" sm="12" md="6">
                                    <v-text-field name="website" label="Website" v-model="companyinfo.website"
                                    ></v-text-field>
                                </v-col>


                            </v-row>



                            <v-row>


                                <v-col cols="12" sm="12" md="6">
                                    <v-textarea
                                        label="Address"
                                        name="address"
                                        id="address"
                                        v-model="companyinfo.address"
                                        rows="2"
                                        auto-grow
                                        outlined
                                    ></v-textarea>
                                </v-col>

                                <v-col cols="12" sm="12" md="6">
                                    <v-btn raised @click="onPickFile('logoPath')"  class="text-capitalize">Logo</v-btn>
                                    <input type="file" ref="logoPath"
                                        accept="image/*"
                                        @change="onFilePickedFromObj($event, 'companyinfo', 'logoPath')" class="d-none">

                                    <v-img v-if="companyinfo.logoPath" :src="companyinfo.logoPath" max-height="100" min-height="100" aspect-ratio contain class="mt-5" ></v-img>
                                </v-col>





                                <!-- <v-col cols="12" sm="12" md="6">
                                    <v-text-field name="number" label="Number" v-model="companyinfo.number"
                                    ></v-text-field>
                                </v-col> -->
                            </v-row>



                        </v-card-text>
                        <v-card-actions >
                            <v-spacer></v-spacer>
                            <v-btn color="success"  type="submit">Save</v-btn>
                            <v-spacer></v-spacer>
                        </v-card-actions>
                    </v-form>
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

    import gallery from './gallery/gallery.vue'
    import picture_mixin from './../../mixins/picture.vue'
    import footer_b from './footer.vue'


    export default {
        components:{
            subheading, modal_alert,  gallery, footer_b
        },
        mounted() {
            this.getCompanyInfo();

        },
        mixins: [modal_alert_mixin, picture_mixin],
        data() {
            return {
                token: localStorage.getItem('token'),
                companyinfo: {},
                nameRules: [
                    v => !!v || 'Company name is required',
                ],
                emailRules: [
                    // v => !!v || 'E-mail is required',
                    v => /.+@.+\..+/.test(v) || 'E-mail must be valid',
                ],

                companyinfoError: {name:'', email:''},
            }
        },
        methods: {
            getCompanyInfo(){
                var _this = this;
                axios.get('/api/getCompanyInfo')
                .then(function (response) {
                    _this.companyinfo = response.data.data;
                })
                .catch(function (error) {
                })
            },

            updateCompanyInfoPost(){
                var _this = this;
                axios.post('/api/updateCompanyInfo?token='+_this.token,  this.companyinfo)
                .then(function (response) {
                    _this.s_alert = true;

                    if(_this.companyinfo.logoPath && _this.companyinfo.logoPath.length>100){
                        console.log(_this.companyinfo.logoPath.length);
                        location.reload();
                    }

                    if(_this.companyinfo.aboutPicPath && _this.companyinfo.aboutPicPath.length>100){
                        console.log(_this.companyinfo.aboutPicPath.length);
                        location.reload();
                    }


                })
                .catch(function (error) {
                    _this.e_alert = true;
                })
            },


        },
        computed: {

        },

    }
</script>


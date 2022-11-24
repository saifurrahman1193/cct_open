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
                            Card Settings
                        <v-spacer></v-spacer>
                    </v-card-title>
                    <v-form @submit.prevent="updateCardsettings()">
                        <v-card-text>

                            <v-row>


                                <v-col cols="12" sm="12" md="6">
                                    <v-text-field name="authority1type" label="Authority 1 type *" v-model="cardsettings.authority1type"
                                        type="text"
                                        :rules="authority1typeRules"
                                        :error-messages="cardsettingsError.authority1type"
                                    ></v-text-field>
                                </v-col>

                                <v-col cols="12" sm="12" md="6">
                                    <v-text-field name="authority1typeBN" label="Authority 1 type BN*" v-model="cardsettings.authority1typeBN"
                                        type="text"
                                        :rules="authority1typeBNRules"
                                        :error-messages="cardsettingsError.authority1typeBN"
                                    ></v-text-field>
                                </v-col>

                                <v-col cols="12" sm="12" md="6">
                                    <v-btn raised @click="onPickFile('authority1signature')"  class="text-capitalize">Authority 1 signature</v-btn>
                                    <v-chip v-if="cardsettingsError.authority1signature" color="red" outlined>{{cardsettingsError.authority1signature[0]}}</v-chip>
                                    <input type="file" ref="authority1signature"
                                        accept="image/*"
                                        @change="onFilePickedFromObj($event, 'cardsettings', 'authority1signature')" class="d-none">

                                    <v-img v-if="cardsettings.authority1signature" :src="cardsettings.authority1signature" max-height="100" min-height="100" aspect-ratio contain class="mt-5" ></v-img>
                                </v-col>

                                <v-col cols="12" sm="12" md="6">
                                    <v-text-field name="authority1title" label="Authority 1 title *" v-model="cardsettings.authority1title"
                                        type="text"
                                        :rules="authority1titleRules"
                                        :error-messages="cardsettingsError.authority1title"
                                    ></v-text-field>
                                </v-col>

                                <v-col cols="12" sm="12" md="6">
                                    <v-text-field name="authority1titleBN" label="Authority 1 title BN*" v-model="cardsettings.authority1titleBN"
                                        type="text"
                                        :rules="authority1titleBNRules"
                                        :error-messages="cardsettingsError.authority1titleBN"
                                    ></v-text-field>
                                </v-col>

                                <v-col cols="12" sm="12" md="6">
                                    <v-text-field name="authority2type" label="Authority 1 type *" v-model="cardsettings.authority2type"
                                        type="text"
                                        :rules="authority2typeRules"
                                        :error-messages="cardsettingsError.authority2type"
                                    ></v-text-field>
                                </v-col>

                                <v-col cols="12" sm="12" md="6">
                                    <v-text-field name="authority2typeBN" label="Authority 1 type BN*" v-model="cardsettings.authority2typeBN"
                                        type="text"
                                        :rules="authority2typeBNRules"
                                        :error-messages="cardsettingsError.authority2typeBN"
                                    ></v-text-field>
                                </v-col>

                                <v-col cols="12" sm="12" md="6">
                                    <v-btn raised @click="onPickFile('authority2signature')"  class="text-capitalize">Authority 2 signature</v-btn>
                                    <v-chip v-if="cardsettingsError.authority2signature" color="red" outlined>{{cardsettingsError.authority2signature[0]}}</v-chip>
                                    <input type="file" ref="authority2signature"
                                        accept="image/*"
                                        @change="onFilePickedFromObj($event, 'cardsettings', 'authority2signature')" class="d-none">

                                    <v-img v-if="cardsettings.authority2signature" :src="cardsettings.authority2signature" max-height="100" min-height="100" aspect-ratio contain class="mt-5" ></v-img>
                                </v-col>

                                <v-col cols="12" sm="12" md="6">
                                    <v-text-field name="authority2title" label="Authority 1 title *" v-model="cardsettings.authority2title"
                                        type="text"
                                        :rules="authority2titleRules"
                                        :error-messages="cardsettingsError.authority2title"
                                    ></v-text-field>
                                </v-col>

                                <v-col cols="12" sm="12" md="6">
                                    <v-text-field name="authority2titleBN" label="Authority 1 title BN*" v-model="cardsettings.authority2titleBN"
                                        type="text"
                                        :rules="authority2titleBNRules"
                                        :error-messages="cardsettingsError.authority2titleBN"
                                    ></v-text-field>
                                </v-col>

                                <v-col cols="12" sm="12" md="6">
                                    <v-text-field name="topTitle" label="Top Title*" v-model="cardsettings.topTitle"
                                        type="text"
                                        :rules="topTitleRules"
                                        :error-messages="cardsettingsError.topTitle"
                                    ></v-text-field>
                                </v-col>

                                <v-col cols="12" sm="12" md="6">
                                    <v-text-field name="topTitleBN" label="Top Title BN*" v-model="cardsettings.topTitleBN"
                                        type="text"
                                        :rules="topTitleBNRules"
                                        :error-messages="cardsettingsError.topTitleBN"
                                    ></v-text-field>
                                </v-col>

                                <v-col cols="12" sm="12" md="6">
                                    <v-btn raised @click="onPickFile('logo')"  class="text-capitalize">Logo</v-btn>
                                    <v-chip v-if="cardsettingsError.logo" color="red" outlined>{{cardsettingsError.logo[0]}}</v-chip>
                                    <input type="file" ref="logo"
                                        accept="image/*"
                                        @change="onFilePickedFromObj($event, 'cardsettings', 'logo')" class="d-none"
                                        >

                                    <v-img v-if="cardsettings.logo" :src="cardsettings.logo" max-height="100" min-height="100" aspect-ratio contain class="mt-5" ></v-img>
                                </v-col>


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
            this.getCardsettings();

        },
        mixins: [modal_alert_mixin, picture_mixin],
        data() {
            return {
                token: localStorage.getItem('token'),
                cardsettings: {
                    authority1type:'', authority1typeBN:'', authority1title:'', authority1titleBN:'', authority2type:'', authority2typeBN:'', authority2title:'', authority2titleBN:'', topTitle:'', topTitleBN:''
                },
                authority1typeRules: [
                    v => !!v || 'Authority 1 type is required',
                ],
                authority1typeBNRules: [
                    v => !!v || 'Authority 1 type BN is required',
                ],
                authority1signatureRules: [
                    v => !!v || 'Authority 1 signature is required',
                ],
                authority1titleRules: [
                    v => !!v || 'Authority 1 title is required',
                ],
                authority1titleBNRules: [
                    v => !!v || 'Authority 2 title BN is required',
                ],
                authority2typeRules: [
                    v => !!v || 'Authority 2 type is required',
                ],
                authority2typeBNRules: [
                    v => !!v || 'Authority 2 type BN is required',
                ],
                authority2signatureRules: [
                    v => !!v || 'Authority 2 signature is required',
                ],
                authority2titleRules: [
                    v => !!v || 'Authority 2 title is required',
                ],
                authority2titleBNRules: [
                    v => !!v || 'Authority 2 title BN is required',
                ],
                topTitleRules: [
                    v => !!v || 'Top title is required',
                ],
                topTitleBNRules: [
                    v => !!v || 'Top title BN is required',
                ],
                logoRules: [
                    v => !!v || 'Logo is required',
                ],

                cardsettingsError: {authority1type:'', authority1typeBN:'', authority1title:'', authority1titleBN:'', authority2type:'', authority2typeBN:'', authority2signature:'', authority2title:'', authority2titleBN:'', topTitle:'', topTitleBN:'', logo:''},
            }
        },
        methods: {
            getCardsettings(){
                var _this = this;
                axios.get('/api/getCardsettings')
                .then(function (response) {
                    _this.cardsettings = response.data.data;
                })
                .catch(function (error) {
                })
            },

            updateCardsettings(){
                var _this = this;
                axios.post('/api/updateCardsettings?token='+_this.token,  this.cardsettings)
                .then(function (response) {
                    _this.s_alert = true;

                    if(_this.cardsettings.authority1signature && _this.cardsettings.authority1signature.length>100
                        || _this.cardsettings.authority2signature && _this.cardsettings.authority2signature.length>100
                        || _this.cardsettings.logo && _this.cardsettings.logo.length>100
                    ){
                        console.log(_this.cardsettings.authority1signature.length);
                        location.reload();
                    }
                })
                .catch(function (error) {
                    _this.cardsettingsError = {
                        authority1type: error.response.data.authority1type,
                        authority1typeBN: error.response.data.authority1typeBN,
                        authority1signature: error.response.data.authority1signature,
                        authority1title: error.response.data.authority1title,
                        authority1titleBN: error.response.data.authority1titleBN,
                        authority2type: error.response.data.authority2type,
                        authority2typeBN: error.response.data.authority2typeBN,
                        authority2signature: error.response.data.authority2signature,
                        authority2title: error.response.data.authority2title,
                        authority2titleBN: error.response.data.authority2titleBN,
                        topTitle: error.response.data.topTitle,
                        topTitleBN: error.response.data.topTitleBN,
                        logo: error.response.data.logo
                    }
                    _this.e_alert = true;
                })
            },


        },
        computed: {

        },

    }
</script>


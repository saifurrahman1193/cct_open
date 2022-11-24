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
                        Pages
                        <v-spacer></v-spacer>
                    </v-card-title>

                    <v-card-text>

                        <v-row>


                            <v-dialog v-model="dialog_crud"   @keydown.esc="close()"  @keydown.enter="crudConfirm()" persistent>

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
                                                        <v-text-field name="pageTitle" label="Page Title" v-model="page.pageTitle"
                                                            :rules="pageTitleRules"
                                                            :error-messages="pageError.pageTitle"
                                                        ></v-text-field>
                                                    </v-col>

                                                    <v-col cols="12" sm="12" md="12">
                                                        <v-text-field name="pageSlug" label="Page Slug" v-model="page.pageSlug"
                                                            :rules="pageSlugRules"
                                                            :error-messages="pageError.pageSlug"
                                                        ></v-text-field>
                                                    </v-col>

                                                    <v-col cols="12" sm="12" md="12">
                                                        <v-card>
                                                            <v-card-title primary-title>
                                                                Short description
                                                            </v-card-title>
                                                            <v-card-text>
                                                                <tiptap-vuetify
                                                                    v-model="page.pageDesc"
                                                                    :extensions="extensions"
                                                                    placeholder="Description"
                                                                ></tiptap-vuetify>

                                                                <v-textarea
                                                                v-model="page.pageDesc"
                                                                auto-grow  outlined  rows="5"
                                                                counter
                                                                clearable
                                                                pt-2

                                                                ></v-textarea>
                                                            </v-card-text>


                                                        </v-card>
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
                        :items="pages"
                        :search="search"
                        >

                            <template v-slot:[`item.pageDescription`]="{ item }">
                                <readmoreless :text="item.pageDesc" ></readmoreless>
                            </template>


                            <template v-slot:[`item.action`]="{ item }">

                                <v-tooltip top>
                                    <template v-slot:activator="{ on }">
                                        <v-icon @click="editDialog(item.pageId)" v-on="on">edit</v-icon>
                                    </template>
                                    <span>Edit Record ?</span>
                                </v-tooltip>

                                <v-tooltip top v-if="item.isDeletable==1">
                                    <template v-slot:activator="{ on }">
                                        <v-icon @click="deleteConfirm(item.pageId)" v-on="on">delete</v-icon>
                                    </template>
                                    <span>Delete Record ?</span>
                                </v-tooltip>

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

    </v-app>
</template>


<script>
    import subheading from './subheading.vue'
    import modal_alert from './../../frontend/components/modals/alert.vue'
    import modal_alert_mixin from './../../frontend/components/modals/alertMixins.vue'
    // tiptap-vuetify
    import readmoreless from './../../components/readmoreless.vue'
    import titptap_vuetify_editor_mixin from './../../mixins/titptap_vuetify_editor.vue'

    export default {
        components:{
            subheading, modal_alert, readmoreless
        },
        mounted() {
            this.getPages();
        },
        mixins: [modal_alert_mixin, titptap_vuetify_editor_mixin],
        data() {
            return {
                token: localStorage.getItem('token'),
                search: '',
                headers: [
                    {
                        text: 'Page Id',
                        align: 'start',
                        // sortable: false,
                        value: 'pageId',
                    },
                    { text: 'Page Title', value: 'pageTitle' },
                    { text: 'Page Slug', value: 'pageSlug' },
                    { text: 'Page Description', value: 'pageDescription' , width:500},
                    { text: 'Actions', value: 'action', sortable: false },
                ],
                pages: [],

                // add dialog
                formTitle: 'Page',
                page: {
                    pageTitle: '',
                    pageSlug: '',
                    pageDesc: '',
                },
                pageError: {
                    pageTitle: '',
                    pageSlug: '',
                    pageDesc: '',
                },
                pageTitleRules: [
                    v => !!v || 'Page title is required',
                ],
                pageSlugRules: [
                    v => !!v || 'Page slug is required',
                ],

            }
        },
        methods: {

            getPages(){
                var _this = this;
                axios.get('/api/getPages')
                .then(function (response) {
                    _this.pages = response.data.data;
                })
                .catch(function (error) {
                })
            },
            clearForm(){
                this.page= {
                    pageTitle: '',
                    pageSlug: '',
                    pageDesc: '',
                 }
                this.pageError= {
                    pageTitle: '',
                    pageSlug: '',
                    pageDesc: '',
                 }
            },


            setEditDialogFields(id){
                var _this = this;
                axios.get('/api/getPage/'+id)
                .then(function (response) {
                    _this.page = response.data.data;
                })
                .catch(function (error) {
                })
            },

            editing(){
                var _this = this;
                axios.post('/api/editPage?token='+this.token, this.page)
               .then(function (response) {
                    _this.s_alert = true;

                    _this.dialog_crud = false
                    _this.getPages()
                    _this.clearForm()
                    _this.editingId=''
                })
                .catch(function (error) {
                    _this.e_alert = true;
                    _this.pageError = { pageTitle: error.response.data.pageTitle, pageSlug: error.response.data.pageSlug };
                })
            },

        },

        watch: {
            'page.pageSlug': {
                handler(val){
                    this.page.pageSlug = this.string_to_slug(this.page.pageSlug)
                },
                deep: true
            }
        }

    }
</script>


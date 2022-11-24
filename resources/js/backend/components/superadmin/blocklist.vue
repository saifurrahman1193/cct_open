<template>
<v-app  id="inspire">

    <subheading></subheading>
    <div>
        <v-sheet
            class=" ma-2"
            elevation="0"
            color="grey lighten-5"
        >

            <v-content>
                <v-card elevation="2" >
                    <v-card-title primary-title >
                        <v-spacer></v-spacer>
                        Block List
                        <v-spacer></v-spacer>
                    </v-card-title>

                    <v-card-text>

                        <v-row>


                            <v-spacer></v-spacer>
                            <v-text-field
                                v-model="searchInput"
                                append-icon="mdi-magnify"
                                label="Search"
                                single-line
                                hide-details
                                @keyup="searchOnKeyUp($event)"
                            ></v-text-field>
                        </v-row>




                        <!-- table start here -->
                        <!-- table start here -->
                        <!-- table start here -->

                        <v-simple-table >
                            <template v-slot:default>
                                <thead>
                                    <tr>
                                        <th class="text-left">Serial</th>
                                        <th class="text-left">User</th>
                                        <th class="text-left">User Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                    v-for="(item, i) in users"
                                    :key="item.name"
                                    >
                                        <td>{{ getPaginatedSerial(paginator, i) }}</td>

                                        <td>
                                            <lists
                                                :lists="[
                                                    {key: '<strong>Id</strong>', value: item.id },
                                                    {key: '<strong>Name</strong>', value: item.deviceUserName },
                                                    {key: '<strong>Department</strong>', value: item.department },
                                                    {key: '<strong>Designation</strong>', value: item.designation },
                                                    {key: '<strong>NID</strong>', value: item.nid },

                                                    {key: '<strong>Card No</strong>', value: parseInt(item.cardNo)>0 ? item.cardNo : '- - - - - - - - - -' },
                                                    {key: '<strong>ID Card Type</strong>', value: '<strong>'+(item.cardtype||'')+'</strong>' },

                                                    {key: '<strong>Issue Date</strong>', value: (formatDate(item.issueDate) || '') },
                                                    {key: '<strong>Valid Date Range</strong>', value:  getDateRange(item.validDateStart, item.validDateEnd) },
                                                ]"
                                            ></lists>
                                        </td>

                                        <td>
                                            <isuserenabled :userStatusInDevice="item.userStatusInDevice" :user="item" @getUsers="getBlocklist_p()"></isuserenabled>
                                        </td>

                                    </tr>
                                </tbody>
                            </template>




                        </v-simple-table>

                        <v-divider></v-divider>
                        <Paginate :paginator="paginator" @pagechanged="pagechanged"/>

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

        <zoom_modal
            :zoomDialog="zoomDialog"
            :zoomPath="zoomPath"
            @cancelZoom="cancelZoom()"
        ></zoom_modal>
    </div>

        <v-spacer></v-spacer>
    <footer_b></footer_b>

</v-app>

</template>


<script>

    import subheading from './../subheading.vue'
    import footer_b from '../footer.vue'

    import modal_alert from './../../../frontend/components/modals/alert.vue'
    import modal_alert_mixin from './../../../frontend/components/modals/alertMixins.vue'
    import isuserenabled from './isuserenabled.vue'

    // zoom
    import zoom_modal from './../../../frontend/components/zoom/zoom.vue'
    import zoom_mixin from './../../../frontend/components/zoom/zoomMixins.vue'

    // pic
    import picture_mixin from './../../../mixins/picture.vue'


    import lists from '../lists.vue'
    import Paginate from '../../../components/Paginate.vue'

    export default {
        components:{
            modal_alert, zoom_modal, lists, isuserenabled, Paginate, subheading, footer_b
        },
        mounted() {
            this.getBlocklist_p();
        },
        mixins: [modal_alert_mixin, zoom_mixin, picture_mixin],
        data() {
            return {
                token: localStorage.getItem('token'),
                searchInput: '',
                headers: [
                    {
                        text: 'User Id',
                        align: 'start',
                        // sortable: false,
                        value: 'id',
                    },

                    // { text: 'Picture', value: 'photoPath' },
                    { text: 'User', value: 'user' },
                    { text: 'User Status', value: 'userStatusInDevice' },
                ],
                users: [],
                paginator: {},
            }
        },
        methods: {


            getBlocklist_p(page=1){
                var _this = this;
                axios.post('/api/getBlocklist_p'+'?token='+ _this.token, {'page' : page,'search' : this.searchInput})
                .then(function (response) {
                    _this.users = response.data.data.data;
                    _this.paginator = response.data.data.paginator;
                })
                .catch(function (error) {
                })
            },
            pagechanged(page){
                this.getBlocklist_p(page)
            },

            search(){
                setTimeout(() => {
                    console.log('======================search called===============================');
                    this.getBlocklist_p()
                }, 1000);
            },





        },
        computed: {





        },

    }
</script>

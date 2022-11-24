<template>
    <div>
        <v-app-bar
        app
        clipped-left
        dense
        elevation="5"
        class="blue-grey lighten-4"

        >
            <v-app-bar-nav-icon @click.stop="drawer = !drawer" ></v-app-bar-nav-icon>
            <v-spacer></v-spacer>
            <span style="color: indigo">ZKTeco PIMS Software</span>
            <v-spacer></v-spacer>
            <!-- <v-btn  text @click="logout()">
                Logout
            </v-btn> -->


            <!-- <v-btn    text icon  style="margin-bottom: -10px;" @click="gotorouterview('/admin/chat')">
                <v-icon >chat</v-icon>
            </v-btn>



            <v-menu
                offset-y
                transition="slide-x-transition"
                bottom
                >
                <template v-slot:activator="{ on }" >
                    <v-btn   v-on="on"  text icon class="mr-8" style="margin-bottom: -10px;">
                        <v-badge  :color="(notifications || []).length>0? 'green' : ''" :content="(notifications || []).length>0?(notifications || []).length : ''"  >
                            <v-icon v-if="(notifications || []).length>0" color="red" @click="1">notifications</v-icon>
                            <v-icon v-else >notifications_none</v-icon>
                        </v-badge>
                    </v-btn>
                </template>
                <v-list min-width="220" dense>
                    <v-list-item
                        v-for="(item, index) in notifications"
                        :key="index"
                        dense
                        @click="gotorouterviewnotification(item)"

                        >
                            <v-list-item-title  class="pl-1" style="white-space:normal !important;" >
                                {{ item.message }}
                                <h6 style="font-size:10px; color:#00000094; ">{{datetimeprocessing(item.created_at)}}</h6>
                            </v-list-item-title>

                    </v-list-item>
                    <v-divider></v-divider>
                    <v-list-item dense >
                        <v-list-item-title class="pl-1"  style="white-space:normal !important;">You have {{(notifications || []).length}} new notificatios</v-list-item-title>
                    </v-list-item>
                </v-list>
            </v-menu> -->


            <v-menu
                offset-y
                transition="slide-x-transition"
                bottom
                >
                <template v-slot:activator="{ on }">
                    <v-btn text icon>
                        <v-avatar  color="indigo" v-on="on">
                            <v-icon color="white" v-if="!userInfo.photoPath">person</v-icon>
                            <img
                                :src="userInfo.photoPath"
                                :alt="((userInfo.name).match(/\b(\w)/g)).join('')"
                                v-if="userInfo.photoPath"
                            >
                        </v-avatar>
                    </v-btn>
                </template>
                <v-list min-width="250">

                    <v-treeview
                    :items="profileMenu"
                    item-key="id"
                    open-on-click
                    dense
                    activatable
                    color="indigo"


                    >
                        <template slot="label" slot-scope="{ item }" >
                            <v-icon small v-if="(item.icon || '').length>0">{{item.icon}}</v-icon>

                            <hr v-if="item.isSeparator || false" style="margin:0px; padding:0px; ">
                            <span v-if="item.isProfile">{{ userInfo.name ?  userInfo.name : userInfo.deviceUserName }}</span>
                            <a   v-else-if="(item.link || '').length>0" class="black--text tree-node"  @click="gotorouterview(item.link)">{{item.text}}</a>
                            <a   v-else-if="(item.href || '').length>0" class="black--text tree-node"  :href="item.href" target="_blank">{{item.text}}</a>
                            <a   v-else-if="(item.postLink || '').length>0" class="black--text tree-node"  @click="axiosPost(item.postLink)">{{item.text}}</a>
                            <a   v-else-if="item.isLogout || false " class="black--text tree-node"  @click="logout()">{{item.text}}</a>
                            <a   v-else class="black--text tree-node"  >{{item.text}}</a>
                        </template>

                    </v-treeview>

                </v-list>
            </v-menu>


        </v-app-bar>

        <v-navigation-drawer
            v-model="drawer"
            app
            clipped
            class="blue-grey lighten-5"

            >


            <!-- <v-list dense   >
                <v-list-item-group >
                    <v-list-item v-for="item in leftSidebarItemsAccessFilter" :key="item.text" @click="gotorouterview(item.link)" :to="item.link" >
                            <v-list-item-icon>
                                <v-icon>{{ item.icon }}</v-icon>
                            </v-list-item-icon>

                            <v-list-item-content>
                                <v-list-item-title >{{ item.text }}</v-list-item-title>
                            </v-list-item-content>
                    </v-list-item>
                </v-list-item-group>
            </v-list> -->

            <v-treeview
                :items="leftSidebarItemsTree"
                item-key="moduleId"
                shaped
                open-on-click
                dense
                activatable
                color="indigo"
                :open="admin_subheading_parent_moduleId"


            >
                <template slot="label" slot-scope="{ item, open }" >
                    <a  @click="gotorouterview(item.link); setOpenItem(item.moduleId, item.parentModuleId);"  class="black--text tree-node " :class="open ?  'indigo--text': '' "  :style="admin_subheading_moduleId==item.moduleId ? 'color:indigo !important; text-decoration:underline; font-weight:bold;':''">
                        <v-icon>{{item.icon}}</v-icon>
                        {{item.text}}
                    </a>
                    <!-- <v-icon>{{ item.icon }}</v-icon>
                    <v-list-item-title >{{ item.text }}</v-list-item-title> -->
                </template>
            </v-treeview>


        </v-navigation-drawer>


    </div>


</template>


<script>
    import { mapState, mapGetters } from 'vuex'


export default {
    mounted() {

        this.$store.dispatch('checkIsLoggedIn')
        this.$store.dispatch('setCurrentUserModules')
        this.getAdminNotifications()

    },
    data() {
        return {
            token:localStorage.getItem('token'),
            drawer: null,
            notifications:[],
            leftSidebarItems: [
                { icon: 'dashboard', text: 'Dashboard', link:'/admin/dashboard' , moduleId:100},
                { icon: 'verified_user', text: 'Developer', link:'/admin/superadmin/developer', moduleId:1 },
                { icon: 'verified_user', text: 'Employee Management', link:'/admin/superadmin/accesscontrol', moduleId:200 },
                { icon: 'block', text: 'Block List', link:'/admin/superadmin/blocklist', moduleId:201 },
                { icon: 'block', text: 'Block List History', link:'/admin/superadmin/blocklisthistory', moduleId:202 },

                { icon: 'business', text: 'Company Settings', link:'/admin/company' , moduleId:1100},
                { icon: 'badge', text: 'Card Settings', link:'/admin/cardsettings' , moduleId:2200},
                { icon: 'devices', text: 'Device Management', link:'/admin/devices' , moduleId:1200},
                { icon: 'supervised_user_circle', text: 'Department Management', link:'/admin/departments' , moduleId:1300},
                { icon: 'badge', text: 'ID Card Type Management', link:'/admin/cardtypes' , moduleId:1301},
                { icon: 'badge', text: 'Designation Management', link:'/admin/designations' , moduleId:1400},
                // { icon: '', text: 'Employment Types', link:'/admin/employmenttypes' , moduleId:1500},
                // { icon: 'schedule', text: 'Shiftings', link:'/admin/shiftings' , moduleId:1600},




                // // products
                // { icon: 'list_alt', text: 'Product', name: 'product', link:'/admin/products' , moduleId:300},
                // { icon: '', text: 'Batch Management', link:'/admin/batch' , moduleId:301, parentModuleId:300},
                // { icon: '', text: 'Category', link:'/admin/categories' , moduleId:302, parentModuleId:300},
                // { icon: '', text: 'Product Type', link:'/admin/producttypes' , moduleId:303, parentModuleId:300},
                // { icon: '', text: 'Skin Type', link:'/admin/skintypes' , moduleId:304, parentModuleId:300},
                // { icon: '', text: 'Application Area', link:'/admin/applicationareas' , moduleId:305, parentModuleId:300},
                // { icon: '', text: 'Formulation', link:'/admin/Formulation' , moduleId:306, parentModuleId:300},
                // { icon: '', text: 'Uom', link:'/admin/uoms' , moduleId:307, parentModuleId:300},
                // { icon: '', text: 'Brand', link:'/admin/brands' , moduleId:308, parentModuleId:300},
                // { icon: '', text: 'Supplier', link:'/admin/suppliers' , moduleId:309, parentModuleId:300},
                // { icon: '', text: 'Country', link:'/admin/country' , moduleId:310, parentModuleId:300},

                // // frontend
                // { icon: 'tv', text: 'Frontend', link:'/admin/frontend' , moduleId:400},
                // { icon: '', text: 'Advertisement Slider', link:'/admin/advertisementsliders' , moduleId:401, parentModuleId:400},
                // { icon: '', text: 'Featured Products', link:'/admin/featuredproducts' , moduleId:402, parentModuleId:400},

                // { icon: '', text: 'Latest Products', link:'/admin/latestproducts' , moduleId:407, parentModuleId:400},
                // { icon: '', text: 'Best Selling Products', link:'/admin/bestsellingproducts' , moduleId:408, parentModuleId:400},
                // { icon: '', text: 'Top Rated Products', link:'/admin/topratedproducts' , moduleId:409, parentModuleId:400},

                // { icon: '', text: 'Limited Editions', link:'/admin/limitededitions' , moduleId:403, parentModuleId:400},
                // { icon: '', text: 'New Arrivals', link:'/admin/newarrivals' , moduleId:404, parentModuleId:400},
                // { icon: '', text: 'Company Settings', link:'/admin/company' , moduleId:405, parentModuleId:400},
                // { icon: '', text: 'Pages', link:'/admin/pages' , moduleId:406, parentModuleId:400},
                // { icon: '', text: 'Gifts', link:'/admin/gifts' , moduleId:410, parentModuleId:400},

                // // cart
                // { icon: 'shopping_basket', text: 'Carts', link:'/admin/carts' , moduleId:500},
                // { icon: 'shopping_basket', text: 'Manual Cart', link:'/admin/manualcart' , moduleId:505, parentModuleId:500},
                // { icon: 'local_shipping', text: 'Delivery Settings', link:'/admin/deliverysettings' , moduleId:501, parentModuleId:500},
                // { icon: 'money_off', text: 'Discount Settings', link:'/admin/discountsettings' , moduleId:502, parentModuleId:500},
                // { icon: 'payment', text: 'Payment Settings', link:'/admin/paymentsettings' , moduleId:503, parentModuleId:500},
                // { icon: 'location_on', text: 'Area', link:'/admin/areas' , moduleId:504, parentModuleId:500},

                // reports
                // { icon: 'menu_book', text: 'Reports', link:'/admin/reports' , moduleId:2100},
                { icon: 'bar_chart', text: 'Report Management ', link:'/admin/attendance_report' , moduleId:2101},
                // { icon: '', text: 'Product Visit Report', link:'/admin/productvisit' , moduleId:601, parentModuleId:600},
                // { icon: '', text: 'Wishlist Report', link:'/admin/wishlistall' , moduleId:602, parentModuleId:600},
                // { icon: '', text: 'Compare List Report', link:'/admin/comparelist' , moduleId:603, parentModuleId:600},
                // { icon: '', text: 'Low Stock Report', link:'/admin/lowstockreport' , moduleId:604, parentModuleId:600},
                // { icon: '', text: 'Sales Report Graph', link:'/admin/salesreport' , moduleId:605, parentModuleId:600},
                // { icon: '', text: 'Valuable Customers', link:'/admin/valuablecustomers' , moduleId:606, parentModuleId:600},
                // { icon: '', text: 'DMY Sales Report', link:'/admin/dmysalesreport' , moduleId:607, parentModuleId:600},

            ],
            // profileMenu: [
            //     { text: 'Profile', link:'/admin/profile', icon:'person'},
            //     { text: 'Change Password', link:'/admin/changepassword', icon:'lock'},
            // ],
            profileMenu: [
                { id: 1, text: '',    isProfile:true},
                { id: 11, text: '',    isSeparator:true},
                { id: 2, text: 'Profile', link:'/admin/profile',  icon:'person'},
                { id: 3, text: 'Change Password', link:'/admin/changepassword',  icon:'lock'},
                // { id: 31, text: '',    isSeparator:true},
                // { id: 4, text: 'Backup',   icon:'cloud_download',
                //     children:[
                //         { id: 41, text: 'Storage Backup Generate', postLink:'/api/storageBackup',  icon:'cloud_download'},
                //         { id: 42, text: 'Storage Backup Download',  href:'/storage_backup.zip', icon:'cloud_download'},
                //         { id: 43, text: 'Storage Backup Delete', postLink:'/api/storageBackupDelete',  icon:'delete'},
                //         { id: 47, text: '',  isSeparator:true},
                //         { id: 44, text: 'DB Backup Generate', postLink:'/api/serverDBBackup',  icon:'note_add'},
                //         { id: 45, text: 'DB Backup Download',  href:'/server_db_backup.sql', icon:'cloud_download'},
                //         { id: 46, text: 'DB Backup Delete', postLink:'/api/dbBackupDelete',  icon:'delete'},
                //     ]
                // },
                { id: 41, text: '',    isSeparator:true},
                { id: 5, text: 'Cache Remove', postLink:'/api/cacheRemove',  icon:'delete' },
                { id: 51, text: '',    isSeparator:true},
                { id: 6, text: 'Sign Out', icon:'power_settings_new', isLogout:true},
            ],

        }
    },
    methods: {

        logout(){
            var _this = this;
            axios.post('/api/auth/logout?token='+this.token)
            .then(function (response) {
                // window.location.href = '/login';

                this.$router.push('/admin');
                // _this.gotorouterview('/login');
                localStorage.removeItem('token')
            })
            .catch(function (error) {
                // window.location.href = '/login';
                // this.$router.push('/login');
                _this.gotorouterview('/admin');
                localStorage.removeItem('token')
            })
        },

        getTree(arr) {
            // return arr

            var tree = [],
                mappedArr = {},
                arrElem,
                mappedElem;

            // First map the nodes of the array to an object -> create a hash table.
            for(var i = 0, len = arr.length; i < len; i++) {
                arrElem = arr[i];
                mappedArr[arrElem.moduleId] = arrElem;
                mappedArr[arrElem.moduleId]['children'] = [];
            }


            for (var moduleId in mappedArr) {
                if (mappedArr.hasOwnProperty(moduleId)) {
                    mappedElem = mappedArr[moduleId];
                    // If the element is not at the root level, add it to its parent array of children.
                    if (mappedElem.parentModuleId) {
                        mappedArr[mappedElem['parentModuleId']]['children'].push(mappedElem);
                    }
                    // If the element is at the root level, add it to first level elements array.
                    else {
                        tree.push(mappedElem);
                    }
                }
            }
            return tree;
        },

        setOpenItem(moduleId, parentModuleId){
            if (parentModuleId) {
                this.$store.commit('ADD_TO_ADMIN_SUBHEADING_PARENTMODULEID', parentModuleId)
                this.$store.commit('ADD_TO_ADMIN_SUBHEADING_MODULEID', moduleId)
            }
            else if(moduleId){
                this.$store.commit('ADD_TO_ADMIN_SUBHEADING_PARENTMODULEID', '')
                this.$store.commit('ADD_TO_ADMIN_SUBHEADING_MODULEID', moduleId)
            }
            else{
                this.$store.commit('ADD_TO_ADMIN_SUBHEADING_PARENTMODULEID', '')
                this.$store.commit('ADD_TO_ADMIN_SUBHEADING_MODULEID', '')
            }
        },

        getAdminNotifications(){
            var _this = this;
            axios.get('/api/getAdminNotifications?token='+ this.token)
            .then(function (response) {
                _this.notifications = (response.data.data).reverse();
            })
            .catch(function (error) {
            })
        },
        gotorouterviewnotification(notificationData){
            if((notificationData.cartId||0)>0){
                this.setAdminNotificationsReadAt(notificationData.notificationId)
                this.gotorouterview('/admin/carts?cartId='+notificationData.cartId)
            }
        },
        setAdminNotificationsReadAt(notificationId){
            var _this = this;
            axios.post('/api/setAdminNotificationsReadAt/'+notificationId+'?token='+ this.token)
            .then(function (response) {

            })
            .catch(function (error) {
            })
        },




    },
    computed: {
        ...mapState([
             'userInfo',  'currentUserModules', 'currentUserModulesRouteNames', 'admin_subheading_parent_moduleId', 'admin_subheading_moduleId'
        ]),
        leftSidebarItemsAccessFilter : function(){
            var _this = this
            return this.leftSidebarItems.filter(function(leftsidebaritem){
                var condition = false;
                _this.currentUserModules.forEach(element => {
                    if (leftsidebaritem.moduleId == element)
                    {
                        condition =  true;
                    }
                });

                return condition;
            });

        },

        leftSidebarItemsTree:function() {

            let leftSidebarItemsWithChild=this.leftSidebarItemsAccessFilter

            leftSidebarItemsWithChild.forEach(function (item) {
                item.children=[]
                if (!item.parentModuleId) {
                    item.parentModuleId=""
                }
            });

            return this.getTree(leftSidebarItemsWithChild);
        },

    },
}
</script>

<style scoped>
    .tree-node:hover{
        text-decoration : underline !important;
    }
</style>

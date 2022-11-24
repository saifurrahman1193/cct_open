<template>

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
                        Roles
                        <v-spacer></v-spacer>
                    </v-card-title>

                    <v-card-text>

                        <v-row>


                            <v-dialog v-model="dialog_crud" max-width="500px"  @keydown.esc="close()"  @keydown.enter="crudConfirm()" persistent>
                                <template v-slot:activator="{ on }">
                                    <v-btn color="primary" dark class="mb-2 ml-5" v-on="on">Add a new {{ formTitle }}</v-btn>
                                </template>
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
                                                    <v-text-field name="roleName" label="Role" v-model="role.roleName"
                                                        :rules="roleRules"
                                                        :error-messages="roleError.roleName"
                                                    ></v-text-field>
                                                </v-col>

                                                <v-col cols="12" sm="12" md="12">
                                                    <v-textarea name="description" label="Description" v-model="role.description" auto-grow  outlined  rows="2"></v-textarea>
                                                </v-col>

                                                <v-autocomplete
                                                        label="Modules"
                                                        :items="modules"
                                                        item-text="module"
                                                        item-value="moduleId"
                                                        dense
                                                        filled
                                                        id="moduleIds"
                                                        name="moduleIds"
                                                        v-model="role.moduleIds"
                                                        multiple
                                                        chips
                                                ></v-autocomplete>



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
                        :items="roles"
                        :search="search"
                        >

                            <template v-slot:[`item.modules`]="{ item }">
                                <v-list dense>
                                    <v-list-item-title class="pl-1"
                                        v-for="(role_with_modules_item, index) in getRoleWithModules(item.roleId)"
                                        :key="index"
                                        >{{role_with_modules_item.module}}
                                    </v-list-item-title>
                                </v-list>
                            </template>

                            <template v-slot:[`item.action`]="{ item }">


                                <v-tooltip top>
                                    <template v-slot:activator="{ on }">
                                    <v-icon @click="editDialog(item.roleId)"  v-if="item.isEditable"  v-on="on">edit</v-icon>
                                    </template>
                                    <span>Edit Record ?</span>
                                </v-tooltip>

                                <!-- <v-tooltip top>
                                    <template v-slot:activator="{ on }">
                                            <v-icon @click="deleteConfirm(item.roleId)" v-if="item.isDeletable"  v-on="on">delete</v-icon>
                                    </template>
                                    <span>Delete Record ?</span>
                                </v-tooltip> -->

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
    </div>


</template>


<script>
    import modal_alert from './../../../frontend/components/modals/alert.vue'
    import modal_alert_mixin from './../../../frontend/components/modals/alertMixins.vue'


    export default {
        components:{
            modal_alert
        },
        mounted() {
            this.getRoles();
            this.getRoleModules();
            this.getModules();
        },
        mixins: [modal_alert_mixin],
        data() {
            return {
                token: localStorage.getItem('token'),
                search: '',
                headers: [
                    {
                        text: 'Role Id',
                        align: 'start',
                        // sortable: false,
                        value: 'roleId',
                    },
                    { text: 'Role', value: 'roleName' },
                    { text: 'Description', value: 'description' },
                    { text: 'Modules', value: 'modules', sortable: false },
                    { text: 'Actions', value: 'action', sortable: false },
                ],
                roles: [],

                // add dialog
                formTitle: 'Role',
                role: {
                    roleName: '',
                    description: '',
                    moduleIds: '',
                },
                rolemodules: [],
                modules: [],
                roleError: {
                    roleName: '',
                    description: '',
                },
                roleRules: [
                    v => !!v || 'Role is required',
                ],

            }
        },
        methods: {

            getRoles(){
                var _this = this;
                axios.get('/api/getRoles'+'?token='+ _this.token)
                .then(function (response) {
                    _this.roles = response.data.data;

                })
                .catch(function (error) {
                })
            },
            getModulesUsingRoleId(roleId){
                console.log('roleId = '+roleId)
                return this.rolemodules.filter(function(rolemodule){
                    return rolemodule.roleId == roleId
                })
                .map(function(rolemodule) {
                    return rolemodule.moduleId;
                });
            },
            getRoleModules(){
                var _this = this;
                axios.get('/api/getRoleModules'+'?token='+ _this.token)
                .then(function (response) {
                    _this.rolemodules = response.data.data;
                })
                .catch(function (error) {
                })
            },
            getRoleWithModules(roleId){
                return this.rolemodules.filter(function(module){
                    return module.roleId == roleId
                });
            },
            getModules(){
                var _this = this;
                axios.get('/api/getModules'+'?token='+ _this.token)
                .then(function (response) {
                    _this.modules = response.data.data;
                    _this.modules = _this.modules.filter((module) => {
                        return module.moduleId != 1
                    });
                })
                .catch(function (error) {
                })
            },
            clearForm(){
                this.role= { roleName: '',  description: '' }
                this.roleError= { roleName: '' }
            },

            adding(){
                var _this=this
                axios.post('/api/addRole/'+'?token='+_this.token, _this.role)
                .then(function (response) {
                    _this.getRoles()
                    _this.s_alert = true;
                    _this.dialog_crud = false
                    _this.clearForm()
                    _this.addingConfirmed=''

                    _this.getRoleModules();
                })
                .catch(function (error) {
                    _this.e_alert = true;
                    _this.roleError = { roleName: error.response.data.roleName };
                })
            },

            deleting(){
                console.log(this.deletingId)
                var _this = this;
                axios.post('/api/deleteRole/'+_this.deletingId+'?token='+_this.token)
                .then(function (response) {
                    _this.getRoles()

                    _this.s_alert = true;
                })
                .catch(function (error) {
                    _this.e_alert = true;
                })
                this.deletingId=''
            },

            setEditDialogFields(id){
                var _this = this;
                axios.get('/api/getRole/'+id+'?token='+_this.token)
                .then(function (response) {
                    _this.role = response.data.data;

                    _this.role.moduleIds = _this.getModulesUsingRoleId(id)

                })
                .catch(function (error) {
                })
            },

            editing(){
                var _this = this;
                axios.post('/api/editRole?token='+_this.token, _this.role)
               .then(function (response) {
                    _this.s_alert = true;
                    _this.dialog_crud = false
                    _this.getRoles()
                    _this.clearForm()
                    _this.editingId=''

                    _this.getRoleModules();
                })
                .catch(function (error) {
                    _this.e_alert = true;
                    _this.roleError = { roleName: error.response.data.roleName };
                })
            },


        },

    }
</script>

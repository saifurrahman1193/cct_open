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
                        Users
                        <v-spacer></v-spacer>
                    </v-card-title>

                    <v-card-text>

                        <v-row>


                            <v-dialog v-model="dialog_crud" max-width="500px"  @keydown.esc="close()"  @keydown.enter="crudConfirm()" persistent fullscreen>
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

                                                    <v-col cols="auto" sm="12" md="6">
                                                        <v-text-field name="id" label="Id*" v-model="user.id"
                                                            :rules="idRules"
                                                            :error-messages="userError.id"
                                                            :disabled="(parseInt(editingId || 0)>0)"
                                                        ></v-text-field>
                                                    </v-col>

                                                    <v-col cols="auto" sm="12" md="6">
                                                        <v-text-field name="membershipNumber" label="Membership Number*" v-model="user.membershipNumber"
                                                            :rules="membershipNumberRules"
                                                            :error-messages="userError.membershipNumber"
                                                        ></v-text-field>
                                                    </v-col>


                                                    <v-col cols="auto" sm="12" md="6">
                                                        <v-text-field name="name" label="Name*" v-model="user.name"
                                                            :rules="nameRules"
                                                            :error-messages="userError.name"
                                                            counter
                                                        ></v-text-field>
                                                    </v-col>

                                                    <v-col cols="auto" sm="12" md="6">
                                                        <v-text-field name="nameBN" label="Name BN*" v-model="user.nameBN"
                                                            :rules="nameBNRules"
                                                            :error-messages="userError.nameBN"
                                                            counter
                                                        ></v-text-field>
                                                    </v-col>

                                                    <v-col cols="auto" sm="12" md="6">
                                                        <v-text-field name="deviceUserName" label="Device User Name*" v-model="user.deviceUserName"
                                                            :rules="deviceUserNameRules"
                                                            :error-messages="userError.deviceUserName"
                                                            counter
                                                        ></v-text-field>
                                                    </v-col>





                                                    <!-- <v-col cols="auto" sm="12" md="6">
                                                        <v-text-field name="email" label="Email*" v-model="user.email"
                                                            :rules="emailRules"
                                                            :error-messages="userError.email"
                                                        ></v-text-field>
                                                    </v-col> -->

                                                    <!-- <v-col cols="auto" sm="12" md="6">
                                                        <v-text-field name="email" label="Password*" v-model="user.password"
                                                            :rules="passwordRules"
                                                            :error-messages="userError.password"
                                                            :type="showPassword ? 'text' : 'password'"
                                                            :append-icon="showPassword ? 'visibility' : 'visibility_off'"
                                                            @click:append="showPassword= !showPassword"
                                                        ></v-text-field>
                                                    </v-col> -->

                                                    <!-- <v-col cols="auto" sm="12" md="6">
                                                        <v-autocomplete
                                                            label="Device*"
                                                            :items="devices"
                                                            item-text="deviceCustomizedName"
                                                            item-value="deviceId"
                                                            dense
                                                            id="deviceId"
                                                            name="deviceId"
                                                            v-model="user.deviceId"
                                                            clearable
                                                        >
                                                            <template v-slot:item="data" >
                                                                <v-list-item-content>

                                                                    <v-list-item-title >Device IP: {{data.item.deviceIP+' ('+data.item.deviceCustomizedName +')'}}</v-list-item-title>

                                                                    <v-list-item-subtitle>{{ string_to_normalbehaviour((data.item.deviceName||'') +', ' + (data.item.deviceIP||'') +':' +(data.item.port || '') +', ')}}</v-list-item-subtitle>

                                                                    <v-list-item-subtitle>{{ string_to_normalbehaviour((data.item.fmVersion||'') +', ' + (data.item.platform||'') +', ' +(data.item.serialNumber || '') +', ')}}</v-list-item-subtitle>

                                                                </v-list-item-content>
                                                            </template>
                                                        </v-autocomplete>
                                                    </v-col> -->


                                                    <v-col cols="auto" sm="12" md="6">
                                                        <v-autocomplete
                                                            label="Devices*"
                                                            :items="devices"
                                                            item-text="device"
                                                            item-value="deviceId"
                                                            dense
                                                            filled
                                                            id="userDeviceIds"
                                                            name="userDeviceIds"
                                                            v-model="user.userDeviceIds"
                                                            multiple
                                                            chips
                                                            clearable
                                                        ></v-autocomplete>
                                                    </v-col>

                                                    <v-col cols="auto" sm="12" md="6">
                                                        <v-autocomplete
                                                            label="Device Role*"
                                                            :items="deviceroles"
                                                            item-text="deviceRole"
                                                            item-value="deviceRoleId"
                                                            dense
                                                            filled
                                                            v-model="user.deviceRoleId"
                                                            chips
                                                            clearable
                                                            :error-messages="userError.deviceRoleId"
                                                            :rules="deviceRoleIdRules"
                                                        ></v-autocomplete>
                                                    </v-col>

                                                    <v-col cols="auto" sm="12" md="6">
                                                        <v-text-field name="cardNo" label="Card No" v-model="user.cardNo"
                                                            :error-messages="userError.cardNo"
                                                        ></v-text-field>
                                                    </v-col>


                                                    <!-- <v-col cols="auto" sm="12" md="6">
                                                        <v-autocomplete
                                                            label="Shifting*"
                                                            :items="shiftings"
                                                            item-text="shifting"
                                                            item-value="shiftingId"
                                                            dense
                                                            id="shiftingId"
                                                            name="shiftingId"
                                                            v-model="user.shiftingId"
                                                            clearable
                                                        >
                                                            <template v-slot:item="data" >
                                                                <v-list-item-content>

                                                                    <v-list-item-title >Shifting: {{data.item.shifting}}</v-list-item-title>

                                                                    <v-list-item-subtitle>{{ getHourTimeToHourTime(data.item.inTimeHour, data.item.inTimeMin, data.item.outTimeHour, data.item.outTimeMin)  }}</v-list-item-subtitle>

                                                                </v-list-item-content>
                                                            </template>
                                                        </v-autocomplete>
                                                    </v-col> -->






                                                    <!-- <v-col cols="auto" sm="12" md="6">
                                                        <v-text-field name="devicePassword" label="Device Password*" v-model="user.devicePassword"
                                                            :rules="devicePasswordRules"
                                                            :error-messages="userError.devicePassword"
                                                            counter
                                                        ></v-text-field>
                                                    </v-col> -->





                                                    <v-col cols="auto" sm="12" md="6">
                                                        <v-autocomplete
                                                            label="Roles"
                                                            :items="roles"
                                                            item-text="roleName"
                                                            item-value="roleId"
                                                            dense
                                                            filled
                                                            id="roleIds"
                                                            name="roleIds"
                                                            v-model="user.roleIds"
                                                            multiple
                                                            chips
                                                        ></v-autocomplete>
                                                    </v-col>

                                                    <v-col cols="auto" sm="12" md="6">
                                                        <v-text-field name="nid" label="NID*" v-model="user.nid"
                                                            :rules="nidRules"
                                                            :error-messages="userError.nid"
                                                        ></v-text-field>
                                                    </v-col>


                                                    <v-col cols="auto" sm="12" md="6">
                                                        <v-text-field name="phone" label="Phone" v-model="user.phone"
                                                            :error-messages="userError.phone"
                                                            counter
                                                        ></v-text-field>
                                                    </v-col>

                                                    <v-col>
                                                        <v-btn raised @click="onPickFile('photoPathInput')">Upload Image</v-btn>
                                                        <v-tooltip bottom>
                                                            <template v-slot:activator="{ on }">
                                                                    <v-btn text v-on="on" @click="cancelSingleImage($event, 'user','photoPath')" >
                                                                        <v-icon    color="pink">cancel</v-icon>
                                                                    </v-btn>
                                                            </template>
                                                            <span>Close image</span>
                                                        </v-tooltip>
                                                        <input type="file" ref="photoPathInput"
                                                            accept="image/*"
                                                            @change="onFilePickedFromObj($event, 'user','photoPath')" class="d-none">
                                                        <v-img v-if="user.photoPath" :src="user.photoPath" max-height="190" min-height="190"  aspect-ratio contain class="mt-5" ></v-img>
                                                    </v-col>

                                                    <v-col cols="auto" sm="12" md="6">
                                                        <v-textarea name="address" label="Address"
                                                        v-model="user.address"
                                                        auto-grow  outlined  rows="2"
                                                        counter
                                                        clearable
                                                        :error-messages="userError.address"
                                                        :rules="addressRules"

                                                        ></v-textarea>
                                                    </v-col>

                                                    <v-col cols="auto" sm="12" md="6">
                                                        <v-textarea name="addressBN" label="Address BN"
                                                        v-model="user.addressBN"
                                                        auto-grow  outlined  rows="2"
                                                        counter
                                                        clearable
                                                        :error-messages="userError.addressBN"
                                                        :rules="addressBNRules"

                                                        ></v-textarea>
                                                    </v-col>

                                                    <v-col cols="auto" sm="12" md="6">
                                                        <v-autocomplete
                                                            label="Department"
                                                            :items="departments"
                                                            item-text="department"
                                                            item-value="departmentId"
                                                            dense
                                                            filled
                                                            v-model="user.departmentId"
                                                            chips
                                                            clearable
                                                        ></v-autocomplete>
                                                    </v-col>

                                                    <v-col cols="auto" sm="12" md="6">
                                                        <v-autocomplete
                                                            label="Designation"
                                                            :items="designations"
                                                            item-text="designation"
                                                            item-value="designationId"
                                                            dense
                                                            filled
                                                            id="designationId"
                                                            name="designationId"
                                                            v-model="user.designationId"
                                                            chips
                                                            clearable
                                                        ></v-autocomplete>
                                                    </v-col>

                                                    <v-col cols="auto" sm="12" md="6">
                                                        <v-autocomplete
                                                            label="Card Type"
                                                            :items="cardtypes"
                                                            item-text="cardtype"
                                                            item-value="cardtypeId"
                                                            dense
                                                            filled
                                                            v-model="user.cardtypeId"
                                                            chips
                                                            clearable
                                                        ></v-autocomplete>
                                                    </v-col>

                                                    <!-- <v-col cols="auto" sm="12" md="6">
                                                        <v-autocomplete
                                                            label="Employment Types"
                                                            :items="employmenttypes"
                                                            item-text="employmentType"
                                                            item-value="employmentTypeId"
                                                            dense
                                                            filled
                                                            id="employmentTypeId"
                                                            name="employmentTypeId"
                                                            v-model="user.employmentTypeId"
                                                            chips
                                                            clearable
                                                        ></v-autocomplete>
                                                    </v-col>

                                                    <v-col cols="auto" sm="12" md="6">
                                                        <v-autocomplete
                                                            label="Gender"
                                                            :items="genders"
                                                            item-text="gender"
                                                            item-value="genderId"
                                                            dense
                                                            filled
                                                            id="genderId"
                                                            name="genderId"
                                                            v-model="user.genderId"
                                                            chips
                                                            clearable
                                                        ></v-autocomplete>
                                                    </v-col>

                                                    <v-col cols="auto" sm="12" md="6">
                                                        <v-menu
                                                            v-model="dobMenu"
                                                            transition="scale-transition"
                                                            offset-y
                                                            max-width="290px"
                                                            min-width="290px"
                                                            :close-on-content-click="false"
                                                        >
                                                            <template v-slot:activator="{ on }">
                                                                <v-text-field
                                                                    label="Date Of Birth"
                                                                    append-icon="event"
                                                                    v-model="formattedDob"
                                                                    v-on="on"
                                                                ></v-text-field>
                                                            </template>

                                                            <v-date-picker
                                                            v-model="user.dob"
                                                            no-title
                                                            dense
                                                            >
                                                                <v-spacer></v-spacer>
                                                                <v-btn @click="dobMenu=false" icon>Ok</v-btn>
                                                            </v-date-picker>
                                                        </v-menu>

                                                    </v-col> -->

                                                    <!-- <v-col cols="auto" sm="12" md="6">
                                                        <v-menu
                                                            v-model="joiningDateMenu"
                                                            transition="scale-transition"
                                                            offset-y
                                                            max-width="290px"
                                                            min-width="290px"
                                                            :close-on-content-click="false"
                                                        >
                                                            <template v-slot:activator="{ on }">
                                                                <v-text-field
                                                                    label="Joining Date"
                                                                    append-icon="event"
                                                                    v-model="formattedJoiningDate"
                                                                    v-on="on"
                                                                ></v-text-field>
                                                            </template>

                                                            <v-date-picker
                                                            v-model="user.joiningDate"
                                                            no-title
                                                            dense
                                                            >
                                                                <v-spacer></v-spacer>
                                                                <v-btn @click="joiningDateMenu=false" icon>Ok</v-btn>
                                                            </v-date-picker>
                                                        </v-menu>

                                                    </v-col> -->


                                                    <v-col cols="auto" sm="12" md="6">
                                                        <v-menu
                                                            v-model="issueDateMenu"
                                                            transition="scale-transition"
                                                            offset-y
                                                            max-width="290px"
                                                            min-width="290px"
                                                            :close-on-content-click="false"
                                                        >
                                                            <template v-slot:activator="{ on }">
                                                                <v-text-field
                                                                    label="Issue Date"
                                                                    append-icon="event"
                                                                    v-model="formattedIssueDate"
                                                                    v-on="on"
                                                                ></v-text-field>
                                                            </template>
                                                            <v-date-picker
                                                            v-model="user.issueDate"
                                                            no-title
                                                            dense
                                                            >
                                                                <v-spacer></v-spacer>
                                                                <v-btn @click="issueDateMenu=false" icon>Ok</v-btn>
                                                            </v-date-picker>
                                                        </v-menu>
                                                    </v-col>


                                                    <v-col cols="auto" sm="12" md="6">
                                                        <v-menu
                                                            v-model="validDateStartMenu"
                                                            transition="scale-transition"
                                                            offset-y
                                                            max-width="290px"
                                                            min-width="290px"
                                                            :close-on-content-click="false"
                                                        >
                                                            <template v-slot:activator="{ on }">
                                                                <v-text-field
                                                                    label="Validity Start Date"
                                                                    append-icon="event"
                                                                    v-model="formattedValidDateStart"
                                                                    v-on="on"
                                                                ></v-text-field>
                                                            </template>
                                                            <v-date-picker
                                                            v-model="user.validDateStart"
                                                            no-title
                                                            dense
                                                            >
                                                                <v-spacer></v-spacer>
                                                                <v-btn @click="validDateStartMenu=false" icon>Ok</v-btn>
                                                            </v-date-picker>
                                                        </v-menu>
                                                    </v-col>

                                                    <v-col cols="auto" sm="12" md="6">
                                                        <v-menu
                                                            v-model="validDateEndMenu"
                                                            transition="scale-transition"
                                                            offset-y
                                                            max-width="290px"
                                                            min-width="290px"
                                                            :close-on-content-click="false"
                                                        >
                                                            <template v-slot:activator="{ on }">
                                                                <v-text-field
                                                                    label="Validity End Date"
                                                                    append-icon="event"
                                                                    v-model="formattedValidDateEnd"
                                                                    v-on="on"
                                                                ></v-text-field>
                                                            </template>
                                                            <v-date-picker
                                                            v-model="user.validDateEnd"
                                                            no-title
                                                            dense
                                                            >
                                                                <v-spacer></v-spacer>
                                                                <v-btn @click="validDateEndMenu=false" icon>Ok</v-btn>
                                                            </v-date-picker>
                                                        </v-menu>
                                                    </v-col>


                                                </v-row>
                                            </v-container>
                                        </v-card-text>

                                        <v-card-actions class="pb-5">
                                            <v-spacer></v-spacer>
                                            <v-btn color="blue darken-1" text @click="close()">Cancel</v-btn>
                                            <v-btn color="success" type="submit">Save</v-btn>
                                            <v-spacer></v-spacer>
                                        </v-card-actions>
                                    </v-form>
                                </v-card>
                            </v-dialog>


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
                                        <th class="text-left">Files</th>
                                        <th class="text-left">Device Info</th>
                                        <th class="text-left">Roles</th>
                                        <th class="text-left">Actions</th>
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
                                                    {key: '<strong>Id</strong>', value: item.id+' ('+(item.membershipNumber||'')+')'  },
                                                    {key: '<strong>Name</strong>', value: item.name+' ('+(item.nameBN||'')+')' },
                                                    {key: '<strong>Phone</strong>', value: item.phone },
                                                    {key: '<strong>Department</strong>', value: item.department },
                                                    {key: '<strong>Designation</strong>', value: item.designation },
                                                    {key: '<strong>NID</strong>', value: item.nid },

                                                    {key: '<strong>Card No</strong>', value: parseInt(item.cardNo)>0 ? item.cardNo : '- - - - - - - - - -' },
                                                    {key: '<strong>ID Card Type</strong>', value: '<strong>'+(item.cardtype||'')},

                                                    {key: '<strong>Issue Date</strong>', value: (formatDate(item.issueDate) || '') },
                                                    {key: '<strong>Valid Date Range</strong>', value:  getDateRange(item.validDateStart, item.validDateEnd)+` ${dateIsBetweenTwoDates(getTodayDateYmd(), item.validDateStart, item.validDateEnd) ? '' : '<b style=color:red;>( Expired )</b>' }`  },
                                                    {key: '<strong>Address</strong>', value:  (item.address||'')+' ('+(item.addressBN||'')+')' },
                                                ]"
                                            ></lists>
                                        </td>

                                        <td>
                                            <v-img
                                                :src="item.photoPath || '/uploads/no_image.png'"
                                                lazy-src="/uploads/loader.gif"
                                                max-height="70"
                                                max-width="70"
                                                aspect-ratio contain
                                                @click="imageZoom(item.photoPath)"
                                                class="image-hover-cursor-change"
                                            ></v-img>

                                            <userfilesmanagement :user="item" class="mt-2"></userfilesmanagement>

                                        </td>
                                        <td>
                                            <lists
                                                :lists="getSingleUserDevices(item.id)"
                                            ></lists>



                                            <lists
                                                :lists="getDeviceInfoListAsKeyValue(item.deviceId)"
                                                class="mb-2"
                                            ></lists>

                                            <isuserenabled :userStatusInDevice="item.userStatusInDevice" :user="item" @getUsers="getUsers()"></isuserenabled>

                                        </td>
                                        <td>
                                            <lists
                                                :lists="[
                                                    {key: '<strong>Device Role</strong>', value: item.deviceRole },
                                                ]"
                                            ></lists>

                                            <v-divider></v-divider>


                                            <h6 class="font-weight-bold">Software Roles</h6>

                                            <v-chip v-if="(getUserWithRoles(item.id) || [])==0">No roles assigned yet!</v-chip>

                                            <v-chip-group
                                                active-class="deep-purple accent-4 white--text"
                                                column
                                                v-else
                                            >
                                                <v-chip
                                                    v-for="(users_with_roles_item, index) in getUserWithRoles(item.id)"  :key="index"

                                                >
                                                    {{users_with_roles_item.roleName}}
                                                </v-chip>
                                            </v-chip-group>

                                        </td>

                                        <td>
                                            <v-tooltip top>
                                                <template v-slot:activator="{ on }">
                                                    <v-icon @click="editDialog(item.id)"  v-on="on">edit</v-icon>
                                                </template>
                                                <span>Edit Record ?</span>
                                            </v-tooltip>

                                            <!-- <v-tooltip top>
                                                <template v-slot:activator="{ on }">
                                                    <v-icon color="primary"  v-on="on" @click="cardDownload(item.id)">badge</v-icon>
                                                </template>
                                                <span>RFID Card Download?</span>
                                            </v-tooltip> -->

                                            <v-btn
                                                class="mx-0 mr-2"
                                                icon
                                                :href="'/api/RFIDCardDownload?userId='+item.id+'&lang=bn&token='+token"
                                                target="_blank"
                                                color="pink"
                                            >
                                                <v-tooltip bottom>
                                                    <template v-slot:activator="{ on }">
                                                        <v-icon v-on="on">badge</v-icon>
                                                    </template>
                                                    <span>RFID Card Download?</span>
                                                </v-tooltip>
                                            </v-btn>

                                            <!-- <v-tooltip top>
                                                <template v-slot:activator="{ on }">
                                                        <v-icon @click="deleteConfirm(item.id)" v-on="on">delete</v-icon>
                                                </template>
                                                <span>Delete Record ?</span>
                                            </v-tooltip> -->
                                        </td>
                                    </tr>
                                </tbody>
                            </template>

                           <!--  <template v-slot:[`item.roles`]="{ item }">
                                <v-list dense>
                                    <v-list-item-title class="pl-1"
                                        v-for="(users_with_roles_item, index) in getUserWithRoles(item.id)"  :key="index">
                                        {{users_with_roles_item.roleName}}
                                    </v-list-item-title>
                                </v-list>
                            </template>





                            <template v-slot:[`item.user`]="{ item }">
                                <v-img
                                    :src="item.photoPath || '/uploads/no_image.png'"
                                    lazy-src="/uploads/loader.gif"
                                    max-height="70"
                                    max-width="70"
                                    aspect-ratio contain
                                    @click="imageZoom(item.photoPath)"
                                    class="image-hover-cursor-change"
                                ></v-img>

                                        {key: '<strong>Email</strong>', value: item.email },
                                        {key: '<strong>NID</strong>', value: item.nid },
                                        {key: '<strong>Phone</strong>', value: item.phone },
                                        {key: '<strong>Gender</strong>', value: item.gender },
                                        {key: '<strong>Employment Type</strong>', value: item.employmentType },
                                        {key: '<strong>Date Of Birth</strong>', value: formatDate(item.dob) },
                                        {key: '<strong>Joining Date</strong>', value: formatDate(item.joiningDate) },
                                        {key: '<strong>Registry Date</strong>', value: datetimeprocessing(item.created_at) },
                                        {key: '<strong>Shifting</strong>', value: item.shifting },
                                        {key: '<strong>Address</strong>', value: item.address },
                                <lists
                                    :lists="[
                                        {key: '<strong>Name</strong>', value: item.deviceUserName },
                                        {key: '<strong>Department</strong>', value: item.department },
                                        {key: '<strong>Designation</strong>', value: item.designation },
                                        {key: '<strong>Card No</strong>', value: parseInt(item.cardNo)>0 ? item.cardNo : '- - - - - - - - - -' },

                                        {key: '<strong>Issue Date</strong>', value: (formatDate(item.issueDate) || '') },
                                        {key: '<strong>Valid Date Range</strong>', value:  getDateRange(item.validDateStart, item.validDateEnd) },
                                    ]"
                                ></lists>
                            </template>


                            <template v-slot:[`item.deviceinfo`]="{ item }">

                                <lists
                                    :lists="getSingleUserDevices(item.id)"
                                ></lists>

                                <lists
                                    :lists="[
                                        {key: '<strong>Device Role</strong>', value: item.deviceRole },
                                    ]"
                                ></lists>

                                <lists
                                    :lists="getDeviceInfoListAsKeyValue(item.deviceId)"
                                ></lists>





                            </template>

                            <template v-slot:[`item.userStatusInDevice`]="{ item }">
                                <isuserenabled :userStatusInDevice="item.userStatusInDevice" :user="item" @getUsers="getUsers()"></isuserenabled>
                            </template>



                            <template v-slot:[`item.action`]="{ item }">

                                <v-tooltip top>
                                    <template v-slot:activator="{ on }">
                                        <v-icon @click="editDialog(item.id)"  v-on="on">edit</v-icon>
                                    </template>
                                    <span>Edit Record ?</span>
                                </v-tooltip>

                                <v-tooltip top>
                                    <template v-slot:activator="{ on }">
                                            <v-icon @click="deleteConfirm(item.id)" v-on="on">delete</v-icon>
                                    </template>
                                    <span>Delete Record ?</span>
                                </v-tooltip>

                            </template> -->


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


</template>


<script>
    import modal_alert from './../../../frontend/components/modals/alert.vue'
    import modal_alert_mixin from './../../../frontend/components/modals/alertMixins.vue'
    import isuserenabled from './isuserenabled.vue'
    import userfilesmanagement from './userfilesmanagement.vue'

    // zoom
    import zoom_modal from './../../../frontend/components/zoom/zoom.vue'
    import zoom_mixin from './../../../frontend/components/zoom/zoomMixins.vue'

    // pic
    import picture_mixin from './../../../mixins/picture.vue'


    import lists from '../lists.vue'
    import Paginate from '../../../components/Paginate.vue'


    export default {
        components:{
            modal_alert, zoom_modal, lists, isuserenabled, Paginate, userfilesmanagement
        },
        mounted() {
            this.getRoles();
            this.getUsers();
            this.getUsersWithRoles();
            this.getDepartments();
            this.getDesignations();
            this.getEmploymentTypes();
            this.getGenders();
            this.getDeviceRoles();
            this.getDevices();
            this.getShiftings();
            this.getUserDevices();
            this.getCardtypes();
        },
        mixins: [modal_alert_mixin, zoom_mixin, picture_mixin],
        data() {
            return {
                token: localStorage.getItem('token'),
                searchInput: '',

                users: [],
                paginator: {},
                users_with_roles:[],
                roles: [],
                departments:[],
                cardtypes:[],
                designations:[],
                employmenttypes:[],
                genders:[],
                deviceroles:[],
                devices: [],
                showPassword:false,
                shiftings: [],
                userdevices: [],


                formTitle: 'User',
                user: {
                    id: '',
                    email: '',
                    password: '',
                    nid: '',
                    phone:'',
                    photoPath: '',
                    address: '',
                    addressBN:'',
                    dob: '',
                    joiningDate: '',
                    departmentId:'',
                    designationId:'',
                    employmentTypeId: '',
                    genderId:'',
                    deviceId:'',
                    deviceUserName: '',
                    devicePassword:'',
                    deviceRoleId:'',
                    shiftingId: '',
                    cardNo: '',
                    id: '',
                    issueDate: '',
                    validDateStart: '',
                    validDateEnd: '',
                    roleIds:[],
                    userDeviceIds:[],
                    cardtypeId: '',
                    membershipNumber: ''
                },
                userError: {
                    id: '',
                    email: '',
                    password: '',
                    nid: '',
                    phone:'',
                    photoPath: '',
                    address: '',
                    addressBN:'',
                    dob: '',
                    joiningDate: '',
                    departmentId:'',
                    designationId:'',
                    employmentTypeId: '',
                    genderId:'',
                    deviceId:'',
                    deviceUserName: '',
                    devicePassword:'',
                    deviceRoleId:'',
                    shiftingId: '',
                    cardNo: '',
                    id: '',
                    issueDate: '',
                    validDateStart: '',
                    validDateEnd: '',
                    roleIds:[],
                    userDeviceIds:[],
                    cardtypeId: '',
                    membershipNumber: ''
                },

                idRules: [
                    v => !!v || 'Id is required',
                ],
                nameRules: [
                    v => !!v || 'Name is required',
                ],
                nameBNRules: [
                    v => !!v || 'Name BN is required',
                ],

                emailRules: [
                    v => !!v || 'Email is required',
                    v => /.+@.+\..+/.test(v) || 'E-mail must be valid',
                ],
                passwordRules: [
                    v => !!v || 'Password is required',
                    v => v.length >= 6 || "Password must be at least 6 characters long",
                ],

                deviceUserNameRules: [
                    v => !!v || 'Device username is required',
                    v => v.length <= 20 || "Device username must be at most 20 characters long",
                ],

                devicePasswordRules: [
                    v => !!v || 'Device password is required',
                    v => v.length >= 4 || "Password must be at least 4 characters long",
                    v => v.length <= 8 || "Password must be at most 8 characters long",
                ],

                deviceRoleIdRules: [
                    v => !!v || 'Device role is required',
                ],


                shiftingIdRules: [
                    v => !!v || 'Shifting is required',
                ],
                nidRules: [
                    v => !!v || 'NID is required',
                ],
                membershipNumberRules: [
                    v => !!v || 'Membership Number is required',
                ],
                addressRules: [
                    v => !!v || 'Address is required',
                ],
                addressBNRules: [
                    v => !!v || 'Address BN is required',
                ],



                dobMenu:false,
                joiningDateMenu: false,

                issueDateMenu: false,
                validDateStartMenu: false,
                validDateEndMenu: false,

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

            getShiftings(){
                var _this = this;
                axios.get('/api/getShiftings'+'?token='+this.token)
                .then(function (response) {
                    _this.shiftings = response.data.data;
                })
                .catch(function (error) {
                })
            },

            getUsers(page=1){
                var _this = this;
                axios.post('/api/getUsersView_p'+'?token='+ _this.token, {'page' : page,'search' : this.searchInput})
                .then(function (response) {
                    _this.users = response.data.data.data;
                    _this.paginator = response.data.data.paginator;
                })
                .catch(function (error) {
                })
            },
            pagechanged(page){
                this.getUsers(page)
            },

            search(){
                setTimeout(() => {
                    console.log('======================search called===============================');
                    this.getUsers()
                }, 1000);
            },

            getUserDevices(){
                var _this = this;
                axios.get('/api/getUserDevices'+'?token='+ _this.token)
                .then(function (response) {
                    _this.userdevices = response.data.data;
                })
                .catch(function (error) {
                })
            },

            getSingleUserDevices(userId)
            {
                var arr = []
                arr = this.userdevices.filter((userdevice) => {
                    return
                })
                var i = 0

                this.userdevices.forEach(userdevice => {
                    if (userdevice.userId==userId)
                    {
                        i++
                        if (i==1)
                        {
                            arr.push({ key: ' ', value: '<b>Assigned Devices</b>'})
                        }
                        arr.push({ key: i+'.', value: userdevice.device})
                    }

                });
                if (i==0) {
                        arr.push({ key: ' ', value: '<b style="color: red;">No device assigned yet!</b>'})
                }


                return arr;
            },

            getDepartments(){
                var _this = this;
                axios.get('/api/getDepartments'+'?token='+ _this.token)
                .then(function (response) {
                    _this.departments = response.data.data;
                })
                .catch(function (error) {
                })
            },

            getCardtypes(){
                var _this = this;
                axios.get('/api/getCardtypes'+'?token='+ _this.token)
                .then(function (response) {
                    _this.cardtypes = response.data.data;
                })
                .catch(function (error) {
                })
            },

            getDesignations(){
                var _this = this;
                axios.get('/api/getDesignations'+'?token='+ _this.token)
                .then(function (response) {
                    _this.designations = response.data.data;
                })
                .catch(function (error) {
                })
            },

            getEmploymentTypes(){
                var _this = this;
                axios.get('/api/getEmploymentTypes'+'?token='+ _this.token)
                .then(function (response) {
                    _this.employmenttypes = response.data.data;
                })
                .catch(function (error) {
                })
            },

            getGenders(){
                var _this = this;
                axios.get('/api/getGenders'+'?token='+ _this.token)
                .then(function (response) {
                    _this.genders = response.data.data;
                })
                .catch(function (error) {
                })
            },

            getDeviceRoles(){
                var _this = this;
                axios.get('/api/getDeviceRoles'+'?token='+ _this.token)
                .then(function (response) {
                    _this.deviceroles = response.data.data;
                })
                .catch(function (error) {
                })
            },

            getDevices(){
                var _this = this;
                axios.get('/api/getDevices'+'?token='+ _this.token)
                .then(function (response) {
                    _this.devices = response.data.data;
                })
                .catch(function (error) {
                })
            },


            clearForm(){
                this.user= { email: '',  password: '', name: '', nameBN:'', deviceUserName: '', devicePassword: '', cardNo:'', deviceId: '', nid:'', cardtypeId:'', membershipNumber: '', address:'', addressBN:''}
                this.userError= { email: '',  password: '', name: '', nameBN:'', deviceUserName: '', devicePassword: '', cardNo:'', deviceId: '', nid:'', cardtypeId:'', membershipNumber: '', address:'', addressBN:''}
            },

            adding(){
                var _this=this
                axios.post('/api/addUser/'+'?token='+_this.token, _this.user)
                .then(function (response) {
                    _this.getUsers()
                    _this.s_alert = true;
                    _this.dialog_crud = false
                    _this.clearForm()
                    _this.addingConfirmed=''

                    _this.getUsersWithRoles()
                    _this.getUserDevices()
                })
                .catch(function (error) {
                    _this.e_alert = true;
                    _this.userError =  {
                        id: error.response.data.id,
                        // email: error.response.data.email,
                        // password: error.response.data.password,
                        // devicePassword: error.response.data.devicePassword,
                        deviceId: error.response.data.deviceId,
                        name: error.response.data.name,
                        nameBN: error.response.data.nameBN,
                        membershipNumber: error.response.data.membershipNumber,
                        deviceUserName: error.response.data.deviceUserName,
                        deviceRoleId: error.response.data.deviceRoleId,
                        cardNo: error.response.data.cardNo,
                        nid: error.response.data.nid,
                     };
                })
            },

            deleting(){
                console.log(this.deletingId)
                var _this = this;
                axios.post('/api/deleteUser/'+_this.deletingId+'?token='+_this.token)
                .then(function (response) {
                    _this.getUsers()

                    _this.s_alert = true;
                    _this.getUsersWithRoles()
                    _this.getUserDevices()
                })
                .catch(function (error) {
                    _this.e_alert = true;
                })
                this.deletingId=''
            },

            setEditDialogFields(id){
                var _this = this;
                axios.get('/api/getUser/'+id+'?token='+_this.token)
                .then(function (response) {
                    _this.user = response.data.data;
                    // _this.user.password = ''

                    delete _this.user.password;
                    delete _this.user.devicePassword;
                    _this.user.roleIds = _this.getUserRoles(id)
                    _this.user.userDeviceIds = _this.getUserDeviceIds(id)
                })
                .catch(function (error) {
                })

            },

            editing(){
                var _this = this;
                axios.post('/api/editUser?token='+_this.token, _this.user)
               .then(function (response) {
                    _this.s_alert = true;
                    _this.dialog_crud = false
                    _this.getUsers()
                    _this.clearForm()
                    _this.editingId=''

                    _this.getUsersWithRoles()
                    _this.getUserDevices()
                })
                .catch(function (error) {
                    _this.e_alert = true;
                    _this.userError = {
                        id: error.response.data.id,
                        // email: error.response.data.email,
                        // password: error.response.data.password,
                        // devicePassword: error.response.data.devicePassword,
                        deviceId: error.response.data.deviceId,
                        name: error.response.data.name,
                        nameBN: error.response.data.nameBN,
                        membershipNumber: error.response.data.membershipNumber,
                        deviceUserName: error.response.data.deviceUserName,
                        deviceRoleId: error.response.data.deviceRoleId,
                        cardNo: error.response.data.cardNo,
                        nid: error.response.data.nid,
                    };
                })
            },

            getUsersWithRoles(){
                var _this = this;
                axios.get('/api/getUsersWithRoles'+'?token='+ _this.token)
                .then(function (response) {
                    _this.users_with_roles = response.data.data;
                })
                .catch(function (error) {
                })
            },

            getUserWithRoles(userId){
                return this.users_with_roles.filter(function(role){
                    return role.userId == userId
                });
            },
            getUserRoles(userId){
                return this.users_with_roles.filter(function(role){
                    return role.userId == userId
                })
                .map(function(role) {
                    return role.roleId;
                });
            },

            getUserDeviceIds(userId)
            {
                return this.userdevices.filter(function(userdevice){
                    return userdevice.userId == userId
                })
                .map(function(userdevice) {
                    return userdevice.deviceId;
                });
            },

            getDeviceInfoListAsKeyValue(deviceId){


                var deviceData = this.devices.filter((device) => {
                    return device.deviceId == deviceId
                })[0];

                if (deviceData) {
                    // console.log(deviceData)
                    return [
                            {key: '<b>Device Name</b>', value: deviceData.deviceName },
                            {key: '<b>Device IP:Port</b>', value: deviceData.deviceIP+':'+deviceData.port },
                            // {key: '<b>Device Port</b>', value: deviceData.port },

                            // {key: '<b>Device Firmware Version</b>', value: deviceData.fmVersion },
                            // {key: '<b>Device Platform</b>', value: deviceData.platform },
                            // {key: '<b>Serial Number</b>', value: deviceData.serialNumber },


                            {key: '<b>Last Sync Time</b>', value: this.datetimeprocessing(deviceData.lastSyncTime) },
                            {key: '<b>Last Checked Device Time</b>', value: this.datetimeprocessing(deviceData.lastDeviceTime) },
                        ]

                } else {
                    return []
                }


            },






        },
        computed: {

            formattedDob: {
                get(){
                    return this.formatDate(this.user.dob);
                },
                set(val){
                    this.user.dob = this.formatDate(val);
                }
            },

            formattedJoiningDate: {
                get(){
                    return this.formatDate(this.user.joiningDate);
                },
                set(val){
                    this.user.joiningDate = this.formatDate(val);
                }
            },

            formattedIssueDate: {
                get(){
                    return this.formatDate(this.user.issueDate);
                },
                set(val){
                    this.user.issueDate = this.formatDate(val);
                }
            },

            formattedValidDateStart: {
                get(){
                    return this.formatDate(this.user.validDateStart);
                },
                set(val){
                    this.user.validDateStart = this.formatDate(val);
                }
            },

            formattedValidDateEnd: {
                get(){
                    return this.formatDate(this.user.validDateEnd);
                },
                set(val){
                    this.user.validDateEnd = this.formatDate(val);
                }
            },



        },

    }
</script>

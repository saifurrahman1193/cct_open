<template>

    <v-list min-width="220">

        <v-list-item   dense >
            <v-list-item-title  class="pl-1">{{ userInfo.name }}</v-list-item-title>
            <v-spacer></v-spacer>
            <!-- <v-icon>{{ item.icon }}</v-icon> -->
        </v-list-item>

        <v-list-item
        v-for="(item, index) in profileMenu"
        :key="index"
        @click="gotorouterview(item.link)"
        dense
        >
            <v-list-item-title  class="pl-1">{{ item.title }}</v-list-item-title>
            <v-spacer></v-spacer>
            <v-icon>{{ item.icon }}</v-icon>
        </v-list-item>


        <v-divider v-if="isLoggedIn"></v-divider>
        <v-list-item
            @click="logout()"
            dense
            v-if="isLoggedIn"
        >
            <v-list-item-title class="pl-1">Sign Out</v-list-item-title>
            <v-spacer></v-spacer>
            <v-icon>power_settings_new</v-icon>
        </v-list-item>
    </v-list>
</template>

<script>
import { mapState, mapGetters } from 'vuex'
export default {
    data() {
        return {
            token:localStorage.getItem('token'),
            profileMenu: [
                { title: 'Profile', link:'/profile', icon:'person'},
                { title: 'Change Password', link:'/changepassword', icon:'lock'},
                { title: 'Order History', link:'/orderhistory', icon:'list_alt'},
            ],
        }
    },
    methods: {
        logout(){
            var _this = this;
            axios.post('/api/auth/logout?token='+this.token)
            .then(function (response) {
                // window.location.href = '/login';
                _this.$store.dispatch('checkIsLoggedIn')

                this.$router.push('/login');
                // _this.gotorouterview('/login');
                localStorage.removeItem('token')
            })
            .catch(function (error) {
                // window.location.href = '/login';
                // this.$router.push('/login');
                _this.gotorouterview('/login');
                localStorage.removeItem('token')
            })
        },
    },
    computed: {
        ...mapState([
            'isLoggedIn', 'userInfo'
        ]),
        ...mapGetters([

        ]),
    }
}
</script>

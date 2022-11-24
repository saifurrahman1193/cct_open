<template>
    <v-app >
        <v-app-bar
        app
        clipped-left
        dense
        elevation="5"
        >
            <v-app-bar-nav-icon @click.stop="drawer = !drawer" ></<v-app-bar-nav-icon>
            <v-spacer></v-spacer>
            <v-btn  text @click="logout()">
                Logout
            </v-btn>
        </v-app-bar>

        <v-navigation-drawer
            v-model="drawer"
            app
            clipped
            >


            <v-list dense   >
                <v-list-item-group >
                    <v-list-item v-for="item in items" :key="item.text" @click="gotorouterview(item.link)" >
                            <v-list-item-icon>
                                <v-icon>{{ item.icon }}</v-icon>
                            </v-list-item-icon>

                            <v-list-item-content>
                                <v-list-item-title >{{ item.text }}</v-list-item-title>
                            </v-list-item-content>
                    </v-list-item>
                </v-list-item-group>
            </v-list>


        </v-navigation-drawer>


    </v-app>


</template>


<script>
    const queryString = window.location.search;
    console.log(queryString);
    const urlParams = new URLSearchParams(queryString);
    const token = urlParams.get('token')

export default {
    data() {
        return {
            drawer: null,
            items: [
                { icon: 'dashboard', text: 'Home', link:'/home/home' },
                { icon: 'menu_book', text: 'Notes', link:'/home/notes'},
            ]
        }
    },
    methods: {
        gotorouterview(link){
            console.log(link);
            this.$router.push(link);
        },
        logout(){
            console.log('logout');
            // this.$router.push('/logout/api/auth/logout?token='+token);
            axios.post('/api/auth/logout?token='+localStorage.getItem('token'))
            .then(function (response) {
                window.location.href = '/login';
            })
            .catch(function (error) {
                window.location.href = '/login';
            })
        },

    },
}
</script>


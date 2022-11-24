<template>
    <v-app >

        <subheading></subheading>

        <v-sheet
                class=" ma-2"
                elevation="0"
                 color="grey lighten-5"

            >
            <v-content>
                <template>
                    <v-card>
                        <v-container fluid>
                            <v-row>
                                <v-col  cols="auto" >
                                    <v-card elevation="2" class="text-center mx-auto py-0" width="250">
                                        <v-card-subtitle class="">
                                            Total <strong >Users</strong>
                                            <p class="pt-1 h3 blue--text">{{ dashboarddata.totalUsers}}</p>
                                        </v-card-subtitle>
                                    </v-card>
                                </v-col>

                                <v-col  cols="auto" >
                                    <v-card elevation="2" class="text-center mx-auto py-0" width="250">
                                        <v-card-subtitle class="">
                                            Total <strong >Devices</strong>
                                            <p class="pt-1 h3 blue--text">{{ dashboarddata.totalDevices}}</p>
                                        </v-card-subtitle>
                                    </v-card>
                                </v-col>

                                <v-col  cols="auto" >
                                    <v-card elevation="2" class="text-center mx-auto py-0" width="250">
                                        <v-card-subtitle class="">
                                            Total <strong >Blocked</strong>
                                            <p class="pt-1 h3 blue--text">{{ dashboarddata.totalBlocked}}</p>
                                        </v-card-subtitle>
                                    </v-card>
                                </v-col>

                                <!-- <v-col  cols="auto" >
                                    <v-card elevation="2" class="text-center mx-auto py-0" width="250">
                                        <v-card-subtitle class="">
                                            Today <strong >Presents</strong>
                                            <p class="pt-1 h3 blue--text">95%</p>
                                        </v-card-subtitle>
                                    </v-card>
                                </v-col>
                                <v-col  cols="auto" >
                                    <v-card elevation="2" class="text-center mx-auto py-0" width="250">
                                        <v-card-subtitle class="">
                                            Today <strong >Absent</strong>
                                            <p class="pt-1 h3 blue--text">5%</p>
                                        </v-card-subtitle>
                                    </v-card>
                                </v-col>

                                <v-col  cols="auto" >
                                    <v-card elevation="2" class="text-center mx-auto py-0" width="250">
                                        <v-card-subtitle class="">
                                            Today <strong >Late</strong>
                                            <p class="pt-1 h3 blue--text">7%</p>
                                        </v-card-subtitle>
                                    </v-card>
                                </v-col>

                                <v-col  cols="auto" >
                                    <v-card elevation="2" class="text-center mx-auto py-0" width="250">
                                        <v-card-subtitle class="">
                                            LWD <strong >Early Exit</strong>
                                            <p class="pt-1 h3 blue--text">2%</p>
                                        </v-card-subtitle>
                                    </v-card>
                                </v-col> -->

                            </v-row>
                        </v-container>

                    </v-card>
                </template>
            </v-content>

        </v-sheet>

        <v-spacer></v-spacer>
        <footer_b></footer_b>


    </v-app>
</template>


<script>

    import subheading from './subheading.vue'
    import footer_b from './footer.vue'


    export default {
        components:{
            subheading, footer_b
        },
        mounted() {
            this.getDashboardData()
        },
        data() {
            return {
                token: localStorage.getItem('token'),
                dashboarddata: {}
            }
        },
        methods: {

            getDashboardData(){
                var _this = this;
                axios.get('/api/getDashboardData'+'?token='+ _this.token)
                .then(function (response) {
                    _this.dashboarddata = response.data.data;
                })
                .catch(function (error) {
                })
            },

        },

    }
</script>

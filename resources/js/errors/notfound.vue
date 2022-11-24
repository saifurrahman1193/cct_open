<template>
    <v-app>
        <!--  -->
        <v-container
            class="text-center"
            fill-height
            style="height: calc(100vh - 58px);"
        >
            <v-row align="center">
            <v-col>
                <h1 class=" orange--text" :class="isXS? 'display-1' : 'display-2'">Whoops, 404</h1>

                <p>The page you were looking for does not exist</p>

                <v-btn
                to="/"
                color="orange"
                outlined
                >
                Go Home!
                </v-btn>
            </v-col>
            </v-row>
        </v-container>
    </v-app>

</template>


<script>


    export default {
        components:{
        },
        mounted() {
            document.title = "404 Page Not Found"
        },
        created () {
            this.$ssrContext && this.$ssrContext.res.status(404)
        },
        data() {
            return {

            }
        },
        methods: {



        },
        computed: {

        }
    }
</script>

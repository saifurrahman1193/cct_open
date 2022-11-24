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
                        Frontend
                        <v-spacer></v-spacer>
                    </v-card-title>

                </v-card>
            </v-content>



        </v-sheet>




        <v-spacer></v-spacer>

    </v-app>
</template>


<script>
    import subheading from './subheading.vue'

    export default {
        components:{
            subheading,
        },
        mounted() {


        },
        mixins: [],
        data() {
            return {

            }
        },
        methods: {


        },
        computed: {

        },

    }
</script>


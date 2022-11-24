<template>
    <v-app  id="inspire">

        <subheading></subheading>


        <v-sheet
            class="mt-2"
            elevation="0"
            max-width="100%"
             color="grey lighten-5"
         >

            <chat_component :contacts="contacts"></chat_component>

        </v-sheet>

        <v-spacer></v-spacer>


    </v-app>
</template>


<script>
    import { mapState } from 'vuex'

    import subheading from './../subheading.vue'
    import chat_component from './chat_component.vue'

    export default {
        components:{
            subheading, chat_component
        },
        mounted() {
            this.getContacts();
        },
        data() {
            return {
                token: localStorage.getItem('token'),
                contacts:[],
            }
        },
        methods: {
            getContacts(){
                var _this = this;
                axios.get('/api/getContacts'+'?token='+ _this.token)
                .then(function (response) {
                    _this.contacts = response.data.data;
                })
                .catch(function (error) {
                })
            },
        },
        computed: {


        },

    }
</script>


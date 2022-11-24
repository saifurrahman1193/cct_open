<template>
    <v-app  id="inspire">

        <subheading></subheading>



        <v-spacer></v-spacer>
        <footer_b></footer_b>

    </v-app>
</template>


<script>
    import subheading from '../subheading.vue'
    import footer_b from '../footer.vue'
    export default {
        components:{
            subheading, footer_b
        },
        mounted() {
        },
        data() {
            return {
                token: localStorage.getItem('token'),
            }
        },
        methods: {



        },
        computed: {

        }
    }
</script>


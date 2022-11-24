<template>
    <v-app  id="inspire">

        <subheading></subheading>

        <users/>

        <roles/>

        <v-spacer></v-spacer>
        <footer_b></footer_b>

    </v-app>
</template>


<script>
    import subheading from './../subheading.vue'
    import users from './users.vue'
    import roles from './roles.vue'
    import footer_b from '../footer.vue'

    export default {
        components:{
            subheading, users, roles, footer_b
        },
    }
</script>

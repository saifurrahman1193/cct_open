<template>
    <v-app  id="inspire">

        <subheading></subheading>

        <dbbackups></dbbackups>

        <storagebackups></storagebackups>

        <v-spacer></v-spacer>
        <footer_b></footer_b>

    </v-app>
</template>


<script>
    import subheading from './../subheading.vue'
    import dbbackups from './dbbackups.vue'
    import storagebackups from './storagebackups.vue'
    import footer_b from '../footer.vue'

    export default {
        components:{
            subheading, dbbackups, storagebackups, footer_b
        },
    }
</script>

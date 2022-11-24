<template>
    <v-app>



    </v-app>
</template>


<script>

    export default {
        components:{
        },
        mixins: [],
        mounted() {
            this.$router.push('/admin')
        },
        metaInfo: {
            titleTemplate: '%s Home'
        }

    }
</script>

<template>
    <v-app>
        <subheading></subheading>
        <v-sheet
            class="mx-auto mt-12"
            elevation="0"
            color="grey lighten-5"
        >
            <changepassword_f></changepassword_f>
        </v-sheet>
        <v-spacer></v-spacer>
        <footer_b></footer_b>


    </v-app>
</template>


<script>

    import subheading from './subheading.vue'
    import changepassword_f from './../../frontend/components/changepassword.vue'
    import footer_b from './footer.vue'


    export default {
        components:{
            subheading,   changepassword_f, footer_b
        },
    }
</script>

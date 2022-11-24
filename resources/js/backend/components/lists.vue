<template>

    <v-simple-table   dense>

        <template v-slot:default >
            <tbody>
                <tr v-for="item in lists" :key="item.key">
                    <td v-html="item.key"></td>
                    <td v-html="item.value"></td>
                </tr>
            </tbody>
        </template>
    </v-simple-table>
</template>

<script>
export default {
    data() {
        return {

        }
    },
    props: [ "lists" ],
    created() {
    },
    methods: {




    },

}
</script>

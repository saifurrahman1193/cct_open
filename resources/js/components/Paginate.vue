<template>
    <v-footer padless  class="bg-white py-0 my-0">
        <v-row class="py-0 my-0">
            <v-col class="col-auto mr-auto my-auto">
                Showing {{paginator.current_page==1 ? 1 : (paginator.current_page-1)*paginator.record_per_page+1}}
                    to {{paginator.current_page==1 ? paginator.current_page_items_count : (paginator.current_page-1)*paginator.record_per_page+paginator.current_page_items_count}}
                    of {{paginator.total_count}} entries
            </v-col>
            <v-col class="col-auto">
                <v-pagination
                    v-if="paginator.total_pages>1"
                    v-model="current_page"
                    class="col-md-6"
                    :length="paginator.pagination_last_page"
                    total-visible="8"
                    circle
                    @input="onClickPage"
                ></v-pagination>
            </v-col>
        </v-row>
    </v-footer>
</template>


<script>
    export default {
        props: ['paginator'],
        components:{
        },
        mounted() {

        },
        data() {
            return {
                current_page:1
            }
        },
        methods: {
            onClickPage () {
                this.$emit('pagechanged', this.current_page||1)
            }
        },
        computed: {


        }
    }
</script>





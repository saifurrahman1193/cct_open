<script>
    export default {
        data() {
            return {
                seodefault:{
                    meta_title: 'Attendance',
                    meta_keywords: 'Attendance, attendance',
                    meta_description: 'This is an Attendance',
                    meta_author: 'Md. Saifur Rahman',
                },

            }
        },
        mounted() {
            this.getSeoDefault()
        },
        methods: {
            getSeoDefault(){
                var _this=this
                axios.get('/api/getSeoDefault')
                .then(function (response) {
                    _this.seodefault = response.data.data

                    document.title=_this.seodefault.meta_title
                })
                .catch(function (error) {
                })
            },

        },
        computed: {


        },

    }

</script>



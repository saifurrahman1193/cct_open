<script>
    export default {
        data() {
            return {
                zoomDialog: false,
                zoomPath: '',
            }
        },
        methods: {
            cancelZoom(){
                this.zoomDialog =  false
                this.zoomPath =  ''
            },
            imageZoom(path){
                this.zoomDialog =  true
                this.zoomPath =  path
                // console.log('zooming')
                // console.log(path)
            },


        },
    }
</script>

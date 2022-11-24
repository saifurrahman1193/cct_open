<template>
    <div>
        <span v-html="calculatedText"></span>
        <v-btn text class="text-capitalize" small v-if="readmore" @click="readMore()">Read More</v-btn>
        <v-btn text class="text-capitalize" small  v-if="readless" @click="readLess()">Read Less</v-btn>
    </div>
</template>


<script>
    export default {
        props: ["text"],
        components:{
        },
        mounted() {
            this.isReadmoreApplicableCheck()
        },
        data() {
            return {
                readmore:false,
                readless:false,
                calculatedText: "",
            }
        },
        methods: {
            readMore(){
                this.readless=true;
                this.readmore=false;
                this.calculatedText=this.text
            },
            readLess(){
                this.readless=false;
                this.readmore=true;
                this.calculatedText=this.text.substr(0,100)+"..."
            },
            isReadmoreApplicableCheck(){
                this.calculatedText=this.text
                if ((this.text || "").length>100) {
                    this.readLess()
                }
            }
        },
        computed: {


        }
    }
</script>


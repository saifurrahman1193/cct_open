<template>

    <div>
        <v-btn text @click="dialog_picture_upload=true">+ Add picture</v-btn>
        <v-spacer></v-spacer>
        <v-dialog v-model="dialog_picture_upload" max-width="600px"  @keydown.esc="close()"   persistent>
            <v-card>
                <v-card-title>
                    <v-spacer></v-spacer>
                    <span class="headline"> Add a new picture</span>
                    <v-spacer></v-spacer>
                </v-card-title>
                <v-form  @submit.prevent="$emit('pictureUploadPost', filePath, id); close();" >
                    <v-card-text>
                        <v-btn raised @click="onPickFile('photoPathInput')">Upload Image</v-btn>

                        <input type="file" ref="photoPathInput"
                            accept="image/*"
                            @change="onFilePicked($event,  'filePath')"
                            class="d-none">

                        <v-chip v-if="fileSize">{{fileSize}}</v-chip>


                        <v-img v-if="filePath" :src="filePath" max-height="190" min-height="190" aspect-ratio contain class="mt-5" ></v-img>
                    </v-card-text>
                    <v-card-actions>
                        <v-spacer></v-spacer>
                        <v-btn color="blue darken-1" text @click="close()">Cancel</v-btn>
                        <v-btn color="success" type="submit">Save</v-btn>
                    </v-card-actions>
                </v-form>

            </v-card>
        </v-dialog>
    </div>


</template>



<script>

    import modal_alert from './../../../frontend/components/modals/alert.vue'
    import modal_alert_mixin from './../../../frontend/components/modals/alertMixins.vue'
    import picture_mixin from './../../../mixins/picture.vue'

    export default {
        components:{
            modal_alert
        },

        mounted() {

        },
        mixins: [modal_alert_mixin, picture_mixin],
        props: [
            "id"
        ],
        data() {
            return {
                dialog_picture_upload:false,
                filePath:'',
                fileSize:'',

            }
        },
        methods: {

            close(){
                this.dialog_picture_upload=false;
                this.filePath='';
                this.fileSize='';
            }

        },

    }
</script>

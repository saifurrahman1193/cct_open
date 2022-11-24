<template>
    <div>

        <v-row v-if="!axis && axis!='y'">
            <v-col
            v-for="image in images"
            :key="image"
            class="d-flex child-flex"
            cols="2"
            >
                <v-card flat tile class="d-flex">
                    <v-img
                    :src="image"
                    aspect-ratio="1"
                    class="grey lighten-2 image-hover-cursor-change"
                    style="background:rgba(0,0,0,0) !important; border-color:orange !important;"
                    min-width="50"
                    min-height="50"

                    max-width="100"
                    @click="imageZoom(image)"
                    >
                        <template v-slot:placeholder>
                            <v-row
                            class="fill-height ma-0"
                            align="center"
                            justify="center"
                            >
                                <v-progress-circular indeterminate color="orange"></v-progress-circular>
                            </v-row>
                        </template>
                    </v-img>
                </v-card>

            </v-col>
        </v-row>


            <v-list v-if="axis && axis=='y'">
                <v-list-item-group>
                    <v-list-item
                        v-for="image in images"
                        :key="image"
                    >
                        <v-img
                        :src="image"
                        aspect-ratio="1"
                        class="grey lighten-2 image-hover-cursor-change"
                        style="background:rgba(0,0,0,0) !important; border-color:orange !important;"
                        min-width="50"
                        min-height="50"

                        max-width="100"
                        @click="imageZoom(image)"
                        >
                            <template v-slot:placeholder>
                                <v-row
                                class="fill-height ma-0"
                                align="center"
                                justify="center"
                                >
                                    <v-progress-circular indeterminate color="orange"></v-progress-circular>
                                </v-row>
                            </template>
                        </v-img>
                        <v-divider></v-divider>
                    </v-list-item>
                </v-list-item-group>
            </v-list>


        <zoom_modal
            :zoomDialog="zoomDialog"
            :zoomPath="zoomPath"
            @cancelZoom="cancelZoom()"
        ></zoom_modal>

        <v-spacer></v-spacer>

    </div>
</template>


<script>
    // zoom
    import zoom_modal from './../../../frontend/components/zoom/zoom.vue'
    import zoom_mixin from './../../../frontend/components/zoom/zoomMixins.vue'

    export default {
        components:{
            zoom_modal
        },
        props: ["images", "axis"],
        mixins:[zoom_mixin],
    }
</script>


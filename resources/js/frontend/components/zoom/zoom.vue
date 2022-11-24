<template>
    <div>

        <v-dialog    scrollable  v-model="zoomDialog"  persistent    @keydown.esc="$emit('cancelZoom'); fullscreen=false;" :fullscreen="fullscreen" >
            <v-card min-height="300">
                <v-card-text>
                    <v-row>
                        <v-col :cols="isSMALT?10:11" >
                            <v-row v-if="isBackend" class="mb-1">
                                <v-chip v-if="getFileSizeWithPicPath(zoomPath)" color="red" label outlined class="mr-2">{{getFileSizeWithPicPath(zoomPath)}}</v-chip>
                                <v-chip v-if="get_url_extension(zoomPath)" color="red" label outlined>{{get_url_extension(zoomPath)}}</v-chip>
                            </v-row>
                            <v-row>
                                <v-container fluid class="pa-0 ma-0">
                                    <v-layout wrap justify-center>
                                        <div>
                                            <v-img
                                                :src="zoomPath || '/uploads/no_image.png'"
                                                style="max-width:86vw"
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
                                        </div>
                                    </v-layout>
                                </v-container>
                            </v-row>
                        </v-col >
                        <v-col :cols="isSMALT?2:1">

                            <v-list style="position: fixed; background-color: rgba(255,255,255,0.9)" dense light class="pa-0">
                                <v-list-item class="pa-0">
                                    <v-tooltip bottom>
                                        <template v-slot:activator="{ on }">
                                                <v-btn text v-on="on" @click="$emit('cancelZoom'); fullscreen=false;" >
                                                    <v-icon    color="pink">cancel</v-icon>
                                                </v-btn>
                                        </template>
                                        <span>Close image</span>
                                    </v-tooltip>
                                </v-list-item>

                                <v-list-item class="pa-0">
                                    <v-tooltip bottom>
                                        <template v-slot:activator="{ on }">
                                                <v-btn text v-on="on" @click="fullscreen = !fullscreen" >
                                                    <v-icon    color="grey darken-1" v-if="!fullscreen">fullscreen</v-icon>
                                                    <v-icon    color="grey darken-1"  v-if="fullscreen">fullscreen_exit</v-icon>
                                                </v-btn>
                                        </template>
                                        <span  v-if="!fullscreen">Fullscreen</span>
                                        <span  v-if="fullscreen">Exit fullscreen</span>
                                    </v-tooltip>
                                </v-list-item>

                                <v-list-item class="pa-0" v-if="isBackend">
                                    <v-tooltip bottom>
                                        <template v-slot:activator="{ on }">
                                            <v-btn :href="zoomPath || '/uploads/no_image.png'"
                                                    target="_blank" text v-on="on" style="text-decoration:none;">
                                                <v-icon   color="grey darken-1">open_in_new</v-icon>
                                            </v-btn>
                                        </template>
                                        <span>Open image in a new tab</span>
                                    </v-tooltip>
                                </v-list-item>
                                <v-list-item class="pa-0"  v-if="isBackend">
                                    <v-tooltip bottom>
                                        <template v-slot:activator="{ on }">
                                            <v-btn :href="zoomPath || '/uploads/no_image.png'" :download="zoomPath"
                                                     text v-on="on" color="grey darken-1" style="text-decoration:none;">
                                                <v-icon   >save_alt</v-icon>
                                            </v-btn>
                                        </template>
                                        <span>Download image</span>
                                    </v-tooltip>
                                </v-list-item>

                            </v-list>
                        </v-col>

                    </v-row>
                </v-card-text>
            </v-card>
        </v-dialog>


    </div>
</template>

<script>
export default {
    props:[
        'zoomDialog',
        'zoomPath',
    ],
    data() {
        return {
            fullscreen:false,
        }
    },
}
</script>


<style >
    .image-hover-cursor-change{
        cursor:zoom-in;
    }
</style>>




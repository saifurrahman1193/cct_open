<template>
    <div>

        <v-simple-table  dense v-if="user.name">
            <template v-slot:default >

                <tbody>
                    <tr>
                        <td colspan="2">
                            <v-img
                                :src="user.photoPath || '/uploads/no_image.png'"
                                lazy-src="/uploads/loader.gif"
                                max-height="70"
                                max-width="70"
                                aspect-ratio contain
                                @click="imageZoom(user.photoPath)"
                                class="image-hover-cursor-change"
                            ></v-img>
                        </td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{ user.name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ user.email }}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>{{ user.phone }}</td>
                    </tr>
                    <tr>
                        <th>Area</th>
                        <td>{{ user.area }}</td>
                    </tr>
                    <tr>
                        <th>Registry Date</th>
                        <td>{{ datetimeprocessing(user.created_at) }}</td>
                    </tr>

                </tbody>
            </template>
        </v-simple-table>


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
    import zoom_modal from './../../frontend/components/zoom/zoom.vue'
    import zoom_mixin from './../../frontend/components/zoom/zoomMixins.vue'

    export default {
        components:{
             zoom_modal,
        },
        props: ["user"],
        mixins: [ zoom_mixin],
    }
</script>


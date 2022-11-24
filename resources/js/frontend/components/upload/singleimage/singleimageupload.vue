<template>
    <div>
        <v-btn raised @click="onPickFile('picPathInput')">Upload Image</v-btn>
        <v-tooltip bottom>
            <template v-slot:activator="{ on }">
                    <v-btn text v-on="on" @click="$emit('cancelSingleImage')" >
                        <v-icon    color="pink">cancel</v-icon>
                    </v-btn>
            </template>
            <span>Close image</span>
        </v-tooltip>
        <input type="file" ref="picPathInput"
            accept="image/*"
            @change="onFilePickedFromObj($event, obj, property)" class="d-none">
        <v-img v-if="category.picPath" :src="category.picPath" max-height="190" min-height="190"  aspect-ratio contain class="mt-5" ></v-img>
    </div>
</template>

<script>
    import picture_mixin from './../../../../mixins/picture.vue'

    export default {
        props:[
            'obj',
            'property',
        ],
        mixins: [picture_mixin],
        
    }
</script>







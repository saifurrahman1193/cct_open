<template>
    <v-app>
        <router-view></router-view>
    </v-app>
</template>

<script>
export default{
    metaInfo: {
      // if no subcomponents specify a metaInfo.title, this title will be used
      title: 'CCTL |',
      // all titles will be injected into this template
      titleTemplate: '%s Attendance',
    }
}
</script>



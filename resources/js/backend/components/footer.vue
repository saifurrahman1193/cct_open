<template>
  <v-footer class="blue-grey lighten-4" padless clipped-left app dense >
      <v-btn
            fab
            dark
            fixed
            bottom
            right
            color="indigo"
            @click="topFunction"
          >
            <v-icon>keyboard_arrow_up</v-icon>
      </v-btn>

      <!-- <v-container>
            <h6  class="d-inline-block ml-auto">Developed by  <a href="https://vibotixbd.com/" target="_blank">VIBOTIX IT.</a></h6>
            <h6  class="d-inline-block float-right">Copyright &copy; {{ getCurrentYear() }} <a href="https://vibotixbd.com/" target="_blank">VIBOTIX IT</a>. All rights reserved.</h6>
      </v-container> -->
  </v-footer>
</template>


<script>


export default {
  mounted() {
  },
  data() {
    return {
    };
  },
  methods: {

    topFunction() {
      // document.body.scrollTop = 0; // For Safari
      // document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
      window.scrollTo({ top: 0, behavior: "smooth" });
    },


  },
  computed: {

  }
};
</script>

<style scoped>
 /* scoped = limits only to this componenet */
.toTop {
  background-color: wheat;
}
.color {
  background-color: beige;
  color: black;
  margin: 5px 0;
}
.topHover:hover {
  background-color: #bbdefb;
}
.footeraboutsection {
  color: black;
}
</style>

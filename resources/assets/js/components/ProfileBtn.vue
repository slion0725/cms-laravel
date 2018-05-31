<template>
  <a href="javascript:;" class="dropdown-item" @click="profile_emit">
      <i class="mdi mdi-account mr-1"></i>Profile
  </a>
</template>

<script>
import $ from "jquery";
import axios from "axios";
export default {
  methods: {
    profile_emit() {
      axios
        .get(`accounts/1/edit`)
        .then(response => {
          this.$store.dispatch("profile/profile", response.data.data);
        })
        .catch(error => {
          console.log(error);
        });
      $(".off-canvas").removeClass("off-canvas-open");
      $("#offcanvas-profile").toggleClass("off-canvas-open");
    }
  }
};
</script>
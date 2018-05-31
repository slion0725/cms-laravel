<template>
  <a href="javascript:;" class="dropdown-item" @click="profile_emit">
      <i class="mdi mdi-account mr-1"></i>Profile
  </a>
</template>

<script>
import $ from "jquery";
export default {
  methods: {
    profile_emit() {
      this.$store.dispatch("profile/profile", {
        name: "a",
        email: "b",
        password: null,
        password_confirmation: null
      });
      $(".off-canvas").removeClass("off-canvas-open");
      $("#offcanvas-profile").toggleClass("off-canvas-open");
    }
  }
};
</script>
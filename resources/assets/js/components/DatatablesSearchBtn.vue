<template>
  <a href="javascript:;" class="btn-item" @click="search_emit">
      <i class="mdi mdi-magnify mr-1"></i>Search
  </a>
</template>

<script>
import $ from "jquery";
export default {
  methods: {
    search_emit() {
      $(".off-canvas").removeClass("off-canvas-open");
      $("#offcanvas-search").toggleClass("off-canvas-open");
    }
  }
};
</script>
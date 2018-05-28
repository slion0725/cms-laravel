<template>
  <a href="#" class="btn-item" @click="add_emit">
      <i class="mdi mdi-plus mr-1"></i>Add
  </a>
</template>

<script>
import $ from "jquery";
export default {
  methods: {
    add_emit() {
      $(".off-canvas").removeClass("off-canvas-open");
      $("#offcanvas-add").toggleClass("off-canvas-open");
    }
  }
};
</script>
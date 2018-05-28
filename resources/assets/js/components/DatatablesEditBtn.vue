<template>
  <a href="#" class="btn-item" @click="edit_emit" :class="{disabled:selectRowsLength != 1}">
      <i class="mdi mdi-pencil mr-1"></i>Edit
  </a>
</template>

<script>
import $ from "jquery";
import { mapGetters, mapActions } from "vuex";
export default {
  computed: mapGetters(["selectRowsLength", "selectRows"]),
  methods: {
    edit_emit() {
      if (this.selectRowsLength != 1) {
        return;
      }
      let id = this.selectRows[0].id;

      console.log(id);

      $(".off-canvas").removeClass("off-canvas-open");
      $("#offcanvas-edit").toggleClass("off-canvas-open");
    }
  }
};
</script>
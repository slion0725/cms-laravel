<template>
  <a href="#" class="btn-item" @click="download_emit" :class="{disabled:selectRowsLength == 0}">
      <i class="mdi mdi-download mr-1"></i>Download
  </a>
</template>

<script>
import $ from "jquery";
import { mapGetters, mapActions } from "vuex";

export default {
  computed: mapGetters(["selectRowsLength", "selectRows"]),
  methods: {
    show_emit() {
      if (this.selectRowsLength == 0) {
        return;
      }

      let id = this.selectRows[0].id;

      console.log(this.selectRows)

      $(".off-canvas").removeClass("off-canvas-open");
    }
  }
};
</script>
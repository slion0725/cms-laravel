<template>
  <a href="javascript:;" class="btn-item" @click="show_emit" :class="{disabled:selectRowsLength != 1}">
      <i class="mdi mdi-view-list mr-1"></i>Show
  </a>
</template>

<script>
import $ from "jquery";
import { mapGetters, mapActions } from "vuex";
import axios from "axios";
axios.defaults.headers["Accept"] = "application/json";

export default {
  props: {
    show: {
      type: Object,
      required: true
    },
    path: {
      type: String,
      required: true
    }
  },
  computed: mapGetters("datatables", ["selectRowsLength", "selectRows"]),
  methods: {
    show_emit() {
      if (this.selectRowsLength != 1) {
        return;
      }

      let id = this.selectRows[0].id;

      axios
        .get(`${this.path}/${id}`)
        .then(response => {
          Object.assign(this.show, response.data.data);
        })
        .catch(error => {
          console.log(error);
        });

      $(".off-canvas").removeClass("off-canvas-open");
      $("#offcanvas-show").toggleClass("off-canvas-open");
    }
  }
};
</script>
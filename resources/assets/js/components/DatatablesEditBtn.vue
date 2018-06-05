<template>
  <a href="javascript:;" class="btn-item" @click="edit_emit" :class="{disabled:selectRowsLength != 1}">
      <i class="mdi mdi-pencil mr-1"></i>Edit
  </a>
</template>

<script>
import $ from "jquery";
import { mapGetters, mapActions } from "vuex";
import axios from "axios";
axios.defaults.headers["Accept"] = "application/json";

export default {
  props: {
    edit: {
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
    edit_emit() {
      if (this.selectRowsLength != 1) {
        return;
      }

      let id = this.selectRows[0].id;

      axios
        .get(`${this.path}/${id}/edit`)
        .then(response => {
          Object.assign(this.edit, response.data.data);
        })
        .catch(error => {
          console.log(error);
        });

      $(".off-canvas").removeClass("off-canvas-open");
      $("#offcanvas-edit").toggleClass("off-canvas-open");
    }
  }
};
</script>
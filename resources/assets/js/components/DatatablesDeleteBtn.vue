<template>
  <a href="javascript:;" class="btn-item" id="del-btn" @click="delete_emit" :class="{disabled:selectRowsLength != 1}">
      <i class="mdi mdi-delete mr-1"></i>Del
  </a>
</template>

<script>
import $ from "jquery";
import { mapGetters, mapActions } from "vuex";
import axios from "axios";
import swal from "sweetalert2";

axios.defaults.headers["Accept"] = "application/json";

export default {
  props: {
    path: {
      type: String,
      required: true
    }
  },
  computed: mapGetters("datatables", ["selectRowsLength", "selectRows"]),
  methods: {
    delete_emit() {
      if (this.selectRowsLength != 1) {
        return;
      }

      let id = this.selectRows[0].id;

      $(".off-canvas").removeClass("off-canvas-open");

      swal({
        title: `ID : ${id} - Are you sure?`,
        text: `You won't be able to revert this!`,
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
      }).then(result => {
        if (result.value) {
          axios
            .post(`${this.path}/${id}`, {
              _method: "DELETE"
            })
            .then(response => {
              this.$store.dispatch("datatables/draw");
              swal("Deleted!", "Your file has been deleted.", "success");
            })
            .catch(error => {
              swal("Warning!", error.response.data.message, "warning");
            });
        }
      });
    }
  }
};
</script>
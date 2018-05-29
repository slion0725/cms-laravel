<template>
  <a href="#" class="btn-item" id="del-btn" @click="delete_emit" :class="{disabled:selectRowsLength != 1}">
      <i class="mdi mdi-delete mr-1"></i>Del
  </a>
</template>

<script>
import $ from "jquery";
import { mapGetters, mapActions } from "vuex";
import swal from "sweetalert2";
import axios from "axios";

axios.defaults.headers.common = {
  "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
  "X-Requested-With": "XMLHttpRequest"
};

export default {
  computed: mapGetters(["selectRowsLength", "selectRows"]),
  methods: {
    delete_emit() {
      if (this.selectRowsLength != 1) {
        return;
      }

      let id = this.selectRows[0].id;
      
      $(".off-canvas").removeClass("off-canvas-open");

      swal({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
      }).then(result => {
        if (result.value) {
          swal("Deleted!", "Your file has been deleted.", "success");
        }
      });
    }
  }
};
</script>
<template>
  <a class="btn-item" href="javascript:;" @click="open" :class="{disabled:selectRowsLength != 1}">
      <i class="mdi mdi-pencil mr-1"></i>Edit
  </a>
</template>

<script>
import { mapGetters, mapActions } from "vuex";
import axios from "axios";
axios.defaults.headers["Accept"] = "application/json";

export default {
  computed: mapGetters("datatables", ["selectRowsLength"]),
  methods: {
    open() {
      if (this.selectRowsLength != 1) {
        return;
      }

      this.$emit("open");
    }
  }
};
</script>
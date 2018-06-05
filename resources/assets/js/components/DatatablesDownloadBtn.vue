<template>
  <a href="javascript:;" class="btn-item" @click="download" :class="{disabled:selectRowsLength == 0}">
      <i class="mdi mdi-download mr-1"></i>Download
  </a>
</template>

<script>
import $ from "jquery";
import { mapGetters, mapActions } from "vuex";

export default {
  computed: mapGetters("datatables", ["selectRowsLength"]),
  methods: mapActions("datatables", ["download"]),
};
</script>
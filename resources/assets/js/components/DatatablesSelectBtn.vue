<template>
  <a href="javascript:;" class="btn-item" @click="select_toggle">
      <i class="mdi mdi-checkbox-blank-outline mr-1" v-if="selectStatus == 0"></i>
      <i class="mdi mdi-minus-box-outline mr-1" v-if="selectStatus == 1"></i>
      <i class="mdi mdi-checkbox-marked-outline mr-1" v-if="selectStatus == 2"></i>
      Select
  </a>
</template>

<script>
import { mapGetters, mapActions } from "vuex";
export default {
  computed: mapGetters("datatables", ["selectStatus"]),
  methods: mapActions("datatables", ["select_toggle"])
};
</script>
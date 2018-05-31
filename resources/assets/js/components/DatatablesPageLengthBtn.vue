<template>
  <div class="btn-item">
      <a href="javascript:;" data-toggle="dropdown">
          <i class="mdi mdi-format-line-spacing mr-1"></i>{{pageLength}}
      </a>
      <div class="dropdown-menu">
          <a class="dropdown-item" href="javascript:;" @click="page_length_change(10)">10</a>
          <a class="dropdown-item" href="javascript:;" @click="page_length_change(25)">25</a>
          <a class="dropdown-item" href="javascript:;" @click="page_length_change(50)">50</a>
          <a class="dropdown-item" href="javascript:;" @click="page_length_change(100)">100</a>
      </div>
  </div>
</template>

<script>
import { mapGetters, mapActions } from "vuex";
export default {
  computed: mapGetters('datatables',["pageLength"]),
  methods: mapActions('datatables',["page_length_change"])
};
</script>
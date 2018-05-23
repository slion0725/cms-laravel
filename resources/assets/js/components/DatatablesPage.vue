<template>
  <div class="btn-item">
      <a href="#" data-toggle="dropdown">
          <i class="mdi mdi-format-line-spacing mr-1"></i>{{pageLength}}
      </a>
      <div class="dropdown-menu">
          <a class="dropdown-item" href="#">10</a>
          <a class="dropdown-item" href="#">25</a>
          <a class="dropdown-item" href="#">50</a>
          <a class="dropdown-item" href="#">100</a>
      </div>
  </div>
</template>

<script>
import { mapGetters, mapActions } from "vuex";
export default {
  computed: mapGetters([
    'pageLength'
  ]),
  methods: mapActions([
    'select_toggle',
  ])
};
</script>
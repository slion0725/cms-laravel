import Vue from "vue";

Vue.component("v-datatables", require("./Datatables.vue"));
Vue.component(
  "v-datatables-page-length-btn",
  require("./DatatablesPageLengthBtn.vue")
);
Vue.component("v-datatables-select-btn", require("./DatatablesSelectBtn.vue"));
Vue.component("v-datatables-search-btn", require("./DatatablesSearchBtn.vue"));
Vue.component("v-datatables-show-btn", require("./DatatablesShowBtn.vue"));
Vue.component("v-datatables-add-btn", require("./DatatablesAddBtn.vue"));
Vue.component("v-datatables-edit-btn", require("./DatatablesEditBtn.vue"));
Vue.component("v-datatables-delete-btn", require("./DatatablesDeleteBtn.vue"));

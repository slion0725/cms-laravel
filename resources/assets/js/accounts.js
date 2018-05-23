if (process.env.NODE_ENV !== "production") {
  console.log("Looks like we are in development mode!");
}
/**
 * style
 */
// import "../scss/accounts.scss";
/**
 * plugin
 */
import $ from "jquery";
import "popper.js";
import "bootstrap";
import "holderjs";
/**
 * script
 */
// vue + vuex + components
import Vue from "../plugins/vue";
import store from './components/store';
Vue.component(
  "v-datatables",
  require("./components/Datatables.vue")
);
Vue.component(
  "v-datatables-select-btn",
  require("./components/DatatablesSelectBtn.vue")
);
new Vue({
  el: "#app",
  store,
  data: {
    datatablesSetting: {
      ajax: {
        url: "accounts/datatables",
        type: "GET"
      },
      columns: [
        {
          data: "id",
          name: "id",
          title: "id",
          searchable: true
        },
        {
          data: "name",
          name: "name",
          title: "name",
          searchable: true
        },
        {
          data: "email",
          name: "email",
          title: "email",
          searchable: true
        },
        {
          data: "status",
          name: "status",
          title: "status",
          searchable: true
        },
        {
          data: "created_at",
          name: "created_at",
          title: "created at",
          searchable: true
        },
        {
          data: "updated_at",
          name: "updated_at",
          title: "updated at",
          searchable: true
        }
      ]
    }
  }
});

// layout
import { offCanvas, navtabsScroll } from "./components/layout";
offCanvas();
navtabsScroll();

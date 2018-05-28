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
import "./components";
import store from "./components/store";
import { mapGetters, mapActions } from "vuex";

new Vue({
  el: "#app",
  store,
  data: {
    search: {
      all: "",
      id: { value: "", regex: false },
      name: { value: "", regex: false },
      email: { value: "", regex: false },
      status: { value: "", regex: false },
      created_at: { value: "", regex: false },
      updated_at: { value: "", regex: false }
    },
    show: { id: "", name: "", email: "" },
    add: { id: "", name: "", email: "" },
    edit: { id: "", name: "", email: "" },
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
  },
  computed: { ...mapGetters(["selectRowsLength"]) },
  methods: {
    ...mapActions(["search_emit", "search_clear"]),
    add_onSubmit(scope) {
      this.$validator.validateAll(scope).then(result => {
        if (!result) {
          return;
        }
      });
    },
    edit_onSubmit(scope) {
      this.$validator.validateAll(scope).then(result => {
        if (!result) {
          return;
        }
      });
    }
  }
});

// layout
import { offCanvas, navtabsScroll } from "./components/layout";
offCanvas();
navtabsScroll();

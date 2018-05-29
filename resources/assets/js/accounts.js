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
import swal from "sweetalert2";
import axios from "axios";
axios.defaults.headers["Accept"] = "application/json";
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
    show: { id: null, name: null, email: null, status: null },
    add: { name: null, email: null, status: 0 },
    edit: { id: null, name: null, email: null, status: null },
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

        axios
          .post(`accounts`, this.add)
          .then(response => {
            this.$store.dispatch("draw");
            swal("Success!", "", "success");
          })
          .catch(error => {
            Object.keys(error.response.data.errors).forEach(e => {
              this.$validator.errors.add({
                field: e,
                msg: error.response.data.errors[e][0],
                scope: scope,
                id: `res-${scope}-${e}`
              });
            });

            swal("Warning!", error.response.data.message, "warning");
          });
      });
    },
    edit_onSubmit(scope) {
      this.$validator.validateAll(scope).then(result => {
        if (!result) {
          return;
        }

        axios
          .post(`accounts`, this.add)
          .then(response => {
            this.$store.dispatch("draw");
            swal("Success!", "", "success");
          })
          .catch(error => {
            Object.keys(error.response.data.errors).forEach(e => {
              this.$validator.errors.add({
                field: e,
                msg: error.response.data.errors[e][0],
                scope: scope,
                id: `res-${scope}-${e}`
              });
            });

            swal("Warning!", error.response.data.message, "warning");
          });
      });
    }
  }
});

// layout
import { offCanvas, navtabsScroll } from "./components/layout";
offCanvas();
navtabsScroll();

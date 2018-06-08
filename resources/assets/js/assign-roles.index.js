if (process.env.NODE_ENV !== "production") {
  console.log("Looks like we are in development mode!");
}
/**
 * style
 */
// import "../scss/assign-roles.index.scss";
/**
 * plugin
 */
import $ from "jquery";
import "popper.js";
import "bootstrap";
import "holderjs";
import _ from "lodash";
import axios from "axios";
import swal from "sweetalert2";
import Vue from "../plugins/vue";
import "./components";
import store from "./components/store";
import { mapGetters, mapActions } from "vuex";
/**
 * script
 */
axios.defaults.headers["Accept"] = "application/json";

const data = {
  search: {
    all: "",
    id: { value: "", regex: false },
    email: { value: "", regex: false },
    roles: { value: "", regex: false },
  },
  show: {
    id: null,
    email: null,
    roles: null
  },
  edit: {
    id: null,
    roles: [],
    _method: "PUT"
  },
  datatablesSetting: {
    ajax: {
      url: "assign-roles/datatables",
      type: "GET"
    },
    columns: [
      {
        data: "id",
        name: "id",
        title: "ID",
        searchable: true
      },
      {
        data: "email",
        name: "email",
        title: "Email",
        searchable: true
      },
      {
        data: "roles",
        name: "roles",
        title: "Roles",
        searchable: true
      }
    ]
  }
};

new Vue({
  el: "#app",
  store,
  data: _.cloneDeep(data),
  computed: { ...mapGetters("datatables", ["selectRowsLength"]) },
  methods: {
    ...mapActions("datatables", ["search_emit", "search_clear"]),
    edit_onSubmit(scope) {
      this.$validator.validateAll(scope).then(result => {
        if (!result) {
          return;
        }

        axios
          .post(`assign-roles/${this.edit.id}`, this.edit)
          .then(response => {
            console.log(response);

            this.$store.dispatch("datatables/draw");

            swal("Success!", "", "success");

            this.edit = _.cloneDeep(data.edit);

            this.$nextTick(() => {
              this.$validator.reset({ scope: scope });
              this.$validator.errors.clear(scope);
            });
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

            // swal("Warning!", error.response.data.message, "warning");
          });
      });
    }
  }
});

// layout
import { offCanvas, navtabsScroll } from "./components/layout";
offCanvas();
navtabsScroll();

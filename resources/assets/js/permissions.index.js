if (process.env.NODE_ENV !== "production") {
  console.log("Looks like we are in development mode!");
}
/**
 * style
 */
// import "../scss/permissions.index.scss";
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
    name: { value: "", regex: false },
    guard_name: { value: "", regex: false },
    created_at: { value: "", regex: false },
    updated_at: { value: "", regex: false },
  },
  show: { id: null, name: null, email: null, status: null },
  add: {
    name: null,
    guard_name: null,
    created_at: null,
    updated_at: null
  },
  edit: {
    id: null,
    id: null,
    name: null,
    guard_name: null,
    created_at: null,
    updated_at: null,
    _method: "PUT"
  },
  datatablesSetting: {
    ajax: {
      url: "permissions/datatables",
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
        data: "name",
        name: "name",
        title: "Name",
        searchable: true
      },
      {
        data: "guard_name",
        name: "guard_name",
        title: "Guard Name",
        searchable: true
      },
      {
        data: "created_at",
        name: "created_at",
        title: "Created At",
        searchable: true
      },
      {
        data: "updated_at",
        name: "updated_at",
        title: "Updated At",
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
    add_onSubmit(scope) {
      this.$validator.validateAll(scope).then(result => {
        if (!result) {
          return;
        }

        axios
          .post(`permissions`, this.add)
          .then(response => {
            this.$store.dispatch("datatables/draw");

            swal("Success!", "", "success");

            this.add = _.cloneDeep(data.add);

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
    },
    edit_onSubmit(scope) {
      this.$validator.validateAll(scope).then(result => {
        if (!result) {
          return;
        }

        axios
          .post(`permissions/${this.edit.id}`, this.edit)
          .then(response => {
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

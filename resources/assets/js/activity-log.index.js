if (process.env.NODE_ENV !== "production") {
  console.log("Looks like we are in development mode!");
}
/**
 * style
 */
// import "../scss/accounts.index.scss";
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
    log_name: { value: "", regex: false },
    description: { value: "", regex: false },
    subject_id: { value: "", regex: false },
    subject_type: { value: "", regex: false },
    causer_id: { value: "", regex: false },
    causer_type: { value: "", regex: false },
    properties: { value: "", regex: false },
    created_at: { value: "", regex: false },
    updated_at: { value: "", regex: false }
  },
  show: {
    id: null,
    log_name: null,
    description: null,
    subject_id: null,
    subject_type: null,
    causer_id: null,
    causer_type: null,
    properties: null,
    created_at: null,
    updated_at: null
  },
  add: {
    log_name: null,
    description: null,
    subject_id: null,
    subject_type: null,
    causer_id: null,
    causer_type: null,
    properties: null,
    created_at: null,
    updated_at: null
  },
  edit: {
    id: null,
    log_name: null,
    description: null,
    subject_id: null,
    subject_type: null,
    causer_id: null,
    causer_type: null,
    properties: null,
    created_at: null,
    updated_at: null,
    _method: "PUT"
  },
  datatablesSetting: {
    ajax: {
      url: "activity-log/datatables",
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
        data: "log_name",
        name: "log_name",
        title: "Log Name",
        searchable: true
      },
      {
        data: "description",
        name: "description",
        title: "Description",
        searchable: true
      },
      {
        data: "subject_id",
        name: "subject_id",
        title: "Subject ID",
        searchable: true
      },
      {
        data: "subject_type",
        name: "subject_type",
        title: "Subject Type",
        searchable: true
      },
      {
        data: "causer_id",
        name: "causer_id",
        title: "Causer ID",
        searchable: true
      },
      {
        data: "causer_type",
        name: "causer_type",
        title: "Causer Type",
        searchable: true
      },
      {
        data: "properties",
        name: "properties",
        title: "Properties",
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

Vue.filter("json", function(value) {
  if (!value) return "";
  return JSON.stringify(JSON.parse(value), null, 2);
});

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
          .post(`accounts`, this.add)
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
            if (error.response.data.errors) {
              Object.keys(error.response.data.errors).forEach(e => {
                this.$validator.errors.add({
                  field: e,
                  msg: error.response.data.errors[e][0],
                  scope: scope,
                  id: `res-${scope}-${e}`
                });
              });
            } else {
              swal("Warning!", error.message, "warning");
            }
          });
      });
    },
    edit_onSubmit(scope) {
      this.$validator.validateAll(scope).then(result => {
        if (!result) {
          return;
        }

        axios
          .post(`accounts/${this.edit.id}`, this.edit)
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
            if (error.response.data.errors) {
              Object.keys(error.response.data.errors).forEach(e => {
                this.$validator.errors.add({
                  field: e,
                  msg: error.response.data.errors[e][0],
                  scope: scope,
                  id: `res-${scope}-${e}`
                });
              });
            } else {
              swal("Warning!", error.message, "warning");
            }
          });
      });
    }
  }
});

// layout
import { offCanvas, navtabsScroll } from "./components/layout";
offCanvas();
navtabsScroll();

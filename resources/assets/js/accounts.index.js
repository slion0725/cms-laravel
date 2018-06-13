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
    name: { value: "", regex: false },
    email: { value: "", regex: false },
    status: { value: "", regex: false },
    created_at: { value: "", regex: false },
    updated_at: { value: "", regex: false }
  },
  show: { id: null, name: null, email: null, status: null },
  add: {
    name: null,
    email: null,
    status: 0,
    password: null,
    password_confirmation: null
  },
  edit: {
    id: null,
    name: null,
    email: null,
    status: null,
    password: "",
    password_confirmation: "",
    _method: "PUT"
  },
  datatablesSetting: {
    ajax: {
      url: "accounts/datatables",
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
        title: "NAME",
        searchable: true
      },
      {
        data: "email",
        name: "email",
        title: "EMAIL",
        searchable: true
      },
      {
        data: "status",
        name: "status",
        title: "STATUS",
        searchable: true
      },
      {
        data: "created_at",
        name: "created_at",
        title: "CREATED AT",
        searchable: true
      },
      {
        data: "updated_at",
        name: "updated_at",
        title: "UPDATED AT",
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

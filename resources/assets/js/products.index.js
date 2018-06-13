if (process.env.NODE_ENV !== "production") {
  console.log("Looks like we are in development mode!");
}
/**
 * style
 */
// import "../scss/products.index.scss";
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
    title: { value: "", regex: false },
    price: { value: "", regex: false },
    manual: { value: "", regex: false },
    image: { value: "", regex: false },
    event_start: { value: "", regex: false },
    event_end: { value: "", regex: false },
    description: { value: "", regex: false },
    spec: { value: "", regex: false },
    status: { value: "", regex: false },
    created_at: { value: "", regex: false },
    updated_at: { value: "", regex: false }
  },
  show: { id: null, name: null, email: null, status: null },
  add: {
    name: null,
    title: null,
    price: null,
    manual: null,
    image: null,
    event_start: null,
    event_end: null,
    description: null,
    spec: null,
    status: null,
    created_at: null,
    updated_at: null
  },
  edit: {
    id: null,
    name: null,
    title: null,
    price: null,
    manual: null,
    image: null,
    event_start: null,
    event_end: null,
    description: null,
    spec: null,
    status: null,
    created_at: null,
    updated_at: null,
    _method: "PUT"
  },
  datatablesSetting: {
    ajax: {
      url: "products/datatables",
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
        data: "title",
        name: "title",
        title: "Title",
        searchable: true
      },
      {
        data: "price",
        name: "price",
        title: "Price",
        searchable: true
      },
      {
        data: "manual",
        name: "manual",
        title: "Manual",
        searchable: true
      },
      {
        data: "image",
        name: "image",
        title: "Image",
        searchable: true
      },
      {
        data: "event_start",
        name: "event_start",
        title: "Event Start",
        searchable: true
      },
      {
        data: "event_end",
        name: "event_end",
        title: "Event End",
        searchable: true
      },
      {
        data: "description",
        name: "description",
        title: "Description",
        searchable: true
      },
      {
        data: "spec",
        name: "spec",
        title: "Spec",
        searchable: true
      },
      {
        data: "status",
        name: "status",
        title: "Status",
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
          .post(`products`, this.add)
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
          .post(`products/${this.edit.id}`, this.edit)
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

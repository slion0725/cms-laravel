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
axios.defaults.headers["Content-Type"] = "multipart/form-data";

const data = {
  search: {
    all: "",
    id: { value: "", regex: false },
    name: { value: "", regex: false },
    title: { value: "", regex: false },
    price: { value: "", regex: false },
    event_start: { value: "", regex: false },
    event_end: { value: "", regex: false },
    status: { value: "", regex: false },
    created_at: { value: "", regex: false },
    updated_at: { value: "", regex: false }
  },
  show: {
    id: "",
    name: "",
    title: "",
    price: "",
    status: 0,
    manual: "",
    image: "",
    event_start: "",
    event_end: "",
    description: "",
    spec: "",
    created_at: "",
    updated_at: ""
  },
  add: {
    name: "",
    title: "",
    price: "",
    status: 0,
    manual: "",
    image: "",
    event_start: "",
    event_end: "",
    description: "",
    spec: ""
  },
  edit: {
    id: "",
    name: "",
    title: "",
    price: "",
    status: 0,
    manual: "",
    image: "",
    event_start: "",
    event_end: "",
    description: "",
    spec: "",
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

var app = new Vue({
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

        let formData = new FormData();

        _.map(this.add, (item, key) => {
          formData.append(key, item);
        });

        _.map(this.add.image, (item, key) => {
          formData.append(`image[${key}]`, item);
        });

        axios
          .post(`products`, formData)
          .then(response => {
            this.$store.dispatch("datatables/draw");

            swal("Success!", "", "success");

            this.$refs["add-manual"].value = "";
            this.$refs["add-image"].value = "";
            this.$refs["add-event_start"].value = "";
            this.$refs["add-event_end"].value = "";

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
    },
    processFile(event, data, multiple = false) {
      if (event.target.files.length > 0) {
        if (multiple) {
          this[data[0]][data[1]] = event.target.files;
        } else {
          this[data[0]][data[1]] = event.target.files[0];
        }
      } else {
        this[data[0]][data[1]] = "";
      }
    }
  }
});

// layout
import { offCanvas, navtabsScroll } from "./components/layout";
offCanvas();
navtabsScroll();

import ckeditor5 from "@ckeditor/ckeditor5-build-classic";
ckeditor5
  .create(document.querySelector("#add-description"), {})
  .then(editor => {
    editor.model.document.on("change", () => {
      app.add.description = editor.getData();
    });
  })
  .catch(err => {
    console.error(err.stack);
  });

import Quill from "quill";
let addspec = new Quill("#add-spec", {
  modules: {
    toolbar: true
  },
  theme: "snow"
});

addspec.on("text-change", () => {
  app.add.spec = addspec.root.innerHTML;
});

import flatpickr from "flatpickr";
// import { Mandarin } from "flatpickr/dist/l10n/zh.js";
import rangePlugin from "flatpickr/dist/plugins/rangePlugin.js";
flatpickr("#add-event_start", {
  // locale: Mandarin,
  time_24hr: true,
  dateFormat: "Y-m-d",
  plugins: [
    new rangePlugin({
      input: "#add-event_end"
    })
  ],
  onChange(selectedDates, dateStr, instance) {
    let selectedUTCDates = selectedDates.map(date =>
      instance.formatDate(date, instance.config.dateFormat)
    );
    app.add.event_start = selectedUTCDates[0];
    app.add.event_end = selectedUTCDates[1];
  }
});
$("#add-event_start, #add-event_end").css({ backgroundColor: "#fff" });

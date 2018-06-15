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
    image: "",
    manual: "",
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
    image: "",
    images: "",
    manual: "",
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
    image: "",
    images: "",
    manual: "",
    event_start: "",
    event_end: "",
    description: "",
    spec: ""
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
  computed: { ...mapGetters("datatables", ["selectRows"]) },
  methods: {
    ...mapActions("datatables", ["search_emit", "search_clear"]),
    add_form() {
      $(".off-canvas").removeClass("off-canvas-open");
      $("#offcanvas-add").toggleClass("off-canvas-open");
    },
    edit_form() {
      let id = this.selectRows[0].id;

      axios
        .get(`products/${id}/edit`)
        .then(response => {
          delete response.data.data.image;

          delete response.data.data.manual;

          delete response.data.data.created_at;

          delete response.data.data.updated_at;

          Object.assign(this.edit, response.data.data);

          edit_event.setDate([this.edit.event_start, this.edit.event_end])

          edit_description.setData(this.edit.description);

          edit_spec.root.innerHTML = this.edit.spec;
        })
        .catch(error => {
          console.log(error);
        });

      $(".off-canvas").removeClass("off-canvas-open");
      $("#offcanvas-edit").toggleClass("off-canvas-open");
    },
    add_onSubmit(scope) {
      this.$validator.validateAll(scope).then(result => {
        if (!result) {
          return;
        }

        // formdata
        let formData = new FormData();

        // append
        _.map(this.add, (item, key) => {
          formData.append(key, item);
        });

        // multiple files
        _.map(this.add.images, (item, key) => {
          formData.append(`images[${key}]`, item);
        });

        // console
        // for (let item of formData.entries()) {
        //   console.log(item[0], item[1]);
        // }

        // ajax
        axios
          .post(`products`, formData)
          .then(response => {
            this.$store.dispatch("datatables/draw");

            swal("Success!", "", "success");

            // reset
            this.$refs["add-manual"].value = "";
            this.$refs["add-image"].value = "";
            this.$refs["add-images"].value = "";
            this.$refs["add-event_start"].value = "";
            this.$refs["add-event_end"].value = "";
            add_event.clear();
            add_description.setData("");
            add_spec.setContents([]);
            this.add = _.cloneDeep(data.add);

            // error reset
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

        let formData = new FormData();

        formData.append("_method", "PUT");

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

let add_description;
ckeditor5
  .create(document.querySelector("#add-description"), {})
  .then(editor => {
    add_description = editor;
    editor.model.document.on("change", () => {
      app.add.description = editor.getData();
    });
  })
  .catch(err => {
    console.error(err.stack);
  });

let edit_description;
ckeditor5
  .create(document.querySelector("#edit-description"), {})
  .then(editor => {
    edit_description = editor;
    editor.model.document.on("change", () => {
      app.edit.description = editor.getData();
    });
  })
  .catch(err => {
    console.error(err.stack);
  });

import Quill from "quill";

let add_spec = new Quill("#add-spec", {
  modules: {
    toolbar: true
  },
  theme: "snow"
});

add_spec.on("text-change", () => {
  app.add.spec = add_spec.root.innerHTML;
});

let edit_spec = new Quill("#edit-spec", {
  modules: {
    toolbar: true
  },
  theme: "snow"
});

edit_spec.on("text-change", () => {
  app.edit.spec = edit_spec.root.innerHTML;
});

import flatpickr from "flatpickr";
// import { Mandarin } from "flatpickr/dist/l10n/zh.js";
import rangePlugin from "flatpickr/dist/plugins/rangePlugin.js";

let add_event = flatpickr("#add-event_start", {
  // locale: Mandarin,
  time_24hr: true,
  enableTime: true,
  dateFormat: "Y-m-d H:i:S",
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

let edit_event = flatpickr("#edit-event_start", {
  // locale: Mandarin,
  time_24hr: true,
  enableTime: true,
  dateFormat: "Y-m-d H:i:S",
  plugins: [
    new rangePlugin({
      input: "#edit-event_end"
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
$("#edit-event_start, #edit-event_end").css({ backgroundColor: "#fff" });

<template>
    <table class="table table-hover w-100" cellspacing="0"></table>
</template>

<script>
import $ from "jquery";
import "datatables.net";
import "datatables.net-bs4";
import "datatables.net-colreorder";
import "datatables.net-select";
import "datatables.net-fixedcolumns";

$.fn.dataTableExt.oStdClasses.sWrapper = "dataTables_wrapper dt-bootstrap4";
$.fn.dataTableExt.oStdClasses.sPageButton = "page-item";

export default {
  props: {
    setting: {
      type: Object,
      required: true
    }
  },
  data() {
    return {
      dt: {},
      config: {
        dom: `
          <'row'<'col-md-12'tr>>
          <'navbar px-0'<i><p>>
        `,
        renderer: "bootstrap",
        displayLength: 10,
        lengthMenu: [[1, 10, 25, 50, 100], [1, 10, 25, 50, 100]],
        pagingType: "simple_numbers",
        language: {
          lengthMenu: "_MENU_",
          processing: "loading",
          paginate: {
            first: "&laquo;",
            previous: "&lsaquo;",
            next: "&rsaquo;",
            last: "&raquo;"
          },
          search: "",
          searchPlaceholder: "Search..."
        },
        select: {
          style: "os",
          className: "bg-dark text-white"
        },
        colReorder: {
          fixedColumnsLeft: 1
        },
        fixedColumns: {
          leftColumns: 1
        },
        scrollX: true,
        scrollY: "calc(100vh - 300px)",
        scrollCollapse: true,
        order: [[0, "desc"]],
        serverSide: true,
        processing: true,
        ajax: {
          url: "/datatables",
          type: "GET"
        },
        stateSave: false
      }
    };
  },
  mounted() {
    this.dt = $("table.table").DataTable(
      Object.assign(this.config, this.setting)
    );

    this.dt.on("select", (e, dt, type, indexes) => {
      $(".off-canvas").removeClass("off-canvas-open");
      this.$store.dispatch("datatables/select_check");
    });

    this.dt.on("deselect", (e, dt, type, indexes) => {
      $(".off-canvas").removeClass("off-canvas-open");
      this.$store.dispatch("datatables/select_check");
    });

    this.dt.on("draw", () => {
      $(".off-canvas").removeClass("off-canvas-open");
      this.$store.dispatch("datatables/select_check");
    });

    this.$store.dispatch("datatables/datatables_init", this.dt);
  }
};
</script>
if (process.env.NODE_ENV !== "production") {
  console.log("Looks like we are in development mode!");
}
/**
 * style
 */
// import "../scss/password.request.scss";
/**
 * plugin
 */
import $ from "jquery";
import "popper.js";
import "bootstrap";
import "holderjs";
import Vue from "../plugins/vue";
/**
 * script
 */
new Vue({
  el: "#app",
  methods: {
    onSubmit() {
      this.$validator.validate().then(result => {
        if (!result) {
          return;
        }
        this.$refs.request.submit();
      });
    }
  }
});
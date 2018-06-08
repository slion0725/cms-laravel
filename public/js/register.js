webpackJsonp([8],{

/***/ 258:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(259);


/***/ }),

/***/ 259:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_jquery__ = __webpack_require__(1);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_jquery___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_jquery__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_popper_js__ = __webpack_require__(10);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2_bootstrap__ = __webpack_require__(51);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2_bootstrap___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_2_bootstrap__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3_holderjs__ = __webpack_require__(52);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3_holderjs___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_3_holderjs__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__plugins_vue__ = __webpack_require__(7);
if (true) {
  console.log("Looks like we are in development mode!");
}
/**
 * style
 */
// import "../scss/register.scss";
/**
 * plugin
 */





/**
 * script
 */
new __WEBPACK_IMPORTED_MODULE_4__plugins_vue__["a" /* default */]({
  el: "#app",
  methods: {
    onSubmit: function onSubmit() {
      var _this = this;

      this.$validator.validate().then(function (result) {
        if (!result) {
          return;
        }
        _this.$refs.register.submit();
      });
    }
  }
});

/***/ }),

/***/ 7:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_vue__ = __webpack_require__(6);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_vue___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_vue__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_vee_validate__ = __webpack_require__(54);


// import zhTW from "vee-validate/dist/locale/zh_TW";

// Validator.localize("zh-Tw", zhTW);

__WEBPACK_IMPORTED_MODULE_0_vue___default.a.use(__WEBPACK_IMPORTED_MODULE_1_vee_validate__["default"]);

/* harmony default export */ __webpack_exports__["a"] = (__WEBPACK_IMPORTED_MODULE_0_vue___default.a);

/***/ })

},[258]);
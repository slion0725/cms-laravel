let mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');

mix
  // index
  .js("resources/assets/js/index.js", "public/js")
  .sass("resources/assets/sass/index.scss", "public/css")
  // login
  .js("resources/assets/js/login.js", "public/js")
  .sass("resources/assets/sass/login.scss", "public/css")
  // register
  .js("resources/assets/js/register.js", "public/js")
  .sass("resources/assets/sass/register.scss", "public/css")
  // password.request
  .js("resources/assets/js/password.request.js", "public/js")
  .sass("resources/assets/sass/password.request.scss", "public/css")
  // password.reset
  .js("resources/assets/js/password.reset.js", "public/js")
  .sass("resources/assets/sass/password.reset.scss", "public/css")
  // dashboard
  .js("resources/assets/js/dashboard.index.js", "public/js")
  .sass("resources/assets/sass/dashboard.index.scss", "public/css")
  // accounts
  .js("resources/assets/js/accounts.index.js", "public/js")
  .sass("resources/assets/sass/accounts.index.scss", "public/css")
  // activity_log
  .js("resources/assets/js/activity-log.index.js", "public/js")
  .sass("resources/assets/sass/activity-log.index.scss", "public/css")
  // roles
  .js("resources/assets/js/roles.index.js", "public/js")
  .sass("resources/assets/sass/roles.index.scss", "public/css")
  // permissions
  .js("resources/assets/js/permissions.index.js", "public/js")
  .sass("resources/assets/sass/permissions.index.scss", "public/css")
  // assign-roles
  .js("resources/assets/js/assign-roles.index.js", "public/js")
  .sass("resources/assets/sass/assign-roles.index.scss", "public/css")
  // products
  .js("resources/assets/js/products.index.js", "public/js")
  .sass("resources/assets/sass/products.index.scss", "public/css")
  // autoload
  // .autoload({
  //   jquery: ['$','jQuery'],
  // })
  // extract
  .extract([
    "axios",
    "bootstrap",
    "datatables.net",
    // "datatables.net-bs4",
    "datatables.net-colreorder",
    // "datatables.net-colreorder-bs4",
    "datatables.net-fixedcolumns",
    // "datatables.net-fixedcolumns-bs4",
    "datatables.net-select",
    // "datatables.net-select-bs4",
    "file-saver",
    "holderjs",
    "jquery",
    "jquery-mousewheel",
    "lodash",
    "moment",
    "papaparse",
    "popper.js",
    "select2",
    // "select2-bootstrap-theme",
    // "spinkit",
    "sweetalert2",
    "vee-validate",
    "vee-validate/dist/locale/zh_TW",
    "vue",
    "vuex"
  ]);

if (mix.inProduction()) {
  mix.sourceMaps();
  mix.version();
}

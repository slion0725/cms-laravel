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
  // autoload
  // .autoload({
  //   jquery: ['$','jQuery'],
  // })
  // extract
  .extract([
    "lodash",
    "moment",
    "jquery",
    "popper.js",
    "bootstrap",
    "vue",
    "vuex",
    "vee-validate",
    "vee-validate/dist/locale/zh_TW",
    "flatpickr",
    "flatpickr/dist/plugins/rangePlugin",
    "flatpickr/dist/l10n/zh",
    "@ckeditor/ckeditor5-build-classic",
    "select2",
    "holderjs"
  ]);

if (mix.inProduction()) {
  mix.sourceMaps();
  mix.version();
}

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
  // dashboard
  .js("resources/assets/js/dashboard.js", "public/js")
  .sass("resources/assets/sass/dashboard.scss", "public/css")
  // accounts
  .js("resources/assets/js/accounts.js", "public/js")
  .sass("resources/assets/sass/accounts.scss", "public/css")
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

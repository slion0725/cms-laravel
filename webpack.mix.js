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
  .js("resources/assets/js/login.js", "public/js")
  .sass("resources/assets/sass/login.scss", "public/css")
  .extract([
    "lodash",
    "moment",
    "jquery",
    "popper.js",
    "bootstrap",
    "vue",
    "vee-validate",
    "vee-validate/dist/locale/zh_TW",
    "flatpickr",
    "flatpickr/dist/plugins/rangePlugin",
    "flatpickr/dist/l10n/zh",
    "@ckeditor/ckeditor5-build-classic",
    "select2",
    // "urijs",
    "holderjs"
  ]);

if (mix.inProduction()) {
  mix.sourceMaps();
  mix.version();
}

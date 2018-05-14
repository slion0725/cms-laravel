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
  .js("resources/assets/js/index.js", "public/js")
  .sass("resources/assets/sass/index.scss", "public/css")

  .js("resources/assets/js/login.js", "public/js")
  .sass("resources/assets/sass/login.scss", "public/css")

  .js("resources/assets/js/table.js", "public/js")
  .sass("resources/assets/sass/table.scss", "public/css")

  .extract([
    // 'lodash', 'moment',
    "@mdi/font/scss/materialdesignicons.scss",
    "jquery",
    "popper.js",
    "bootstrap"
  ]);

if (mix.inProduction()) {
  mix.sourceMaps();
  mix.version();
}

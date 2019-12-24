const mix = require('laravel-mix')
const { CleanWebpackPlugin } = require('clean-webpack-plugin');

require('laravel-mix-tailwind')

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

mix
  .js('resources/js/app.js', 'public/js')
  .sass('resources/sass/app.scss', 'public/css')
  .copyDirectory('resources/public', 'public/')
  .tailwind('tailwind.config.js')
  .webpackConfig({
    plugins: [
      new CleanWebpackPlugin()
    ]
  })

// if (mix.inProduction()) {
//   mix.options({
//     purifyCss: true,
//   })
// }

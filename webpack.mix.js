const mix = require('laravel-mix');
require('@tinypixelco/laravel-mix-wp-blocks');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Sage application. By default, we are compiling the Sass file
 | for your application, as well as bundling up your JS files.
 |
 */

mix
  .setPublicPath('./public')
  .browserSync('127.0.0.1:8080');

mix
  .sass('resources/styles/app.scss', 'styles')
  .sass('resources/styles/editor.scss', 'styles')
  // Gutenberg blocks
  .sass('resources/styles/blocks/section-title.scss', 'styles/blocks')
  .sass('resources/styles/blocks/offer-item.scss', 'styles/blocks')
  .sass('resources/styles/blocks/push-diag.scss', 'styles/blocks')
  .sass('resources/styles/blocks/button.scss', 'styles/blocks')
  .sass('resources/styles/blocks/show-all.scss', 'styles/blocks')
  .sass('resources/styles/blocks/expertise-item.scss', 'styles/blocks')
  .sass('resources/styles/blocks/reinsurance-item.scss', 'styles/blocks')
  .sass('resources/styles/blocks/query-list.scss', 'styles/blocks')
  .sass('resources/styles/blocks/contact-form.scss', 'styles/blocks')
  .sass('resources/styles/blocks/job-item.scss', 'styles/blocks')
  .sass('resources/styles/blocks/floating-image.scss', 'styles/blocks')
  // Modules
  .sass('resources/styles/modules/project-item.scss', 'styles/modules')
  .sass('resources/styles/modules/article-item.scss', 'styles/modules')

mix
  .js('resources/scripts/app.js', 'scripts')
  .js('resources/scripts/customizer.js', 'scripts')
  .blocks('resources/scripts/editor.js', 'scripts')
  .autoload({ jquery: ['$', 'window.jQuery'] })
  .extract();

mix
  .copyDirectory('resources/images', 'public/images')
  .copyDirectory('resources/fonts', 'public/fonts');

mix
  .sourceMaps()
  .version();

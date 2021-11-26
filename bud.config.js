/**
 * @typedef {import('@roots/bud').Bud} Bud
 *
 * @param {Bud} config
 */

module.exports = async (config) =>
  config
    /**
     * Application entrypoints
     *
     * Paths are relative to your resources directory
     */
    .entry({
      app: ['scripts/app.js', 'styles/app.scss'],
      editor: ['scripts/editor.js', 'styles/editor.scss'],
      customizer: 'scripts/customizer.js',
      // Blocks
      'section-title': 'styles/blocks/section-title.scss',
      'offer-item': 'styles/blocks/offer-item.scss',
      //'push-diag': 'styles/blocks/push-diag.scss',
      'button': 'styles/blocks/button.scss',
      //'show-all': 'styles/blocks/show-all.scss',
      'expertise-item': 'styles/blocks/expertise-item.scss',
      'reinsurance-item': 'styles/blocks/reinsurance-item.scss',
      //'query-list': 'styles/blocks/query-list.scss',
      'contact-form': 'styles/blocks/contact-form.scss',
      'job-item': 'styles/blocks/job-item.scss',
      'floating-image': 'styles/blocks/floating-image.scss',
      'text-image': 'styles/blocks/text-image.scss',
      'quote': 'styles/blocks/quote.scss',

      // Modules
      //'project-item': 'styles/modules/project-item.scss',
      //'article-item': 'styles/modules/article-item.scss',
    })

    /**
     * These files should be processed as part of the build
     * even if they are not explicitly imported in application assets.
     */
    .assets(['images/**/*.{png,gif,jpg,svg}'])

    .use([
      require('@roots/bud-postcss'),
      require('@roots/bud-sass'),
    ])

    /**
     * These files will trigger a full page reload
     * when modified.
     */
    .watch([
      'tailwind.config.js',
      'resources/views/*.blade.php',
      'app/View/**/*.php',
    ])

    /**
     * Target URL to be proxied by the dev server.
     *
     * This is your local dev server.
     */
    .proxy({target: 'http://example.test'});

let mix = require('laravel-mix');

const project = require('./assets/js/utils/project-config');

mix.webpackConfig({
    externals: {
        'jquery': 'jQuery',
    }
});

if (project.proxy) {
    mix.browserSync({
        proxy: project.proxy,
        injectChanges: false,
        open: false,
        files: [
            '*.{php,css}',
            'dist/**/*.{css,js}',
            'inc/**/*.php',
            'plugins/**/*.php',
            'templates/**/*.php',
            'template-parts/**/*.php',
        ]
    });
}

mix.options({
    // cssNano: false,
    manifest: false,
    processCssUrls: false,
    postCss: [
        require('tailwindcss'),
    ]
});
mix.setPublicPath('.');

// theme assets
mix.js('assets/js/app.js', 'dist/js');
mix.sass('assets/scss/style.scss', '.');

if (project.plugins) {
    // build scripts, styles and copy assets for prepacked plugins
    for (const name in project.plugins) {
        const plugin = project.plugins[name];
        const styles = plugin.styles || {};
        const scripts = plugin.scripts || {};
        const assets = plugin.assets || {};

        // build scripts
        for (const from in scripts) {
            mix.js(from, scripts[from]);
        }

        // build styles
        for (const from in styles) {
            mix.sass(from, styles[from]);
        }

        // copy assets
        for (const from in assets) {
            mix.copy(from, assets[from]);
        }
    }
}

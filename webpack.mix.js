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

// additional-features
mix.js('assets/js/additional-features.js', 'dist/additional-features/js');
mix.sass('assets/scss/additional-features.scss', 'dist/additional-features/css');

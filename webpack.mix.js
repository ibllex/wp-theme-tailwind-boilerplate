let mix = require('laravel-mix');

const local = require('./assets/js/utils/local-config');

mix.webpackConfig({
    externals: {
        'jquery': 'jQuery',
    }
});

if (local.proxy) {
    mix.browserSync({
        proxy: local.proxy,
        injectChanges: true,
        open: false,
        files: [
            '*.php',
            'dist/**/*.{css,js}',
            'inc/**/*.php',
            'templates/**/*.php',
            'template-parts/**/*.php',
        ]
    });
};

mix.options({
    // cssNano: false,
    manifest: false,
    processCssUrls: false,
    postCss: [
        require('tailwindcss'),
    ]
});
mix.setPublicPath('.');

mix.js('assets/js/app.js', 'dist/js');
mix.sass('assets/scss/style.scss', '.');

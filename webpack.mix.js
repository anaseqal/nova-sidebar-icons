let mix = require('laravel-mix')

mix.setPublicPath('dist')
    .sass('resources/sass/tool.scss', 'css')

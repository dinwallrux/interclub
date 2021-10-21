const mix = require('laravel-mix');

mix.postCss('resources/css/theme.css', 'dist/css', [
	require('tailwindcss'),
	require('postcss-nested')
])
.options({
	processCssUrls: false
})
.sass('resources/scss/style.scss', 'dist/css')
.js('resources/js/main.js', 'dist/js');
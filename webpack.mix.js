const mix = require('laravel-mix');

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

mix.js('resources/js/vue-tailwind.js', 'public/js')
   .postCss('resources/css/tailwind.css', 'public/css',[
       require('tailwindcss')
   ])
   .options({
       autoprefixer:{
           options:{
               browsers:[
                   "last 5 versions",
               ]
           }
       }
   })
   .setPublicPath('public');
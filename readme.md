##Probando Laravel

--------------------------------
Material Design - Instalacion
--------------------------------
npm install -g bower
te ubicas dentro de la carpeta public de Laravel
bower init
name:
version:
description:
main file: globals
authors:
licences: MIT
homepage: homestead.app
bower install bootstrap --save
bower install bootstrap-material-design --save
-------------------------------
en el app.blade.php
-------------------------------
{!! Html::style('bower_components/bootstrap/dist/css/bootstrap.min.css') !!}
{!! Html::style('bower_components/bootstrap-material-design/dist/css/material.min.css') !!}
{!! Html::style('bower_components/bootstrap-material-design/dist/css/ripples.min.css') !!}
{!! Html::style('bower_components/bootstrap-material-design/dist/css/material-wfont.min.css') !!}
<!--<link href="{{ asset('/css/app.css') }}" rel="stylesheet">-->
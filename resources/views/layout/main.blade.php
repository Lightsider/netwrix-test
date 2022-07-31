<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ __('Netwrix Test') }}{{ !empty($title) ? " - ".$title : '' }}</title>
        @vite('resources/css/scss/main.scss')
    </head>
    <body class="body">
        @yield('content')
        @vite('resources/js/app.js')
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('Netwrix Test') }}{{ !empty($title) ? " - ".$title : '' }}</title>
    <link rel="stylesheet" href="{{ mix('css/main.css') }}">
</head>
<body>
    <div class="body" id="app">
        @yield('content')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

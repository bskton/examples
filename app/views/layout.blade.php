<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{ $title }}</title>

        @section('styles')
        {{ HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css') }}
        {{ HTML::style(URL::asset('styles/base.css')) }}
        @show
    </head>
    <body>
        @yield('main')

        @section('scripts')
        {{ HTML::script('//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js') }}
        @show
    <body>
</html>

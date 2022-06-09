    <!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>The University of Bamenda</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link rel="icon" type="image/png" href="{{ asset('images/ubaicon.png') }}">
    </head>

    <body>
        @section('navbar')
            @include('includes/header')
        @show

        <!-- hero section -->
        @section('hero')
            @include('includes/hero')
        @show

        <!--  @yield('other-content') -->
        @yield('content');

        @section('footer')
            @include('includes/footer')
        @show

        <script src="{{ asset('js/styles.js') }}"></script>
    </body>

    </html>

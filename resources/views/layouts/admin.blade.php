</html>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UBaweb | Admin</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>

    @auth
        @section('navbar')
            @include('includes/admin-header')
        @show
    @endauth

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @section('sidebar')
                @show
            </div>
            <div class="col-md-9">
                @include('includes/messages')
                @yield('content')
            </div>
        </div>
    </div>

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('post-body');

    </script>
    <script src="{{ asset('js/styles.js') }}"></script>
</body>

</html>

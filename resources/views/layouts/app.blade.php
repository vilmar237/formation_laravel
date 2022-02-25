<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> Mon super site </title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
<body>
    @include('partials.nav')
    apprentissage laravel
    <div class="container mx-auto">
    @yield('content')
    </div>
    
    <script src="{{ asset('js/app.js') }}">

    </script>
</body>
</html>
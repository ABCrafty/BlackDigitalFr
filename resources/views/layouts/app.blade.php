<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- metas -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <title>
        @yield('title')
            Black-Digitalfr
        @show
     </title>


    <!-- styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

</head>
<body>
    <header id="header" role="banner">
         @include('layouts.partials._nav')
    </header>
    
    <main role="main">
        @yield('content')
    </main>

    <footer>
        @include('layouts.partials._footer')
    </footer>
    

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
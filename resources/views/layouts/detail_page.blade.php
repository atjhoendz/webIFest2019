<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {!! MaterializeCSS::include_full() !!}
    <title>IFest 2019</title>
    <link rel="icon" href="{{url('img/favicon-32x32.png')}}" type="image/png" sizes="32x32">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
</head>
<body>
    <header>
        @include('partials.header')
    </header>
    
    <main> 
        @yield('main') 
    </main>
    
    <footer class="page-footer blue darken-4"> 
        @include('partials.footer') 
    </footer>
    <script src="{{url('js/home.js')}}"></script>
</body>
</html>
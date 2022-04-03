<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super Gestão - @yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
      
      @include('site.layouts._partials.topo')
      @yield('content')

    <body>
    </body>
</html>
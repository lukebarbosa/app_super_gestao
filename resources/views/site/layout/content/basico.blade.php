<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Gestão - @yield('titulo')</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
@include('site.layout.header.header')
@yield('conteudo')
</body>
</html>

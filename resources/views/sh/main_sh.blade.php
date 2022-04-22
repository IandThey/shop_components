<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="ДВ">
    <meta name="description" content="Сварка">
    <meta name="description" content="Грузы">
    <meta name="description" content="Сертекс">
    <meta name="Keywords" content="Сертекс ДВ">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
    @include('module_sh.dop_header')
    @include('module_sh.header')
    @include('module_sh.basket')
    @yield('content')
    @include('module_sh.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/jquery.js"></script>
    <script src="js/app.js"></script>
</body>
</html>
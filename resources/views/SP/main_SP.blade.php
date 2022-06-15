<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Комплектующие, магазин, компьютер, купить, заказать">
    <meta name="description" content="TQYES сайт созданный для покупки комплектующих, сотрудничает с множеством компаний которые поставляют технику в кратчайшие сроки"> 
    <meta http-equiv="content-type" content="text/html; charset=windows-1251">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <title>@yield('title')</title>
</head>
<body>

    @include('module_SP.header')
    @include('module_SP.module_alert')
    @include('module_SP.register_block')
    @yield('content')
    @include('module_SP.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="js/jquery.js"></script>
<script src="js/app.js"></script>
</body>
</html>
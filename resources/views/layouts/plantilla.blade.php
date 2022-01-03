<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>@yield('title')</title>
</head>
<body class="bg-gray-100 flex bg-local"  style="background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/architect.svg')">

    @yield('content')


</body>
</html>
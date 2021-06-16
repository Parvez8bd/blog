<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Blog</title>

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    @section('header')
        <h1>Master header area.</h1>
    @show

    @section('main')
        <h1>Master main area.</h1>
    @show

    @section('footer')
        <h1>Master footer area.</h1>
    @show
    
</body>
</html>
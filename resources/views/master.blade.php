<!DOCTYPE html>
<html lang="en">
<head>
    @include('partial.head')

    <title>@yield('title') | Blog</title>

    @stack('style')
</head>
<body>
    
    @include('partial.nav', ["item" => $menu])

    @section('header')
        <h1>Master header area.</h1>
    @show

    @section('main')
        <h1>Master main area.</h1>
    @show

    @section('footer')
        <h1>Master footer area.</h1>
    @show
    
    @stack('scripts')
</body>
</html>
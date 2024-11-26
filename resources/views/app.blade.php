<!DOCTYPE html>
<html lang="zh-Hant">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title','HomePage')</title>
        <link rel="stylesheet" href="/css/app/css">
    </head>
 <body class="antitaliased">
    @include('header')
    <div class="content">
        @yield('table')
    </div>
    @include('footer')
 </body> 
</html>
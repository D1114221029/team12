<!DOCTYPE html>
<html lang="zh-Hant">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
    </head>
 <body class="antitaliased">
    <div class="content">
        @include('data.header')
        @yield('sdgs_content')
        @include('data.footer')
    </div>
 </body> 
</html>
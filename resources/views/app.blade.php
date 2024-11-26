<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', '全國公務人員數案機關分類')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            background-color: #000000;
            color: white;
        }
        section {
            background: #000000;
            color: white;
            padding: 20px;
            margin: 20px auto;
            max-width: 1000px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #000000;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #1f1c1c;
            color: white;
        }
        tr:hover {
            background-color: #ffffff;
            color: rgb(0, 0, 0);
        }
    </style>
    @stack('styles')
</head>
<body>
    @include('header')
    <div class="content">
        @yield('agencystatistics_contents')
    </div>
    @include('footer') 
</body>
</html>

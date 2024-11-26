<!DOCTYPE html>
<html lang="zh-Hant">
@extends('app')
@section('agencystatistics_contents')
    <section>
        <table>
            <thead>
                 <tr>
                    <th>編號</th>
                    <th>機關類別</th>
                    <th>總計(人)</th>
                    <th>政務人員</th>
                    <th>簡任(派)</th>
                    <th>薦任(派)</th>
                    <th>委任(派)</th>
                    <th>平均年齡(歲)</th>
                    <th>平均年資(年)</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($obervations as $observation)
                    <tr>
                        <td>{{$observation->id}}</td>
                        <td>{{$observation->agency_type}}</td>
                        <td>{{$observation->total_count}}</td>
                        <td>{{$observation->government_officials}}</td>
                        <td>{{$observation->simple_appointees}}</td>
                        <td>{{$observation->recommended_appointees}}</td>
                        <td>{{$observation->commissioned_appointees}}</td>
                        <td>{{$observation->average_age}}</td>
                        <td>{{$observation->average_seniority}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
<!--
板模配置前
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', '全國公務人員數案機關分類')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            /*background-color: #f4f4f4;*/
            background-color: #000000
        }
        header {
            background: #5c5858;
            color: #fff;
            padding: 20px;
            text-align: center;
            font-size: 24px;
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
            background-color: #774aa1;
            color: white;
        }
    </style>
</head>
<body>
    <header>
        全國公務人員數案機關分類
    </header>
    <section>
        <table>
            <thead>
                <tr>
                    <th>編號</th>
                    <th>機關類別</th>
                    <th>總計(人)</th>
                    <th>政務人員</th>
                    <th>簡任(派)</th>
                    <th>薦任(派)</th>
                    <th>委任(派)</th>
                    <th>平均年齡(歲)</th>
                    <th>平均年資(年)</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($obervations as $observation)
                    <tr>
                        <td>{{$observation->id}}</td>
                        <td>{{$observation->agency_type}}</td>
                        <td>{{$observation->total_count}}</td>
                        <td>{{$observation->government_officials}}</td>
                        <td>{{$observation->simple_appointees}}</td>
                        <td>{{$observation->recommended_appointees}}</td>
                        <td>{{$observation->commissioned_appointees}}</td>
                        <td>{{$observation->average_age}}</td>
                        <td>{{$observation->average_seniority}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</body>
</html>
-->

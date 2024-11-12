<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>全國公務人員數案機關分類</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            background-color: #f4f4f4;
        }
        header {
            background: #007bff;
            color: #fff;
            padding: 20px;
            text-align: center;
            font-size: 24px;
        }
        section {
            background: #fff;
            padding: 20px;
            margin: 20px auto;
            max-width: 1000px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            font-size: 28px;
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
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
                    <th>其他</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($obervations as $observation)
                    <tr>
                        <td>{{$observation->id}}</td>
                        <td>{{$observation->agency_type}}</td>
                        <td>{{$observation->total_count}}</td>
                        <td>按鈕預定</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
</body>
</html>
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
            margin: 20px;
            background-color:#f4f4f4;
        }
        header {
            background: #007bff;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        section {
            background: #fff;
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #007bff;
           }
    </style>
</head>
<body>
    <h1>全國公務人員數案機關分類</h1>
    <section>
        <legend>
            <fieldset>全國公務人員數案機關分類</fieldset>
            <th colspan="1">機關類別</th>
            <th colspan="1">總計(人)</th>
            @foreach ($obervations as $observation)
                <table border="0">
                    <tr>
                        <td colspan="1">{{$observation->agency_type}}</td>
                        <td colspan="1">{{$observation->total_count}}</td>
                    </tr>
                </table>
            @endforeach
        </legend>
    </section>
</body>

</html>
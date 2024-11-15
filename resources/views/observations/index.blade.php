<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>全國公務人員數</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">全國公務人員數按機關分類</h1>

        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">機關類型</th>
                        <th scope="col">總人數</th>
                        <th scope="col">政務人員</th>
                        <th scope="col">簡任職人員</th>
                        <th scope="col">薦任職人員</th>
                        <th scope="col">委任職人員</th>
                        <th scope="col">平均年齡</th>
                        <th scope="col">平均年資</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($observations as $observation)
                        <tr>
                            <td>{{ $observation->agency_type }}</td>
                            <td>{{ $observation->total_people }}</td>
                            <td>{{ $observation->political_staff }}</td>
                            <td>{{ $observation->senior_rank_staff }}</td>
                            <td>{{ $observation->recommended_rank_staff }}</td>
                            <td>{{ $observation->appointed_rank_staff }}</td>
                            <td>{{ $observation->average_age }}</td>
                            <td>{{ $observation->average_seniority }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
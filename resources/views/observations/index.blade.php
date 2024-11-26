@extends('app')
@section('table')
<section>
        <table>
            <thead>
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
</body>
</html>
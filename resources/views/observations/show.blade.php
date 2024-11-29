@extends('app')
@section('table')
        <table>
                <tr>
                    <th>機關類型</th>
                    <th>總人數</th>
                    <th>政務人員</th>
                    <th>簡任職人員</th>
                    <th>薦任職人員</th>
                    <th>委任職人員</th>
                    <th>平均年齡</th>
                    <th>平均年資</th>
                    <th>操作1</th>
                    <th>操作2</th>
                    <th>操作3</th>
                </tr>

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
        </table>
@endsection
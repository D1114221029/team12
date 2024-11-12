<!DOCTYPE html>
<html>
    <head>
        <title>全國公務人員數案機關分類</title>
    </head>
    <body>
        <h1>全國公務人員數案機關分類</h1>
        @foreach ($observations as $observation)
            <table class="table table-striped table-hover">
                <tr>
                    <td>{{$observation->agency_type}}</td>
                    <td>{{$observation->total_people}}</td>
                    <td>{{$observation->political_staff}}</td>
                    <td>{{$observation->senior_rank_staff}}</td>
                    <td>{{$observation->recommended_rank_staff}}</td>
                    <td>{{$observation->appointed_rank_staff}}</td>
                    <td>{{$observation->average_age}}</td>
                    <td>{{$observation->average_seniority}}</td>
                </tr>
            </table>
        @endforeach
    </body>

</html>
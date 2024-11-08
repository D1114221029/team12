<!DOCTYPE html>
<html>
    <head>
        <title>全國公務人員數案機關分類</title>
    </head>
    <body>
        <h1>全國公務人員數案機關分類</h1>
        @foreach ($observations as $observation)
            <table border="1">
                <tr>
                    <tb>{{$observation->agency_type}}</tb>
                    <tb>{{$observation->total_count}}</tb>
                </tr>
            </table>
        @endforeach
    </body>

</html>
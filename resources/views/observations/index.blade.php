@extends('app')

@section('table')
 <a href={{ route('observations.create') }}> 新增資料</a>
<style>
        #customers 
        {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        #customers td, #customers th 
        {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #000000;}

        #customers tr:hover {background-color: #000000;}

         #customers th 
         {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
        body
        {
            background-color: rgb(175, 175, 176);
        }
</style>
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
                    <td><a href="{{ route('observations.show', ['id' => $observation->id]) }}">顯示</a></td>
                    <td><a href="{{ route('observations.edit', ['id' => $observation->id]) }}">編輯</a></td>
                    <td>
                        <form action="{{ url('observations/delete',['id' => $observation->id]) }}" method="post">
                            <input class="btn " type="submit" value="刪除" />
                            @method('delete')
                            @csrf
                        </form>
                </tr>
            @endforeach
        </table>
@endsection
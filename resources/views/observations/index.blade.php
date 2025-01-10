@extends('app')

@section('table')
    <!-- 檢查使用者是否已登入，且電子郵件不是 'user@example.com' 或 'manager@example.com' -->
    @auth
        @if (Auth::user()->email !== 'user@example.com' && Auth::user()->email !== 'manager@example.com')
            <!-- 如果使用者不是 'user@example.com' 或 'manager@example.com'，顯示新增資料的超連結 -->
            <a href="{{ route('observations.create') }}">新增資料</a>
        @endif
    @endauth

    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }
        #customers tr:nth-child(even) {background-color: #f2f2f2;}
        #customers tr:hover {background-color: #ddd;}
        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
        body {
            background-color: rgb(175, 175, 176);
        }
    </style>

    <table id="customers">
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

                @can('admin')
                    <td><a href="{{ route('observations.edit', ['id' => $observation->id]) }}">編輯</a></td>
                    <td>
                        <form action="{{ url('observations/delete',['id' => $observation->id]) }}" method="post">
                            <input class="btn " type="submit" value="刪除" />
                            @method('delete')
                            @csrf
                        </form>
                    </td>
                @elsecan('manager')
                    <td><a href="{{ route('observations.edit', ['id'=>$observation->id]) }}">修改</a></td>
                @endcan
            </tr>
        @endforeach
    </table>
@endsection

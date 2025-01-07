@extends('app')
@section('agencystatistics_contents')
<section>
    <table>
        <thead>
            <tr>
                <th>編號</th>
                <th>機關類別</th>
                <th>總計(人)</th>
                <th>平均年齡(歲)</th>
                <th>平均年資(年)</th>
                <th>操作1</th>
                <th>操作2</th>
                <th>操作3</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($obervations as $observation)
                @auth
                    <tr>
                        <td>{{$observation->id}}</td>
                        <td>{{$observation->agency_type}}</td>
                        <td>{{$observation->total_count}}</td>
                        <td>{{$observation->average_age}}</td>
                        <td>{{$observation->average_seniority}}</td>
                        <td><a href="{{route('observations.show',['id'=>$observation->id])}}">顯示</a></td>
                        @can('admin')
                            <td><a href="{{route('observations.edit',['id'=>$observation->id])}}">修改</a></td>
                            <td>
                                <form action="{{url('/observations/delete',['id'=> $observation->id])}}"method="post">
                                    <input class="btn" type="submit" value="刪除"/>
                                    @method('delete')
                                    @csrf
                                </form>
                            </td>
                        @elsecan('manager')
                            <td><a href="{{route('observations.edit',['id'=>$observation->id])}}">修改</a></td>
                        @endcan
                    </tr>
                @endauth
            @endforeach
        </tbody>
    </table>
</section>
@endsection
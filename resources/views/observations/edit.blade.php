@extends('app')
@section('title', '全國公務人員數案機關分類表單')
@section('agencystatistics_contents')

{!! Form::model($observation,['method'=>'PATCH','action'=>['\App\Http\Controllers\AgencyStatisticsController@update',$observation->id]]) !!}
    @include('observations.form',['submitButtonText'=>"修改資料"])
{!! Form::close() !!}
@endsection
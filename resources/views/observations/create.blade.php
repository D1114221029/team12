@extends('app')
@section('title', '全國公務人員數案機關分類表單')
@section('agencystatistics_contents')

{!! Form::open(['url'=>'observations/store']) !!}
    @include('observations.form',['submitButtonText'=>"新增資料"])
{!! Form::close() !!}
@endsection
@extends('app')

@section('table')
 
編輯特定一筆表單

{!! Form::model($observation,['method'=>'PATCH', 'route'=>['observations.update', $observation->id]]) !!}
    @include('observations.form',['submitButtonText'=>"修改資料"])
{!! Form::close() !!}
@endsection
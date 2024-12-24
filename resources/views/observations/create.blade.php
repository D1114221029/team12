@extends('app')

@section('table')
 
新增表單

{!! Form::open(['url' => 'observations/store']) !!}
   @include('observations.form',['submitButtonText'=>"新增資料"])     
{!! Form::close() !!}

@endsection
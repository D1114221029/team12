@extends('app')
@section('title', '全國公務人員數案機關分類表單')
@section('agencystatistics_contents')

{!! Form::open(['url'=>'observations/store']) !!}
    <div class="form-group">
        {!! Form::label('agency_type','機關類別')!!}
        {!! Form::text('agency_type',null,['class'=>'form-control','required' => 'required'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('total_count','總計(人)')!!}
        {!! Form::number('total_count',null,['class'=>'form-control', 'step' => '1', 'required' => 'required'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('government_officials','政務人員')!!}
        {!! Form::number('government_officials',null,['class'=>'form-control', 'step' => '1', 'required' => 'required'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('simple_appointees','簡任(派)')!!}
        {!! Form::number('simple_appointees',null,['class'=>'form-control', 'step' => '1', 'required' => 'required'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('recommended_appointees','薦任(派)')!!}
        {!! Form::number('recommended_appointees',null,['class'=>'form-control', 'step' => '1', 'required' => 'required'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('commissioned_appointees','委任(派)')!!}
        {!! Form::number('commissioned_appointees',null,['class'=>'form-control', 'step' => '1', 'required' => 'required'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('average_age','平均年齡(歲)')!!}
        {!! Form::number('average_age',null,['class'=>'form-control', 'step' => '0.01', 'required' => 'required'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('average_seniority','平均年資(年)')!!}
        {!! Form::number('average_seniority',null,['class'=>'form-control', 'step' => '0.01', 'required' => 'required'])!!}
    </div>
    <div class="form-group">
        {!! Form::submit("新增資料",['class'=>'btn form-control']) !!}
    </div>
{!! Form::close() !!}
@endsection
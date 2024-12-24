@extends('app')
@section('title', '全國公務人員數案機關分類表單')
@section('agencystatistics_contents')

{!! Form::open(['url'=>'observations/update']) !!}
    <div class="form-group">
        {!! Form::label('agency_type','機關類別')!!}
        {!! Form::text('agency_type',$observation->agency_type,['class'=>'form-control','required' => 'required'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('total_count','總計(人)')!!}
        {!! Form::number('total_count',$observation->total_count,['class'=>'form-control', 'step' => '1', 'required' => 'required'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('government_officials','政務人員')!!}
        {!! Form::number('government_officials',$observation->government_officials,['class'=>'form-control', 'step' => '1', 'required' => 'required'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('simple_appointees','簡任(派)')!!}
        {!! Form::number('simple_appointees',$observation->simple_appointees,['class'=>'form-control', 'step' => '1', 'required' => 'required'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('recommended_appointees','薦任(派)')!!}
        {!! Form::number('recommended_appointees',$observation->recommended_appointees,['class'=>'form-control', 'step' => '1', 'required' => 'required'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('commissioned_appointees','委任(派)')!!}
        {!! Form::number('commissioned_appointees',$observation->commissioned_appointees,['class'=>'form-control', 'step' => '1', 'required' => 'required'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('average_age','平均年齡(歲)')!!}
        {!! Form::number('average_age',$observation->average_age,['class'=>'form-control', 'step' => '0.01', 'required' => 'required'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('average_seniority','平均年資(年)')!!}
        {!! Form::number('average_seniority',$observation->average_seniority,['class'=>'form-control', 'step' => '0.01', 'required' => 'required'])!!}
    </div>
    <div class="form-group">
        {!! Form::submit("修改資料",['class'=>'btn form-control']) !!}
    </div>
{!! Form::close() !!}
@endsection
<div class="form-group">
    {!! Form::label('agency_type','機關類別:') !!}
    {!! Form::text('agency_type',null, ['class' => 'form-control']) !!}
 </div>
 <div class="form-group">
    {!! Form::label('total_people','總計人數:') !!}
    {!! Form::text('total_people',null, ['class' => 'form-control']) !!}
 </div>
 <div class="form-group">
    {!! Form::label('political_staff','政務人員數量:') !!}
    {!! Form::text('political_staff',null, ['class' => 'form-control']) !!}
 </div>
 <div class="form-group">
    {!! Form::label('senior_rank_staff','簡任(派)人員數量:') !!}
    {!! Form::text('senior_rank_staff',null, ['class' => 'form-control']) !!}
 </div>
 <div class="form-group">
    {!! Form::label('recommended_rank_staff','薦任(派)人員數量:') !!}
    {!! Form::text('recommended_rank_staff',null, ['class' => 'form-control']) !!}
 </div>
 <div class="form-group">
    {!! Form::label('appointed_rank_staff','委任(派)人員數量:') !!}
    {!! Form::text('appointed_rank_staff',null, ['class' => 'form-control']) !!}
 </div>
 <div class="form-group">
    {!! Form::label('average_age','平均年齡:') !!}
    {!! Form::text('average_age',null, ['class' => 'form-control']) !!}
 </div>
 <div class="form-group">
    {!! Form::label('average_seniority','平均年資:') !!}
    {!! Form::text('average_seniority',null, ['class' => 'form-control']) !!}
 </div>
 <div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
 </div>
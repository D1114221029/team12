@extends('app')

@section('agencystatistics_contents')
    <h1>編輯觀察資料</h1>
    <form action="{{ route('observations.update', ['id' => $observation->id]) }}" method="post">
        @csrf
        @method('PUT')
        
        <label for="agency_type">機關類別</label>
        <input type="text" name="agency_type" value="{{ $observation->agency_type }}">
        
        <label for="total_count">總計(人)</label>
        <input type="number" name="total_count" value="{{ $observation->total_count }}">
        
        <label for="average_age">平均年齡</label>
        <input type="number" name="average_age" value="{{ $observation->average_age }}">
        
        <label for="average_seniority">平均年資</label>
        <input type="number" name="average_seniority" value="{{ $observation->average_seniority }}">
        
        <button type="submit">更新</button>
    </form>
@endsection

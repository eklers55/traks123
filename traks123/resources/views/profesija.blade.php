@extends('layouts.master')
@section('content')
        <p>Pievienot profesiju: </p>
        {!! Form::open(['action' => 'ProfesijaController@store', 'method' => 'POST']) !!}
        {!! Form::label('Ievadi profesiju:') !!}
        {!! Form::text('nosaukums', '', ['class' => 'form-control', 'placeholder' => 'Profesijas nosaukums']) !!}
        {!! Form::submit('Saglabāt!', ['class' => 'btn btn-info']) !!}
        {!! Form::close() !!} 
@endsection
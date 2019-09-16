@extends('layouts.master')
@section('content')
        {!! Form::open(['action' => 'AtalgojumsController@store', 'method' => 'POST']) !!}
        {!! Form::label('Izvēlies savu profesiju:') !!}
        {!! Form::select('nosaukums', $profesija, null, ['class' => 'form-control']) !!}
        {!! Form::label('Izvēlies savu darba vietu:') !!}
        {!! Form::select('uznemums', $darbavieta, null, ['class' => 'form-control']) !!}
        {!! Form::label('Ievadi savu bruto(uz papīra) atalgojumu:') !!}
        {!! Form::text('alga', '', ['class' => 'form-control', 'placeholder' => '1000']) !!}
        {!! Form::submit('Saglabāt!', ['class' => 'btn btn-info']) !!}
        {!! Form::close() !!}
@endsection        

@extends('layouts.master')
@section('content')
        <p>Pievienot profesiju: </p>
        {!! Form::open(['action' => 'DarbavietaController@store', 'method' => 'POST']) !!}
        {!! Form::label('Ievadi darba vietu:') !!}
        {!! Form::text('uznemums', '', ['class' => 'form-control', 'placeholder' => 'Uznemums']) !!}
        {!! Form::label('Ievadi darba vietas adresi:') !!}
        {!! Form::text('adrese', '', ['class' => 'form-control', 'placeholder' => 'Adrese']) !!}
        {!! Form::submit('Saglabāt!', ['class' => 'btn btn-info']) !!}
        {!! Form::close() !!} 
@endsection
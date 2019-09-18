@extends('layouts.master')
@section('content')
        <p>Pievienot darbavietu: </p>
        {!! Form::open(['action' => 'DarbavietaController@store', 'method' => 'POST']) !!}
        @csrf
        {!! Form::label('Ievadi darba vietu:') !!}
        {!! Form::text('uznemums', '', ['class' => 'form-control', 'placeholder' => 'Uznemums']) !!}
        {!! Form::label('Ievadi darba vietas adresi:') !!}
        {!! Form::text('adrese', '', ['class' => 'form-control', 'placeholder' => 'Adrese']) !!}
        {!! Form::submit('Saglabāt!', ['class' => 'btn btn-info']) !!}
        {!! Form::close() !!} 
        <br>
        
        
@endsection
@extends('layouts.master')
@section('content')
<p>Apskati vidējo algu profesijā! </p>
{!! Form::open(['action' => 'VidProfesijaController@store', 'method' => 'POST']) !!}
{!! Form::label('Izvēlies profesiju :') !!}
{!! Form::select('nosaukums', $profesija, null, ['class' => 'form-control']) !!}
{!! Form::submit('Parādīt vidējo algu profesijā!', ['class' => 'btn btn-info']) !!}
{!! Form::close() !!} 
@endsection
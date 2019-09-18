@extends('layouts.master')
@section('content')

<p>Apskati vidējo algu uzņēmumā! </p>
{!! Form::open(['action' => 'VidDarbavietaController@store', 'method' => 'POST']) !!}
@csrf
{!! Form::label('Izvēlies uzņēmumu:') !!}
{!! Form::select('uznemums', $darbavieta, null, ['class' => 'form-control']) !!}
{!! Form::submit('Parādīt vidējo algu uzņēmumā!', ['class' => 'btn btn-info']) !!}
{!! Form::close() !!} 
@endsection
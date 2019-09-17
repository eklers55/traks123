@extends('layouts.master')
@section('content')



@foreach($vidprofesija as $key => $value)
 
        {!! $value->nosaukums !!}
        {!! $value->alga !!}

@endforeach
@endsection
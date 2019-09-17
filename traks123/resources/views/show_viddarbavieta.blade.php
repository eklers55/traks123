@extends('layouts.master')
@section('content')



@foreach($viddarbavieta as $key => $value)
 
        {!! $value->uznemums !!}
        {!! $value->alga !!}

@endforeach
@endsection
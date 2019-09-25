@extends('layouts.master')
@section('content')
@if (Auth::user()->admin == 1)



@else
<h1> Saturs nav pieejams! </h2>
@endif
@endsection

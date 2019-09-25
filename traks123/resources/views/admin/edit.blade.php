@extends('layouts.master')
@section('content')
@if (Auth::user()->admin == 1)

<div class='col-lg-4 col-lg-offset-4'>
    <h1><i class='fa fa-user'></i> Labot Lietotāju</h1>

    {{ Form::model($user, ['role' => 'form', 'url' => '/admin/' . $user->id, 'method' => 'PUT']) }}

    <div class='form-group'>
        {{ Form::label('name', 'Vards') }}
        {{ Form::text('name', null, ['placeholder' => 'vards', 'class' => 'form-control']) }}
    </div>

    <div class='form-group'>
        {{ Form::label('email', 'E-pasts') }}
        {{ Form::email('email', null, ['placeholder' => 'E-pasts', 'class' => 'form-control']) }}
    </div>

    <div class='form-group'>
        {{ Form::label('password', 'Parole') }}
        {{ Form::password('password', ['placeholder' => 'Parole', 'class' => 'form-control']) }}
    </div>

    <div class='form-group'>
        {{ Form::label('password_confirmation', 'Apstiprināt paroli') }}
        {{ Form::password('password_confirmation', ['placeholder' => 'Apstiprināt paroli', 'class' => 'form-control']) }}
    </div>

    <div class='form-group'>
        {{ Form::submit('Labot', ['class' => 'btn btn-primary']) }}
    </div>

    {{ Form::close() }}

</div>

@else
<h1> Saturs nav pieejams! </h2>
@endif
@endsection

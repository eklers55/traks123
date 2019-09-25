@extends('layouts.master')
@section('content')
@if (Auth::user()->admin == 1)

<div class="col-lg-10 col-lg-offset-1">

    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>Vārds</th>
                    <th>E-pasts</th>
                    <th>Pievienošanās datums</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                    <td>
                        <a href="/admin/{{ $user->id }}/edit" class="btn btn-info pull-left" style="margin-right: 3px;">Labot</a>
                        {{ Form::open(['url' => '/admin/' . $user->id, 'method' => 'DELETE']) }}
                        {{ Form::submit('Dzēst', ['class' => 'btn btn-danger'])}}
                        {{ Form::close() }}
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

</div>

@else
<h1> Saturs nav pieejams! </h2>
@endif
@endsection

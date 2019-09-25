@extends('layouts.master')
@section('content')

        {!! Form::open(['action' => 'AtalgojumsController@store', 'method' => 'POST']) !!}
        @csrf
        {!! Form::label('Izvēlies savu profesiju:') !!}
        {!! Form::select('nosaukums', $profesija, null, ['class' => 'form-control']) !!}
        {!! Form::label('Izvēlies savu darba vietu:') !!}
        {!! Form::select('uznemums', $darbavieta, null, ['class' => 'form-control']) !!}
        {!! Form::label('Ievadi savu bruto(uz papīra) mēneša atalgojumu:') !!}
        {!! Form::text('alga', '', ['class' => 'form-control', 'placeholder' => '1000']) !!}
        {!! Form::submit('Saglabāt!', ['class' => 'btn btn-info']) !!}
        {!! Form::close() !!}
        <br>
        <p> Izdzēst savu atalgojumu: </p>
        @foreach ($atalgojums as $atalgojumsid)         
        {!! $atalgojumsid->alga !!}
        <form action="/atalgojums/{{ $atalgojumsid->id }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
    
                <button>Dzēst</button>
            </form>
            
        @endforeach

@endsection        

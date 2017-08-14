@extends('layouts.app')

@section('content')

    <h3>Create Album</h3>

    {!! Form::open([
                   'action' => 'AlbumsController@store',
                   'method' => 'POST'
                   ]) !!}
    {{ Form::bsText('name', '', ['placeholder' => 'Album Name']) }}
    {{ Form::bsText('description', '', ['placeholder' => 'Album Description']) }}
    {{ Form::file('Cover Image') }}
    {{ Form::bsSubmit('submit') }}

    {!! Form::close() !!}

@endsection
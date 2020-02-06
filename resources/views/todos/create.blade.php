@extends('layouts.app')

@section('content')
    <h2>Create Todo</h2>
    {!! Form::open(['url' => 'foo/bar']) !!}
    {{ Form::bsText('first_name') }}
    {!! Form::close() !!}

@endsection
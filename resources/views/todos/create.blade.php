@extends('layout.app')

@section('content')
    <h2>Create Todo</h2>
    {!! Form::open(['url' => 'foo/bar']) !!}
    //
    {!! Form::close() !!}

@endsection
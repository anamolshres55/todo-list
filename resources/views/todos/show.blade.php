@extends('layouts.app')

@section('content')

    <a href="/" class="btn btn-default"> Go Back</a>

    <h2><a href="todo/{{$todo->id}}">{{$todo->text}}</a></h2>
    <div class="label label-danger">{{$todo->due}}</div>
    <hr>
    <p>{{$todo->body}}</p>

@endsection
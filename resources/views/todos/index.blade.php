@extends('layouts.app')

@section('content')

    <h1>Todos</h1>

    @if(count($todos) > 0 )

    @foreach($todos as $todo)
    <div class="well">
        <h4><a href="todo/{{$todo->id}}">{{$todo->text}}</a></h4>
        <div class="label label-danger">{{$todo->due}}</div>
    </div>

    @endforeach

    @endif

@endsection
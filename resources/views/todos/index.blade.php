@extends('layouts.app')

@section('content')

    <h1>Todos</h1>

    @if(count($todoss) > 0 )

    @foreach($todoss as $todo)
    <div class="well">
        <h4>{{$todo->text}} <span class="label label-danger">{{$todo->due}}</span></h4>
            
    </div>

    @endforeach

    @endif

@endsection
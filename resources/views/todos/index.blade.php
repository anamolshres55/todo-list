<h1>Todos</h1>

@if(count($todoss) > 0 )

@foreach($todoss as $todo)
<div class="well">
    <h3>{{$todo->text}}</h3>
        <span class="label label-danger">{{$todo->due}}</span>
</div>

@endforeach

@endif
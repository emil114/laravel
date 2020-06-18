@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Tilbage til alle post</a>
    <h1>{{$post->pris}}</h1>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Oprettet af {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}

        @endif
    @endif
@endsection

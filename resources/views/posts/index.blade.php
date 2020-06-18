@extends('layouts.app')

@section('content')
    <h1>Alle oprettede ejendomme her</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                <h3><a href="/posts/{{$post->id}}">{{$post->body}}</a></h3>
                <small>Oprettet af {{$post->user->name}} </small>

            </div>

        @endforeach

    @else
        <p>Ingen posts fundet</p>
    @endif
@endsection

<a href="/home" class="btn btn-default">Tilbage til Dashboard</a>

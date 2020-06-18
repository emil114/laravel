@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('pris', 'pris')}}
        {{Form::text('pris', $post->pris, ['class' => 'form-control', 'placeholder' => 'pris'])}}
    </div>
    <div class="form-group">
        {{Form::label('adresse', 'adresse')}}
        {{Form::text('adresse', $post->adresse, ['class' => 'form-control', 'placeholder' => 'adresse'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
    </div>
    <div class="form-group">
        {{Form::file('cover_image')}}
    </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection

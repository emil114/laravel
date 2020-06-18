@extends('layouts.app')


@section('content')
    <h1>Opret din ejendom her</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('pris', 'pris')}}
        {{Form::text('pris', '', ['class' => 'form-control', 'placeholder' => 'pris'])}}
    </div>
    <div class="form-group">
        {{Form::label('adresse', 'adresse')}}
        {{Form::text('adresse', '', ['class' => 'form-control', 'placeholder' => 'adresse'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
    </div>
    <div class="form-group">
        {{Form::file('cover_image')}}
    </div>
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection


<a href="/home" class="btn btn-default">Tilbage til Dashboard</a>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <a href="/posts/create" class="btn btn-default">Opret din ejendom her</a>
                        <a href="/posts" class="btn btn-default">Alle oprettede ejendomme her</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

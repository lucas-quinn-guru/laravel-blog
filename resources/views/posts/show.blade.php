@extends('layouts.default.master')

@section('titlePage', 'View Post')

@section('content')

<div class="container">
    {{ Breadcrumbs::render('sitetronic-posts-show', $post) }}
    <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
    <div class="card-body">
        <h2 class="card-title">{{ $post->title }}</h2>
        <p class="card-text">{{ $post->body }}</p>
    </div>
</div>

@endsection

@extends('layouts.default.master')

@section('content')
    <div class="container">
        {{ Breadcrumbs::render('sitetronic-posts-index' ) }}
        @foreach( $posts as $post)
            <div class="card mb-4">
                <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-title">{{ $post->title }}</h2>
                    <p class="card-text">{!! $post->body !!}</p>
                    <a href="{{ route('posts.show', $post->id ) }}" class="btn btn-primary">Read More &rarr;</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection

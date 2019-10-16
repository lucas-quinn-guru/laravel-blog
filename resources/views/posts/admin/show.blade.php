@extends('layouts.default.master')

@section('titlePage', 'View Post')

@section('content')

<div class="container">
    {{ Breadcrumbs::render('sitetronic-posts-admin-show', $post) }}
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>{{ $post->title }}</h1>
            <hr>
            <p class="lead">{!! $post->body !!}</p>
            <hr>
            {!! Form::open(['method' => 'DELETE', 'route' => ['admin.posts.destroy', $post->id] ]) !!}
            <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
            @can('Edit Post')
            <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-info" role="button">Edit</a>
            @endcan
            @can('Delete Post')
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            @endcan
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection

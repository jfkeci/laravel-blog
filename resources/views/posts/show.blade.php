@extends('layouts.app')

@section('content')

    <a class="btn btn-default" href="/posts">Go back</a>

    <br>
    <br>

    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    <hr>
    <small>Written on: {{ $post->created_at }}</small>
    <hr>

    @if (!Auth::guest())
        @if (Auth::user()->id == $post->user_id)
            <a href="/posts/{{ $post->id }}/edit" class="btn btn-default"> Edit </a>
            {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
            {!! Form::close() !!}
        @endif
    @endif
@endsection

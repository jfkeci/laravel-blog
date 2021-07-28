@extends('layouts.app')

@section('content')

    <h1>Posts</h1>


    @if (count($posts) > 0)
        <div class="card">
            <ul class="list-group list-group-flash">
                @foreach ($posts as $post)
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-4">
                                <img style="width:100%" src="/storage/cover_images/{{ $post->cover_image }}"
                                    alt="/storage/cover_images/noimage.jpeg" class="">
                            </div>
                            <div class="col-md-4">
                                <a href="/posts/{{ $post->id }}">
                                    <h3>{{ $post->title }}</h3>
                                </a>
                                <small>Written on: {{ $post->created_at }}</small>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    @else

    @endif



@endsection

@extends('layouts.app')

@section('content')

<h1>Posts</h1>


@if(count($posts)>1)
<div class="card">
    <ul class="list-group list-group-flash">
        @foreach($posts as $post)
        <li class="list-group-item">
            <a href="/posts/{{$post->id}}">
                <h3>{{$post->title}}</h3>
            </a>
            <small>Written on: {{$post->created_at}}</small>
        </li>
        @endforeach
    </ul>
</div>
@else

@endif



@endsection
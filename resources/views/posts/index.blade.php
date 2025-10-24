@extends('layouts.app')

@section('content')
    <h2>All Posts</h2>

    @if($posts->isEmpty())
        <p>No posts yet.</p>
    @else
        <ul>
            @foreach($posts as $post)
                <li>
                    <strong>{{ $post->title }}</strong> — {{ $post->author }}
                </li>
            @endforeach
        </ul>
    @endif
@endsection

@extends('layout')

@section('content')
    @foreach ($posts as $post)
        <article>
            <h1>
                <a href="posts/{{ $post->id }}">
                    {{ $post->title }}
                </a>
            </h1>
            <p>
                <a href="#"> {{ $post->category->name }}</a>
            </p>
            <div>
                <p>
                    {{ $post->excerpt }}
                </p>
            </div>
        </article>
        <a href="/">Go back</a>
    @endforeach
@endsection

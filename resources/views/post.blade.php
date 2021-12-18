@extends('layout')
@section('content')
    <article>
        <?= $post->title ?>
        <div>
            <p>{!! $post->body !!} </p>
        </div>
    </article>
    <a href="/">Go back</a>
@endsection

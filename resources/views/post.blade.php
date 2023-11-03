@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
        <p> By. <a href="">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">  {{ $post->category->name }} </a></p>
        <p> {!! $post->body !!}</p>
    </article>
    <a href="/blog" class="d-block text-decoration-none "> Back to post</a>
@endsection
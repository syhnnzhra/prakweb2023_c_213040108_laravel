@extends('layouts/main')

@section('container')
    <article class="mb-5">
        @foreach($posts as $p)
        <h2><a href="/posts/{{ $p['slug'] }}">{{ $p["title"] }}</a></h2>
        <h5>By : {{ $p["author"] }}</h5>
        <p>{{ $p["body"] }}</p>
        @endforeach
    </article>
@endsection
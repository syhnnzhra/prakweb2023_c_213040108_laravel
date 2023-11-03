@extends('layouts/main')

@section('container')
    <article class="mb-5">
        @foreach($posts as $p)
        <h2><a href="/posts/{{ $p->slug }}">{{ $p->title }}</a></h2>
        <p>{{ $p->excerpt }}</p>
        @endforeach
    </article>
@endsection
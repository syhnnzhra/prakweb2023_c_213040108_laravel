@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <article>
                    <h2>{{ $post->title }}</h2>
                    <p> By. <a href="/posts?author{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/blog?category={{ $post->category->slug }}">  {{ $post->category->name }} </a></p>
                    
                    @if($post->image)
                        <div style="max-height: 350px; overflow:hidden;">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                        </div>
                        @else
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
                    @endif

                    <article class="my-3">
                        {!! $post->body !!}
                    </article>
                </article>
                <a href="/blog" class="d-block text-decoration-none mb-5"> Back to post</a>
            </div>
        </div>
    </div>
@endsection
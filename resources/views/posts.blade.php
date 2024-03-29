@extends('layouts/main')

@section('container')
    <h2 class="text-center mb-3">{{ $title }}</h2>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/blog">
                @if (request('category'))
                 <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                 <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if($posts->count())
        <div class="card mb-3">
            @if($posts[0]->image)
                <div style="max-height: 350px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid">
                </div>
                @else
                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
            @endif
            <div class="card-body text-center">
                <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
                <p> <small class="text-body-secondary"> By. <a href="/blog?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a href="/blog?category={{ $posts[0]->category->slug }}" class="text-decoration-none">  {{ $posts[0]->category->name }} </a> {{ $posts[0]->created_at->diffForHumans() }} </small></p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary"> Read More</a>
            </div>
        </div>
        
        
        <div class="container">
            <div class="row">
                @foreach($posts->skip(1) as $p)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="position-absolute bg-dark px-3 py-2 text-white" style="background-color: rgba(0,0,0,0.7);">
                            <a href="/blog?category={{ $p->category->slug }}" class="text-white text-decoration-none">{{ $p->category->name }}</a>
                        </div>
                        @if($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                        @else
                        <img src="https://source.unsplash.com/500x300?{{ $p->category->name }}" class="card-img-top" alt="{{ $p->category->name }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $p->title }}</h5>
                            <p> <small class="text-body-secondary"> By. <a href="/blog?author={{ $p->author->username }}">{{ $p->author->name }}</a> {{ $p->created_at->diffForHumans() }} </small></p>
                            <p class="card-text">{{ $p->excerpt }}</p>
                            <a href="/posts/{{ $p->slug }}" class="btn btn-primary">Read More ...</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @else
        <p class="text-center fs-4">No Post Found.</p>
        @endif

        <div class="d-flex justify-content-end">
            {{ $posts->links() }}
        </div>
@endsection
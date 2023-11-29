@extends('dashboard.layouts.main')

@section('container')
<div class="container">
        <div class="row my-3">
            <div class="col-lg-10">
                <article>
                    <h2>{{ $post->title }}</h2>
                    <a href="/dashboard/posts" class="btn btn-success mb-2"> <i class="bi bi-arrow-left"></i> Back to my posts</a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Edit</a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')">
                        <i class="bi bi-x-circle"></i>
                        Delete
                        </button>
                    </form>
                    @if($post->image)
                        <div style="max-height: 350px; overflow:hidden;">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                        </div>
                        @else
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                    @endif

                    <article class="my-3">
                        {!! $post->body !!}
                    </article>
                </article>
            </div>
        </div>
</div>
@endsection
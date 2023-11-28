@extends('dashboard.layouts.main')

@section('container')
<div class="container">
        <div class="row my-3">
            <div class="col-lg-10">
                <article>
                    <h2>{{ $post->title }}</h2>
                    <a href="/dashboard/posts" class="btn btn-success mb-2"> <i class="bi bi-arrow-left"></i> Back to my posts</a>
                    <a href="" class="btn btn-warning mb-2"> <i class="bi bi-arrow-pencil"></i> Edit</a>
                    <a href="" class="btn btn-danger mb-2"> <i class="bi bi-arrow-trash3"></i> Delete</a>
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">

                    <article class="my-3">
                        {!! $post->body !!}
                    </article>
                </article>
            </div>
        </div>
</div>
@endsection
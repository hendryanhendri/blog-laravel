@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2 class="mb-3">{{ $post->title }}</h2>
  
                <p>Created by : <a class="text-decoration-none" href="/post?author={{ $post->author->username }}">{{ $post->author->name  }}</a> in <a class="text-decoration-none" href="/post?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">

                <article class="my-3 fs-6">

                {!! $post->body !!}

                </article>
                <a href="/post" class="btn btn-primary">Back to Post</a>


        </div>
    </div>

</div>


@endsection

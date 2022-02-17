@extends('layouts.main')

@section('container')
<h3 class="mb-3 text-center">{{ $title }}</h3>


<div class="row justify-content-center mb-3">
  <div class="col-md-6">
    <form action="/post">
       @if (request('category'))
       <input type="hidden" name="category" value="{{ request('category') }}">

      @endif

      @if (request('author'))
      <input type="hidden" name="author" value="{{ request('author') }}">
         
     @endif
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search...." name="search" value="{{ request('search') }}">
        <button class="btn btn-outline-primary" type="submit" >Search</button>
      </div>
    </form>
  </div>
</div>

@if ($post->count())
<div class="card mb-5">
  <img src="https://source.unsplash.com/1200x400?{{ $post[0]->name }}" class="card-img-top" alt="{{ $post[0]->name }}">
  <div class="card-body text-center">
    <h3 class="card-title"><a href="/post/{{ $post[0]->slug }}" class="text-decoration-none text-dark">{{ $post[0]->title }}</a></h3>
    <p>
      <small class="text-muted">by : <a class="text-decoration-none" href="/post?author={{  $post[0]->author->username }}">{{  $post[0]->author->name }}</a> in 
        <a class="text-decoration-none" href="/post?category={{  $post[0]->category->slug }}">{{  $post[0]->category->name }}</a> {{ $post[0]->created_at->diffForHumans() }}
      </small>
  </p>
    <p class="card-text">{{ $post[0]->excerpt }}</p>
    <a class="text-decoration-none" href="/post/{{ $post[0]->slug }}"><small class="text-decoration-none btn btn-primary">Read more</small></a>
  </div>
</div>

<div class="container">
  <div class="row">
    @foreach ($post->skip(1) as $a)
    <div class="col-md-4 mb-3">
      <div class="card">
        <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)">
          <a class="text-decoration-none text-white" href="/post?category={{ $a->category->slug }}">{{ $a->category->name }}</a></div>
        <img src="https://source.unsplash.com/500x400?{{ $a->category->name }}" class="card-img-top" alt="{{ $a->category->name }}">
        <div class="card-body">
          <h5 class="card-title">{{ $a->title}}</h5>
          <p>
            <small class="text-muted">by : <a class="text-decoration-none" href="/post?author={{  $a->author->username }}">{{  $a->author->name }}</a> </p> {{ $a->created_at->diffForHumans() }}
            </small>
        </p>
          <p class="card-text">{{ $a->excerpt}}</p>
          <a href="/post/{{ $a->slug }}" class="btn btn-primary">Read More</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

@else
  <p class="text-center fs-4">No post found.</p>
@endif

@endsection


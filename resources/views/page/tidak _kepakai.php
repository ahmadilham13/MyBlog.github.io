@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $posts->title }}</h1>

            <p>By. <a href="/blog?author={{ $posts->author->username }}">{{ $posts->author->name }}</a> in <a href="/blog?category={{ $posts->category->slug }}">{{ $posts->category->name }}</a></p>
            @if ($posts->image)
                <div style="max-height: 350px; overflow: hidden;">
                    <img src="{{ asset('storage/' . $posts->image) }}" alt="{{ $posts->category->name }}" class="img-fluid">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $posts->category->name }}" alt="{{ $posts->category->name }}" class="img-fluid">
            @endif

            <article class="my-3 fs-5">
                {!! $posts->body !!}
            </article>
            <a href="/blog" class="mt-5">Back to Blog</a>
        </div>
    </div>
</div>

@endsection
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Blog Post</h1>
        <p>{{ $post->body }}</p>
    </div>
@endsection

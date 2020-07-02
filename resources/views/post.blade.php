@extends('layouts.app')

@section('content')
    <h1>Blog Post</h1>
    <p>{{ $post->body }}</p>
@endsection

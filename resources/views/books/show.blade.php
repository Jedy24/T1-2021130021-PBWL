@extends('layouts.template')

@section('title', $book->judul)

@section('content')
    <article class="blog-post my-4">
        <h1 class="display-5 fw-bold">{{ $book->judul }}</h1>
        <p class="display-6">{{ $book->halaman }}</p>
        <p class="display-6">{{ $book->kategori }}</p>
        <p class="display-6">{{ $book->penerbit }}</p>
        <p class="blog-post-meta">{{ $book->updated_at }}</p>
        <p>{{ $book->body }}</p>
    </article>
@endsection

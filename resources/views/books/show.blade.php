@extends('layouts.master')

@section('title')
    {{ $book->title }}
@endsection

@push('head')
    <link href='/css/books/_book.css' rel='stylesheet'>
    <link href='/css/books/show.css' rel='stylesheet'>

@endpush

@section('content')
    <h1>{{ $book->title }}</h1>

    <div class='book cf'>
        <img src='{{ $book->cover_url }}' class='cover' alt='Cover image for {{ $book->title }}'>
        <p>By {{ $book->author->getFullName() }} ({{ $book->published_year }})</p>
        <p>Added {{ $book->created_at->format('m/d/y') }}</p>

        <ul class='bookActions'>
            <li><a href='{{ $book->purchase_url }}'><i class="fas fa-shopping-cart"></i> Purchase</a>
            <li><a href='/books/{{ $book->id }}/edit'><i class="fas fa-pencil-alt"></i> Edit</a>
            <li><a href='/books/{{ $book->id }}/delete'><i class="fas fa-trash-alt"></i> Delete</a>
        </ul>
    </div>
@endsection
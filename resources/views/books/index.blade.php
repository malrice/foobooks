@extends('layouts.master')

@section('title')
    All books
@endsection

@push('head')
    <link href='/css/books/index.css' rel='stylesheet'>
    <link href='/css/books/_book.css' rel='stylesheet'>
@endpush

@section('content')


    <section id='newBooks'>
        <h2>Recently added books</h2>
        <ul>
            @foreach($newBooks as $book)
                <li>{{ $book->title }}</li>
            @endforeach
        </ul>
    </section>

    <section id='allBooks'>
        <h2>All books</h2>
        @foreach($books as $book)
            @include('books._book')
        @endforeach
    </section>
@endsection
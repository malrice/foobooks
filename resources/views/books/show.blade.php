@extends('layouts.master')

@section('title')
    {{ $book->title }}
@endsection

@push('head')
    {{-- Page specific CSS includes should be defined here; this .css file does not exist yet, but we can create it --}}
    <link href='/css/books/show.css' rel='stylesheet'>
    <link href='/css/books/_book.css' rel='stylesheet'>
@endpush

@section('content')
    <h1>{{ $book->title }}</h1>
{{--Refractor to not use the include--}}
@include('books._book')

@endsection
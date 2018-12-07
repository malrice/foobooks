@extends('layouts.master')

@section('title')
    Edit {{$book->title}}
@endsection

@section('content')

    @if(count($errors) > 0)
        <div class='alert'>
            Please correct the errors below.
        </div>
    @endif

    <form method='POST' action='/books/{{ $book->id }}'>
        {{ method_field('delete') }}
        {{ csrf_field() }}

        <h1>Are you sure you want to delete {{ $book->title }}?</h1>

        <input type='submit' value='Delete Book' class='btn btn-danger'>
    </form>
    <p class='cancel'>
    <a href='/books/{{$book->id}}'> No, I changed my mind.</a>

@endsection
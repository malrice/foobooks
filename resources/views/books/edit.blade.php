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

    <h1>Edit {{ $book->title }}</h1>

    <form method='POST' action='/books/{{ $book->id }}'>
        <div class='details'>* Required fields</div>

        {{ method_field('put') }}
        {{ csrf_field() }}

        <label for='title'>* Title</label>
        <input type='text' name='title' id='title' value='{{ old('title', $book->title) }}'>
        @include('modules.field-error', ['field' => 'title'])

        <option value=''>Choose one...</option>
        <label for='author_id'>* Author</label>
        <select name='author_id'>
            @foreach($authors as $author)
                <option value='{{$author->id}}' {{( old('author_id', $book->author->id) == $author->id) ? 'selected' :' ' }}>{{ $author->first_name. ' '. $author->last_name }}</option>
            @endforeach

        </select> @include('modules.field-error', ['field' => 'author_id'])

        <label for='published_year'>* Published Year (YYYY)</label>
        <input type='text'
               name='published_year'
               id='published_year'
               value='{{ old('published_year', $book->published_year) }}'>
        @include('modules.field-error', ['field' => 'published_year'])

        <label for='cover_url'>* Cover URL</label>
        <input type='text' name='cover_url' id='cover_url' value='{{ old('cover_url', $book->cover_url) }}'>
        @include('modules.field-error', ['field' => 'cover_url'])

        <label for='purchase_url'>* Purchase URL </label>
        <input type='text' name='purchase_url' id='purchase_url' value='{{ old('purchase_url', $book->purchase_url) }}'>
        @include('modules.field-error', ['field' => 'purchase_url'])


        <label>Tags</label>
        @foreach($tags as $tagId => $tagName)
            <ul class='tags'>
                <li>
                    <label>
                        <input
                                {{ (in_array($tagId, $tagsForThisBook)) ? 'checked' : '' }}
                                type='checkbox'
                                name='tags[]'
                                value='{{ $tagId }}'>
                        {{ $tagName }}
                    </label>
                </li>
            </ul>
        @endforeach


        <input type='submit' value='Save changes' class='btn btn-primary'>
    </form>

@endsection
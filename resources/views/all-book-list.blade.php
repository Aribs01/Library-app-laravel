@extends('layouts.master')

@section('title', 'Book list')

@section('content')
<div class="book-list-page">
    <div class="card">
        <div>
            <button>Request Books</button>
        </div>
        <div>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Genre</th>
                    <th>Actions</th>
                </tr>
                @foreach ($books ?? '' as $book)
                <tr>
                    <td>{{$book->name}}</td>
                    <td>{{$book->genre}}</td>
                    <td style="width:27%;text-align:right;">
                    <form action="/api/add-request" method="POST">
                        {{ csrf_field() }}
                        <div style="display:none;">
                            <div class="form-check col-sm-2">
                                <input type="checkbox" name="book_id" value="{{ $book->id }}" checked>
                                <label class="form-check-label" for="exampleCheck1">{{ $book->id }}</label>
                            </div>
                            <div class="form-check col-sm-2">
                                <input type="checkbox" name="book" value="{{ $book->name }}" checked>
                                <label class="form-check-label" for="exampleCheck1">{{ $book->name }}</label>
                            </div>
                        </div>

                        <div name="$book->id"></div>
                        <div name="$book->name"></div>
                        <div name="$book->genre"></div>
                        <button class="small-button">Request book</button>
                    </form>
                    </td>

                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@stop
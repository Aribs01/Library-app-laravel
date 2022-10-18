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
                    <th>Book Name</th>
                </tr>
                @foreach ($bookrequest ?? '' as $book)
                <tr>
                    <td>{{$book->book}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@stop
@extends('layouts.admin-master')

@section('title', 'Book list')

@section('content')
<div class="book-list-page">
    <div class="card">
        <div>
            <form action="/api/admin-add-book" method="POST">
            {{ csrf_field() }}
                <div class="form-group row">
                    <label for="username" class="col-2">{{ __('Book Name') }}</label>
                    <div class="col-md-3">
                        <input id="name" type="text" name="name" required autocomplete="name" autofocus>
                    </div>
                    <label for="genre" class="col-2">{{ __('Genre') }}</label>
                    <div class="col-md-3">
                        <input id="genre" type="text" name="genre" required autocomplete="genre" autofocus>
                    </div>
                </div>

                <button class="new-button">Add Books</button>
            </form>
            
        </div>
        <div style="text-align:right">
        </div>
        <br>
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

                        <button class="small-button" style="background-color:red;">Delete book</button>

                        
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@stop
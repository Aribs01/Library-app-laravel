@extends('layouts.admin-master')

@section('title', 'Book list')

@section('content')
<div class="book-list-page">
    <div class="card">
        <div>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Genre</th>
                    <th>Path</th>
                    <th>Actions</th>
                </tr>
                <tr>
                    <td>aaa</td>
                    <td>ssss</td>
                    <td>ddd</td>
                    <td style="width:27%;text-align:right;">
                        <button class="small-button">Accept request</button>
                        <button class="small-button" style="background-color:red;">Reject request</button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
@stop
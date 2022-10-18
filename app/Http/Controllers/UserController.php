<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use App\Models\User;
use App\Models\Book;
use App\Models\Request as BookRequest;

class UserController extends Controller
{
    public function userLogin() {
        return view ('user-login');
    }

    public function errorPage() {
        return view ('error');
    }

    public function userRegister() {
        return view ('user-register');
    }

    public function userDashboard() {

        $allbookscount = Book::count('id');
        $bookrequestcount = BookRequest::count('book');

        return view ('user-dashboard',[
            'allbookscount' => $allbookscount,
            'bookrequestcount' => $bookrequestcount
        ]);
    }

    public function userBookList() {
        $bookrequest = BookRequest::all();
        return view ('my-book-list',[
            'bookrequest' => $bookrequest
        ]);
    }

    public function allBookList() {
        $books = Book::all();
        return view ('all-book-list',[
            'books' => $books
        ]);
    }

    public function createRequest(Request $request) {

        $bookrequest = new BookRequest();
        $bookrequest->book_id = $request->book_id;
        $bookrequest->book = $request->book;
        $bookrequest->user_id = 1;

        $bookrequest->save();

        return redirect('/my-book-list');
    }

}

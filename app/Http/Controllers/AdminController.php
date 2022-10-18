<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use App\Models\User;
use App\Models\Book;

class AdminController extends Controller{

    public function adminDashboard() {
        $books = Book::all();
        $allbookscount = Book::count('id');
        return view ('admin/admin-dashboard', [
            'allbookscount' => $allbookscount
        ]);
    }

    public function adminBookList() {
        $books = Book::all();
        return view ('admin/admin-book-list',[
            'books' => $books
        ]);
    }

    public function adminBookRequest() {
        return view ('admin/admin-book-request');
    }

    public function createBook(Request $request) {

        $book = new Book();
        $book->name = $request->name;
        $book->genre = $request->genre;
        $book->path = $request->name;

        $book->save();

        return redirect('/admin-book-list');
    }

    public function destroy($id) {
        
        Book::delete('delete from student where id = ?',[$id]);
        // $request->delete();
        

        return redirect('/admin-book-list');
    }

}

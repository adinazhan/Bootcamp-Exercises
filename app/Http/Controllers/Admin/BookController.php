<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;

class BookController extends Controller
{
    public function index()
    {
        $listBooks = Book::limit(50)->get();
        return view('lists.book', compact('listBooks'));
    }
    public function create()
    {
        return view('book.create');
    }

    public function edit(Request $request)
    {
        $book = Book::find($request->book_id);
        return view('book.edit', compact('book'));
    }

    public function update(Request $request)
    {
        $book = Book::find($request->book_id);
        $book->title = $request->title;
        $book->publication_date = $request->publication_date;
        $book->price = $request->price;
        $book->language = $request->language;
        $book->save();

        return redirect('/');
    }


    public function store(Request $request)
    {
        $book = new Book();
        $book->title = $request->title;
        $book->publication_date = $request->publication_date;
        $book->price = $request->price;
        $book->language = $request->language;
        $book->save();
        return redirect('/');
    }
    public function latest()
    {
        // $crime_books = Book::where('category_id', 12)->orderby('publication_date', 'desc')->limit(10)->get();
        $crime_books = Book::with('authors')->orderby('publication_date', 'desc')->get();
        return $crime_books;
    }
    public function show(Request $request)
    {
        $book_detail = Book::with('reviews')->find($request->book_id);
        return view('book.show', compact('book_detail'));
    }
}

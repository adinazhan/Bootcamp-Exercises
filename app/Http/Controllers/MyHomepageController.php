<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class MyHomepageController extends Controller
{
    public function homepage()
    {
        $crime_books = Book::with('authors')->where('category_id', 12)->orderby('publication_date', 'desc')->limit(10)->get();
        $all_books = Book::with('authors')->orderby('publication_date', 'desc')->limit(10)->get();
        return view('index.index', compact('crime_books', 'all_books'));
    }
}

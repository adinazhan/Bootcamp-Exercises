<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{


    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required|max:255'
        ], [

            'text.max' => 'Maximum number of characters is 255!'
        ]);

        $review = new Review();
        $review->user_id = Auth::id();
        $review->book_id = $request->book_id;
        $review->text = $request->text;
        $review->save();
        return redirect()->route('admin.book.show', ['book_id' => $request->book_id]);
    }

    public function update(Request $request)
    {
        $review = Book::find($request->book_id);
        $review->text = $request->text;
        $review->save();
        return redirect()->route('admin.book.show', ['book_id' => $request->book_id]);
    }
}

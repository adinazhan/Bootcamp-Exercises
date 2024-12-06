<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $listAuthors = Author::limit(35)->get();
        return view('lists.author', compact('listAuthors'));
    }
    public function create()
    {
        return view('author.create');
    }
    public function store(Request $request)
    {
        $author = new Author();
        $author->name = $request->name;
        $author->slug = $request->slug;
        $author->save();
        return redirect('/');
    }
}

   @extends('layouts/main', [
   'current_page' => 'home'
   ])
   @section('content')

   <h1>Our Bookstore</h1>
   <h2>We are the best online bookstore ever.</h2>
   <h3>Our crime book selection</h3>
   @foreach ($crime_books as $book)
   <div class="book">
      Title: {{$book->title}} <br>
      Author: {{ $book->authors->pluck('name')->join(', ') }}<br>
      <img src="{{$book->image}}" alt="">
      <form action={{route("admin.book.edit", ['book_id'=>$book->id])}} method="get">
         @csrf
         <button>Edit</button>
      </form>
      <form action={{route("admin.book.show", ['book_id'=>$book->id])}} method="get">
         @csrf
         <button>Leave a review!</button>
      </form>
      <br>

   </div>
   @endforeach


   <h3>Recommended books</h3>


   @foreach ($all_books as $book)
   <div class="book">
      Title: {{$book->title}} <br>
      Author: {{ $book->authors->pluck('name')->join(', ') }}<br>
      <img src="{{$book->image}}" alt="">
      <form action={{route("admin.book.edit", ['book_id'=>$book->id])}} method="get">
         @csrf
         <button>Edit</button>
      </form>
      <form action={{route("admin.book.show", ['book_id'=>$book->id])}} method="get">
         @csrf
         <button>Leave a review!</button>
      </form>
      <br>

      <hr>
   </div>
   @endforeach
   @endsection

   @vite("resources/js/script.js")
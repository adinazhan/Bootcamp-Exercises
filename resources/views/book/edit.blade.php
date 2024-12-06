@extends ('layouts.main', ['current_page'=>'edit book'])
@section ('content')


<h1>Edit book:</h1>


<form action={{route('admin.book.update')}} method="post">
    @csrf
    <input type="hidden" name="book_id" value="{{ old('book_id', $book->id) }}">
    Book Title: <input type="text" name="title" value="{{ old('title', $book->title) }}">
    Publication Date : <input type="text" name="publication_date" value="{{ old('publication_date', $book->publication_date) }}">
    Price: <input type="text" name="price" value="{{ old('price',$book->price) }}">
    Language: <input type="text" name="language" value="{{ old('language',$book->language) }}">
    <button type="submit">Submit</button>

</form>

@endsection
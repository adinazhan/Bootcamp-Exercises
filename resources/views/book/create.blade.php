@extends ('layouts.main', ['current_page'=>'create book'])
@section ('content')


<h1>Create new book:</h1>


<form action={{route('admin.book.store')}} method="post">
    @csrf
    Book Title: <input type="text" name="title" value="{{ old('title') }}">
    Publication Date : <input type="text" name="publication_date" value="{{ old('date') }}">
    Price: <input type="text" name="price" value="{{ old('price') }}">
    Language: <input type="text" name="language" value="{{ old('language') }}">
    <button type="submit">Submit</button>

</form>

@endsection
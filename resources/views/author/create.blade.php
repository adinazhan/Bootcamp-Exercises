@extends ('layouts.main', ['current_page'=>'create author'])
@section ('content')


<h1>Create new author:</h1>


<form action={{route('admin.authors.store')}} method="post">
    @csrf
    Full name: <input type="text" name="name" value="{{ old('name') }}">
    <button type="submit">Submit</button>

</form>

@endsection
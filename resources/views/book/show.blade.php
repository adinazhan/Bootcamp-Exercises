@extends ('layouts.main', ['current_page'=>'book review'])
@section('content')

<h1>{{$book_detail->title}}</h1>
<img src="{{$book_detail->image}}" alt="">



@if(Auth::check())
<p>Leave a review</p>
<form action={{route('admin.review.store', ['book_id'=>$book_detail->id])}} method="post">
    @csrf
    Review: <input type="text" name="text" value="{{ old('text') }}"> <br>
    <button type="submit">Submit</button>
</form>
@else
<p>Please login</p>
@endif

@endsection
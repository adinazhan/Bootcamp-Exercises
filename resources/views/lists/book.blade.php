<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book list</title>
</head>

<body>
    @foreach ($listBooks as $book )


    <li> {{$book->title}}</li>

    @endforeach
</body>

</html>
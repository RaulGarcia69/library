<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @forelse ($authors as $author)
        <p>{{$author->name}}</p>
        <p>{{$author->email}}</p>
    @empty
        <h1>Esta vació</h1>
    @endforelse
</body>
</html>
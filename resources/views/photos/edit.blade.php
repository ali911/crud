<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Form</title>
</head>
<body>
    {{-- {{ $photo }} --}}
    <h2><a href="/">Photos</a></h2>

    <form method="POST" action="/photos/{{ $photo->id }}">
        @csrf
        @method('PATCH')
        <input type="text" name="name" value="{{ $photo->name }}">
        <button>Submit</button>
    </form>

</body>
</html>
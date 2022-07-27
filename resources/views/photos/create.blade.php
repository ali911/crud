<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Photo</title>
</head>
<body>
    <form method="POST" action="/photos">
        @csrf
        <input type="text" name="name" placeholder="Add photo" />
        <button>Submit</button>
    </form>
</body>
</html>
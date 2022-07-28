<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Photo</title>
</head>
<body>
    <h1><a href="/photos">Photos</a></h1>

    <form method="POST" action="/photos" enctype="multipart/form-data">
        @csrf

        <input type="text" name="name" placeholder="Add photo" value="{{ old('name') }}" />
        <input type="file" name="file" />
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <button>Submit</button>
    </form>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categories</title>
</head>
<body>
    <h1>Categorias</h1>
    <ul>
        @foreach($categories as $categorie)
            <li>{{ $categorie->name }}</li>
        @endforeach
    </ul>
</body>
</html>

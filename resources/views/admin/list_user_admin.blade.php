<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List User</title>
</head>
<body>
    <h1>Perfil do Usuario</h1>
    <ul>
        <li>{{ $user->name }} - {{ $user->phone }} - {{ $user->email }} - {{ $user->observations }}</li>
    </ul>
</body>
</html>
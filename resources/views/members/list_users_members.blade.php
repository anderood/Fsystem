<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Membros Cadastrados</title>
</head>
<body>
    <h1>Membros Cadastrados</h1>
    <ul>
        @foreach($members as $member)
            <li>{{ $member->first_name }} - {{ $member->last_name }} - {{ $member->name }}</li>
        @endforeach
    </ul>
</body>
</html>

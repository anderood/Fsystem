@php use Illuminate\Support\Facades\Auth; @endphp
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios Cadastrados</title>
</head>
<body>
<h1>Usuarios Cadastrados</h1>
@if(session()->has('success'))
    Seja Bem vindo | {{ Auth::user()->name }}
@endif
<a href="{{ route('login.destroy') }}">Logout</a>
<ul>
    @foreach($users as $user)
        <li>{{ $user->name }} - {{ $user->name }} - {{ $user->name }}</li>
    @endforeach
</ul>
</body>
</html>

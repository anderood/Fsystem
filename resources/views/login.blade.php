<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    @if(session()->has('success'))
        Seja Bem Vindo | {{ \Illuminate\Support\Facades\Auth::user()->name }}
        <a href="{{ route('login.destroy') }}">Logout</a>
    @endif
    @error('error')
        <span>{{ $message }}</span>
    @enderror
    <form action="{{ route('login') }}" method="post">
        @csrf
        <label for="email">Email</label>
        <input type="email" name="email" id="" value="anderood@hotmail.com">
        <label for="password">Senha</label>
        <input type="password" name="password" id="" value="12345678">
        <button type="submit">Login</button>
    </form>
</body>
</html>

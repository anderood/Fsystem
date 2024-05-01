@php use Illuminate\Support\Facades\Auth; @endphp

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

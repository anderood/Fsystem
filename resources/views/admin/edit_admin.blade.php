@extends('layouts.layout-master')

@section('container-esquerdo')
    @include('components.lateral-esquerdo')
@endsection

@section('container-central')
    <section class="container-central">
        @include('components.errors.error')
        @include('components.successes.success')

        <h3>Atualizar Usuario</h3>
        <form action="/fsystem/users/{{$user->id}}" method="post">
            @method('put')
            @csrf
            <div>
                <label>Nome Completo:</label>
                <input type="text" name="name" value="{{ $user->name }}">
            </div>
            <div>
                <label>Telefone</label>
                <input type="text" name="phone" value="{{ $user->phone }}">
            </div>
            <div>
                <label>Data de Nascimento</label>
                <input type="text" name="dateOfBirth" value="{{ $user->dateOfBirth }}">
            </div>
            <div>
                <label>E-mail</label>
                <input type="text" name="email" value="{{ $user->email }}">
            </div>
            <div>
                <label>Observação</label>
                <input type="text" name="observations" value="{{ $user->observations }}">
            </div>
{{--            <div>--}}
{{--                <label>Senha:</label>--}}
{{--                <input type="password" name="password" value="{{ $user->password }}">--}}
{{--            </div>--}}
            <button type="submit">Atualizar</button>
        </form>
        <form action="/fsystem/users/{{$user->id}}/delete" method="post">
            @csrf
            @method('delete')
            <div class="btn-delete">
                <button type="submit">Deletar</button>
            </div>
        </form>
    </section>
@endsection

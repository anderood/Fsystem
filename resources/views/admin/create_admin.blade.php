@extends('layouts.layout-master')

@section('container-esquerdo')
    @include('components.lateral-esquerdo')
@endsection

@section('container-central')
    <section class="container-central">
        <h1>Cadastrar Usuario</h1>
        <form method="post">
            @csrf
            <div>
                <label>Nome Completo:</label>
                <input type="text" name="name" id="">
            </div>
            <div>
                <label>Telefone</label>
                <input type="text" name="phone" id="">
            </div>
            <div>
                <label>Data de Nascimento</label>
                <input type="text" name="dateOfBirth" id="">
            </div>
            <div>
                <label>E-mail</label>
                <input type="text" name="email" id="">
            </div>
            <div>
                <label>Observação</label>
                <input type="text" name="observations" id="">
            </div>
            <div>
                <label>Senha:</label>
                <input type="password" name="password" id="">
            </div>
            <button type="submit">Cadastrar</button>
        </form>
    </section>
@endsection

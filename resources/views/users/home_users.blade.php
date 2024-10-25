@extends('layouts.layout-master')

@section('container-esquerdo')
    @include('components.lateral-esquerdo')
@endsection

@section('container-central')
    <section class="container-central">
        <section class="container-central-header-botao">
            @include('components.successes.success')
            <div class="row">
                <a href="{{ route('users.create_users') }}">Novo Usuario</a>
            </div>
        </section>
        @include('components.users.list_users_admin')
    </section>
@endsection

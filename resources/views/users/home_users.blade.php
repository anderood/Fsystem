@extends('layouts.layout-master')

@section('container-esquerdo')
    @include('components.lateral-esquerdo')
@endsection

@section('container-central')
    <section class="container-central">
        @include('components.messages.index')
        <section class="container-central-header-botao">
            <div class="row">
                <a href="{{ route('users.create_users') }}">Novo Usuario</a>
            </div>
        </section>
        @include('components.users.list_users_admin')
    </section>
@endsection

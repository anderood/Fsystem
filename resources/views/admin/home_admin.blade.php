@extends('layouts.layout-master')

@section('container-esquerdo')
   @include('components.lateral-esquerdo')
@endsection

@section('container-central')
    <section class="container-central">
        <section class="container-central-header-botao">
            <div class="row">
                <a href="{{ route('admin.create_admin') }}">Novo Usuario</a>
            </div>
        </section>
        @include('components.admins.list_users_admin')
    </section>
@endsection

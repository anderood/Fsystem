@extends('layouts.layout-master')

@section('container-esquerdo')
        @include('components.lateral-esquerdo')
@endsection

@section('container-central')
    <section class="container-central">
        <section class="container-central-header-botao">
            <div class="row">
                <a href="{{ route('members.create_members') }}">Nova Transação</a>
            </div>
        </section>
        @include('components.members.list_users_members')
    </section>
@endsection

@extends('layouts.layout-master')

@section('container-esquerdo')
    <section class="container-esquerdo">
        <div class="row">
            <div class="container-esquerdo-logo">
                <h1>Financial System</h1>
            </div>
        </div>
        <div class="row">
            <div class="container-esquerdo-menu">
                <ul>
                    <li class="menu-item"><i class="fas fa-tachometer-alt"></i> <a href="#">Dashboard</a></li>
                    <li class="menu-item"><i class="fas fa-exchange-alt"></i> <a href="#">Transações</a></li>
                    <li class="menu-item"><i class="fas fa-file-alt"></i> <a href="#">Relatórios</a></li>
                    <li class="menu-item"><i class="fas fa-cog"></i> <a href="#">Configurações</a></li>
                    <li class="menu-item"><i class="fas fa-users"></i> <a href="#">Membros</a></li>
                    <li class="menu-item"><i class="fas fa-user"></i> <a href="#">Usuários</a></li>
                </ul>
            </div>

        </div>
        <div class="row">
            <div class="container-esquerdo-rodape">
                <ul>
                    <a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </ul>
            </div>
        </div>
    </section>
@endsection

@section('container-central')

    <section class="container-central">

        @include('components.central-header')

{{--        @include('components.central-balance')--}}

        @include('transactions.create_transactions')

    </section>
@endsection

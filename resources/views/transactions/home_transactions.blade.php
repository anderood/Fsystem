@extends('layouts.layout-master')

@section('container-esquerdo')
    @include('components.lateral-esquerdo')
@endsection

@section('container-central')
    <section class="container-central">
        @include('components.messages.index')
        <section class="container-central-header-botao">
            <div class="row">
                <a href="{{ route('transactions.create_transactions') }}">Nova Transação</a>
            </div>
        </section>
        @include('components.transactions.list_transactions')
    </section>
@endsection

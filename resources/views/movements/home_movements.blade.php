@extends('layouts.layout-master')

@section('container-esquerdo')
    @include('components.lateral-esquerdo')
@endsection

@section('container-central')
    <section class="container-central">
        @include('components.messages.index')
        <section class="container-central-header-botao">
            <div class="row">
                <a href="{{ route('movements.create_movements') }}">Nova Categoria</a>
            </div>
        </section>
        @include('components.movements.list_movements')
    </section>
@endsection

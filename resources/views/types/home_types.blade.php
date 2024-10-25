@extends('layouts.layout-master')

@section('container-esquerdo')
    @include('components.lateral-esquerdo')
@endsection

@section('container-central')
    <section class="container-central">
        @include('components.messages.index')
        <section class="container-central-header-botao">
            <div class="row">
                <a href="{{ route('types.create_types') }}">Novo Tipo</a>
            </div>
        </section>
        @include('components.types.list_types')
    </section>
@endsection

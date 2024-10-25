@extends('layouts.layout-master')

@section('container-esquerdo')
    @include('components.lateral-esquerdo')
@endsection

@section('container-central')
    <section class="container-central">
        @include('components.messages.index')
        <section class="container-central-header-botao">
            <div class="row">
                <a href="{{ route('origins.create_origins') }}">Nova Origem</a>
            </div>
        </section>
        @include('components.origins.list_origins')
    </section>
@endsection

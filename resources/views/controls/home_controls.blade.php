@extends('layouts.layout-master')

@section('container-esquerdo')
    @include('components.lateral-esquerdo')
@endsection

@section('container-central')
    <section class="container-central">
        <section class="container-central-header-botao">
            <div class="row">
                <a href="{{ route('controls.create_controls') }}">Novo Balanço</a>
            </div>
        </section>
        @include('components.controls.list_controls')
    </section>
@endsection

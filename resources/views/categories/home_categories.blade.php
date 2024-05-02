@extends('layouts.layout-master')

@section('container-esquerdo')
    @include('components.lateral-esquerdo')
@endsection

@section('container-central')
    <section class="container-central">
        <section class="container-central-header-botao">
            <div class="row">
                <a href="{{ route('categories.create_category') }}">Nova Categoria</a>
            </div>
        </section>
        @include('components.categories.list_categories')
    </section>
@endsection

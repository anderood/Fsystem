@extends('layouts.layout-master')

@section('container-esquerdo')
    @include('components.lateral-esquerdo')
@endsection

@section('container-central')
    <section class="container-central">
        <h1>Cria Controles</h1>
        @include('components.messages.index')
    </section>
@endsection

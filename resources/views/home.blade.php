@extends('layouts.layout-master')

@section('container-esquerdo')
    @include('components.lateral-esquerdo')
@endsection

@section('container-central')

    <section class="container-central">

        @include('components.central-header')

        @include('components.central-balance')

        @include('components.central')

    </section>
@endsection

@extends('layouts.layout-master')

@section('container-esquerdo')
        @include('components.lateral-esquerdo')
@endsection

@section('container-central')
    <section class="container-central">
        @include('components.members.list_users_members')
    </section>
@endsection

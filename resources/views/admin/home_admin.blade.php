@extends('layouts.layout-master')

@section('container-esquerdo')
   @include('components.lateral-esquerdo')
@endsection

@section('container-central')
    <section class="container-central">
        @include('components.admins.list_users_admin')
    </section>
@endsection

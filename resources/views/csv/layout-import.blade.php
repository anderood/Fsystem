@extends('layouts.layout-master')

@section('container-esquerdo')
    @include('components.lateral-esquerdo')
@endsection

@section('container-central')
    <section class="container-central">
        @include('components.errors.error')
        @include('components.successes.success')
        <h2>Importe arquivos CSV</h2>
        <form action="{{ Route('import.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="import_csv" accept=".csv">
            <input type="submit" value="Carregar CSV">
        </form>
    </section>
@endsection

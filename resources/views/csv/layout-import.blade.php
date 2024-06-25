@extends('layouts.layout-master')

@section('container-esquerdo')
    @include('components.lateral-esquerdo')
@endsection

@section('container-central')
    <section class="container-central">
        @include('components.errors.error')
        <h2>Importe arquivos CSV</h2>
        <form action="" method="post">
            @csrf
            <input type="file" name="import_csv" accept=".csv">
            <input type="submit" value="Importar CSV">
        </form>
    </section>
@endsection

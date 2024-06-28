@extends('layouts.layout-master')

@section('container-esquerdo')
    @include('components.lateral-esquerdo')
@endsection

@section('container-central')
    <section class="container-central">
        @include('components.errors.error')
        <h2>Importe arquivos CSV</h2>
        <form action="{{ Route('import') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <input type="file" name="import_csv" accept=".csv">
            <input type="submit" value="Carregar CSV">
        </form>
    </section>
@endsection

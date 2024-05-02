@extends('layouts.layout-master')

@section('container-esquerdo')
    @include('components.lateral-esquerdo')
@endsection

@section('container-central')
    <section class="container-central">
        <h1>Criar a Categoria</h1>
        <form action="" method="post">
            @csrf
            <div>
                <label>Categoria</label>
                <div>
                    <input type="text" name="name">
                </div>
            </div>
            <div>
                <label>Descrição</label>
                <div>
                    <textarea name="description" rows="4" cols="50">At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.</textarea>
                </div>
            </div>
            <button type="submit">Cadastrar</button>
        </form>
    </section>
@endsection

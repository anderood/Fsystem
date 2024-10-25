@extends('layouts.layout-master')

@section('container-esquerdo')
@include('components.lateral-esquerdo')
@endsection

@section('container-central')
    <section class="container-central">
        <h1>Cria Origins</h1>
        @include('components.messages.index')
        <form action="" method="post">
            @csrf
            <div>
                <label>Origem</label>
                <div>
                    <label>
                        <input type="text" name="name">
                    </label>
                </div>
            </div>
            <div>
                <label>Descrição</label>
                <div>
                    <label>
                        <textarea name="description" rows="4" cols="50">At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.</textarea>
                    </label>
                </div>
            </div>
            <button type="submit">Cadastrar</button>
        </form>
    </section>
@endsection

@extends('layouts.layout-master')

@section('container-esquerdo')
@include('components.lateral-esquerdo')
@endsection

@section('container-central')
    <section class="container-central">
        <h3>Cria Transações</h3>
        @include('components.errors.error')
        <form action="" method="post">
            @csrf
            <input type="hidden" name="member_id" value="1">
            <input type="hidden" name="origin_id" value="1">
            <input type="hidden" name="category_id" value="1">
            <div>
                <label>Titulo</label>
                <div>
                    <label>
                        <input type="text" name="title">
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
            <div>
                <label>Valor</label>
                <div>
                    <label>
                        <input type="text" name="amount">
                    </label>
                </div>
            </div>
            <div>
                <label>Data da Transação</label>
                <div>
                    <label>
                        <input type="text" name="date">
                    </label>
                </div>
            </div>
            <button type="submit">Cadastrar</button>
        </form>
    </section>
@endsection

@extends('layouts.layout-master')

@section('container-esquerdo')
@include('components.lateral-esquerdo')
@endsection

@section('container-central')
    <section class="container-central">
        <h3>Cria Transações</h3>
        @include('components.messages.index')
        <form action="" method="post">
            @csrf

            <div>
                <label>Titulo</label>
                <div>
                    <label>
                        <input type="text" name="title">
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
            <div>
                <label>Membros</label>
                <div>
                    <select name="member_id">
                        <option value="">Nenhum</option>
                        @foreach($members as $member)
                            <option value="{{ $member->id }}">{{ $member->first_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div>
                <label>Origem</label>
                <div>
                    <select name="origin_id">
                        @foreach($origins as $origin)
                            <option value="{{ $origin->id }}">{{ $origin->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div>
                <label>Categoria</label>
                <div>
                    <select name="movement_id">
                        @foreach($movements as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div>
                <label>Tipo</label>
                <div>
                    <select name="type_id">
                        @foreach($types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div>
                <label>Descrição</label>
                <div>
                    <label>
                        <textarea name="observations" rows="4" cols="50">At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.</textarea>
                    </label>
                </div>
            </div>
            <button type="submit">Cadastrar</button>
        </form>
    </section>
@endsection

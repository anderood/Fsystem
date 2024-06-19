@extends('layouts.layout-master')

@section('container-esquerdo')
    @include('components.lateral-esquerdo')
@endsection

@section('container-central')
    <section class="container-central">
        @include('components.errors.error')
        @include('components.successes.success')

        <h3>Atualizar Categoria</h3>
        <form action="/fsystem/categories/{{$category->id}}" method="post">
            @method('put')
            @csrf
            <div>
                <label>Titulo</label>
                <div>
                    <label>
                        <input type="text" name="name" value="{{ $category->name }}">
                    </label>
                </div>
            </div>
            <div>
                <label>Descrição</label>
                <div>
                    <label>
                        <textarea
                            name="descriptions"
                            rows="4" cols="50">
                            {{ $category->description }}
                        </textarea>
                    </label>
                </div>
            </div>
            <div class="btn-atualizar">
                <button type="submit">Atualizar</button>
            </div>
        </form>
        <form action="/fsystem/categories/{{$category->id}}/delete" method="post">
            @csrf
            @method('delete')
            <div class="btn-delete">
                <button type="submit">Deletar</button>
            </div>
        </form>
    </section>
@endsection

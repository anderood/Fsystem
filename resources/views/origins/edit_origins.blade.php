@extends('layouts.layout-master')

@section('container-esquerdo')
    @include('components.lateral-esquerdo')
@endsection

@section('container-central')
    <section class="container-central">
        @include('components.messages.index')

        <h3>Editar Origens</h3>
        <form action="{{ Route('origins.update', $origin->id ) }}" method="post">
            @method('put')
            @csrf
            <div>
                <label>Titulo</label>
                <div>
                    <label>
                        <input type="text" name="name" value="{{ $origin->name }}">
                    </label>
                </div>
            </div>
            <div>
                <label>Descrição</label>
                <div>
                    <label>
                        <textarea
                            name="description"
                            rows="4" cols="50">
                            {{ $origin->description }}
                        </textarea>
                    </label>
                </div>
            </div>
            <div class="btn-atualizar">
                <button type="submit">Atualizar</button>
            </div>
        </form>
        <form action="{{ Route('origins.delete', $origin->id ) }}" method="post">
            @csrf
            @method('delete')
            <div class="btn-delete">
                <button type="submit">Deletar</button>
            </div>
        </form>
    </section>
@endsection

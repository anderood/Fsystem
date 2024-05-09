@extends('layouts.layout-master')

@section('container-esquerdo')
@include('components.lateral-esquerdo')
@endsection

@section('container-central')
    <section class="container-central">
        <h3>Editar Transação</h3>
        @include('components.errors.error')
        <form action="/fsystem/transactions/{{$transaction->id}}" method="post">
            @method('put')
            @csrf
            <div>
                <label>Titulo</label>
                <div>
                    <label>
                        <input type="text" name="title" value="{{ $transaction->title }}">
                    </label>
                </div>
            </div>
            <div>
                <label>Valor</label>
                <div>
                    <label>
                        <input type="text" name="amount" value="{{ $transaction->amount }}">
                    </label>
                </div>
            </div>
            <div>
                <label>Data da Transação</label>
                <div>
                    <label>
                        <input type="text" name="date" value="{{ $transaction->date }}">
                    </label>
                </div>
            </div>

            <div>
                <label>Membros</label>
                <div>
                    <select name="member_id">
                        <option value="{{ isset($transaction->members) ? $transaction->members->id : 0 }}" selected>{{ isset($transaction->members) ? $transaction->members->first_name : 'Nenhum' }}</option>
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
                        <option value="{{ $transaction->origins->id }}" selected>{{ $transaction->origins->name }}</option>
                        @foreach($origins as $origin)
                            <option value="{{ $origin->id }}">{{ $origin->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div>
                <label>Categoria</label>
                <div>
                    <select name="category_id">
                        <option value="{{ $transaction->categories->id }}" selected>{{ $transaction->categories->name }}</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div>
                <label>Tipo</label>
                <div>
                    <select name="type_id">
                        <option value="{{ $transaction->types->id }}" selected >{{ $transaction->types->name }}</option>
                        @foreach($types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div>
                <label>Observação</label>
                <div>
                    <label>
                        <textarea
                            name="observations"
                            rows="4" cols="50">
                            {{ $transaction->description }}
                        </textarea>
                    </label>
                </div>
            </div>
            <div class="btn-atualizar">
                <button type="submit">Atualizar</button>
            </div>
        </form>
        <form action="/fsystem/transactions/{{$transaction->id}}/delete" method="post">
            @csrf
            @method('delete')
            <div class="btn-delete">
                <button type="submit">Deletar</button>
            </div>
        </form>
    </section>
@endsection

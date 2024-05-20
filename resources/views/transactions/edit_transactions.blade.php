@extends('layouts.layout-master')

@section('container-esquerdo')
@include('components.lateral-esquerdo')
@endsection

@section('container-central')
    <section class="container-central">
        @include('components.errors.error')
        @include('components.successes.success')

        <h3>Editar Transação</h3>
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
                        <option value="">Nenhum</option>
                        @if ( $transaction->member_id != null )
                            @foreach($members as $member)
                                <option value="{{ $transaction->members->id == $member->id ? $transaction->members->id : $member->id }}" {{ $transaction->members->id == $member->id ? 'selected' : ''}}>
                                    {{ $transaction->members->id == $member->id ? $transaction->members->first_name : $member->first_name }}
                                </option>
                            @endforeach
                        @else
                            @foreach($members as $member)
                                <option value="{{ $member->id }}">{{ $member->first_name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <div>
                <label>Origem</label>
                <div>
                    <select name="origin_id">
                        @if($transaction->origin_id != null)
                            @foreach($origins as $origin)
                                <option value="{{ $transaction->origin_id  == $origin->id ? $transaction->origin_id : $origin->id }}"
                                {{ $transaction->origin_id  == $origin->id ? 'selected' : '' }}>
                                    {{  $transaction->origin_id == $origin->id ? $transaction->origins->name : $origin->name  }}
                                </option>
                            @endforeach
                        @else
                            @foreach($origins as $origin)
                                <option value="{{ $origin->id }}">{{ $origin->name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <div>
                <label>Categoria</label>
                <div>
                    <select name="category_id">
                        @if ($transaction->category_id != null)
                            @foreach($categories as $category)
                                <option value="{{ $transaction->category_id == $category->id ? $transaction->category_id : $category->id }}"
                                    {{ $transaction->category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        @else
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <div>
                <label>Tipo</label>
                <div>
                    <select name="type_id">
                        @if($transaction->type_id != null)
                            @foreach($types as $type)
                                <option value="{{ $transaction->type_id == $type->id ? $transaction->type_id : $type->id }}"
                                {{ $transaction->type_id == $type->id ? 'selected' : '' }}>
                                    {{ $transaction->type_id == $type->id ? $transaction->types->name : $type->name  }}
                                </option>
                            @endforeach
                        @endif
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

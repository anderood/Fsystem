@extends('layouts.layout-master')

@section('container-esquerdo')
    @include('components.lateral-esquerdo')
@endsection

@section('container-central')
    <section class="container-central">
        @include('components.errors.error')
        @include('components.successes.success')

        <h3>Editar Membro</h3>
        <form action="{{ Route('members.update', $member->id) }}" method="post">
            @method('put')
            @csrf
            <div>
                <label>Primeiro Nome:</label>
                <input type="text" name="first_name" value="{{ $member->first_name }}">
            </div>
            <div>
                <label>Ultimo Nome:</label>
                <input type="text" name="last_name" value="{{ $member->last_name }}">
            </div>
            <div>
                <label>Telefone</label>
                <input type="text" name="phone" value="{{ $member->phone }}">
            </div>
            <div>
                <label>Data de Nascimento</label>
                <input type="text" name="dateOfBirth" value="{{ $member->dateOfBirth }}">
            </div>
            <div>
                <label>E-mail</label>
                <input type="text" name="email" value="{{ $member->email }}">
            </div>
            <div>
                <label>Ativo:</label>
                <select name="is_active">
                    <option value="{{ $member->is_active == 1 ? $member->is_active : 1 }}" {{ $member->is_active == 1 ? 'selected' : '' }}>Sim</option>
                    <option value="{{ $member->is_active == 0 ? $member->is_active: 0 }}" {{ $member->is_active == 0 ? 'selected' : '' }}>Não</option>
                </select>
            </div>
            <div>
                <label>Observação</label>
                <textarea name="observations" rows="4" cols="50">At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.</textarea>
            </div>

            <h2>Endereço</h2>
            <div>
                <label>CEP: </label>
                <input type="text" name="zip_code" value="{{ $member->address->zip_code }}">
            </div>
            <div>
                <label>Rua: </label>
                <input type="text" name="street" value="{{ $member->address->street }}">
            </div>
            <div>
                <label>Numero</label>
                <input type="text" name="number" value="{{ $member->address->number }}">
            </div>
            <div>
                <label>Complemento</label>
                <input type="text" name="complement" value="{{ $member->address->complement }}">
            </div>
            <div>
                <label>Bairro: </label>
                <input type="text" name="district" value="{{ $member->address->district }}">
            </div>
            <div>
                <label>Cidade: </label>
                <input type="text" name="city" value="{{ $member->address->city }}">
            </div>
            <div>
                <label>Estado</label>
                <input type="text" name="state" value="{{ $member->address->state }}">
            </div>
            <div class="btn-atualizar">
                <button type="submit">Atualizar</button>
            </div>
        </form>
        <form action="{{ Route('members.delete', $member->id) }}" method="post">
            @csrf
            @method('delete')
            <div class="btn-delete">
                <button type="submit">Deletar</button>
            </div>
        </form>
    </section>
@endsection

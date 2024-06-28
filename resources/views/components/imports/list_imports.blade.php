<div>
    <h3>Editar arquivos CSV</h3>
</div>
<div>




            @foreach($csvImports as $import)
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Titulo</th>
                <th>Valor</th>
                <th>Data</th>
                <th>Tipo</th>
                <th>Origem</th>
                <th>Movimentação</th>
                <th>Membro</th>
            </tr>
            </thead>
            <tbody>

                <form action="{{ Route('import.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                <tr>
                    <td> <input type="text" name="title" id="" value="{{ $import['title'] }}"></td>
                    <td> <input type="text" name="amount" id="" value="{{ $import['amount'] }}"></td>
                    <td> <input type="text" name="date" id="" value="{{ $import['date'] }}"></td>
                    <td>
                        <select name="type_id" id="">
                            <option value="{{$import['type_id']}}">{{$import['type_id']}}</option>
                            @foreach($allTypes as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <select name="origin_id" id="">
                            <option value="{{$import['origin_id']}}">{{$import['origin_id']}}</option>
                            @foreach($allOrigins as $origin)
                                <option value="{{ $origin->id }}">{{ $origin->name }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <select name="movement_id" id="">
                            <option value="{{$import['movement_id']}}">{{$import['movement_id']}}</option>
                            @foreach($allMovements as $movements)
                                <option value="{{ $movements->id }}">{{ $movements->name }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <select name="member_id" >
                            @foreach($allMembers as $member)
                                <option value="{{ $member->id }}">{{ $member->first_name }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <button type="submit">Salvar</button>
                    </td>
                </tr>
                </form>
            </tbody>
        </table>
            @endforeach



</div>

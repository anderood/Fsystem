<div>
    <h3>Editar arquivos CSV</h3>
</div>
<div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Valor</th>
            <th>Data</th>
            <th>Tipo</th>
            <th>Origem</th>
            <th>Movimentação</th>
            <th>Membro</th>
        </tr>
        </thead>
        <tbody>

        @foreach($csvImports as $import)
            <tr>
                <td> {{ $import[0] }}</td>
                <td> {{ $import[1] }}</td>
                <td> {{ $import[2] }}</td>
                <td> {{ $import[3] }}</td>
                <td> {{ $import[4] }}</td>
                <td> {{ $import[5] }}
                    <select name="teste" id="">
                        <option value="item">Entrada</option>
                        <option value="item">Saida</option>
                    </select>
                </td>
                <td>Nenhum
                    <select name="teste" id="">
                        <option value="item">Fulano1</option>
                        <option value="item">Fulano2</option>
                    </select>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

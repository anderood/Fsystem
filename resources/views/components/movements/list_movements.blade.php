<div>
    <h3>Categorias</h3>
</div>
<div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Categoria</th>
            <th>Descrição</th>
            <th>Editar</th>
        </tr>
        </thead>
        <tbody>

        @foreach($movements as $movement)
            <tr>
                <td> {{ $movement->name }}</td>
                <td> {{ $movement->description }}</td>
                <td><a href="{{ Route('movements.edit', $movement->id) }}">Editar</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<div>
    <h3>Tipos</h3>
</div>
<div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Tipo</th>
            <th>Descrição</th>
            <th>Editar</th>
        </tr>
        </thead>
        <tbody>

        @foreach($types as $type)
            <tr>
                <td> {{ $type->name }}</td>
                <td> {{ $type->description }}</td>
                <td><a href="/fsystem/types/{{$type->id}}">Editar</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

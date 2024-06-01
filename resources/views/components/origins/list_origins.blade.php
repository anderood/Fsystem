<div>
    <h3>Origens</h3>
</div>
<div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Titulo</th>
            <th>Descrição</th>
            <th>Editar</th>
        </tr>
        </thead>
        <tbody>

        @foreach($origins as $origin)
            <tr>
                <td> {{ $origin->name }}</td>
                <td> {{ $origin->description }}</td>
                <td><a href="/fsystem/origins/{{$origin->id}}">Editar</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

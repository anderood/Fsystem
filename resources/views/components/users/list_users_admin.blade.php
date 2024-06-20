<div>
    <h3>Usuarios</h3>
</div>
<div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Editar</th>
        </tr>
        </thead>
        <tbody>

        @foreach($users as $user)
            <tr>
                <td> {{ $user->name }}</td>
                <td> {{ $user->phone }}</td>
                <td> {{ $user->email }}</td>
                <td><a href="{{ Route('users.edit', $user->id) }}">Editar</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

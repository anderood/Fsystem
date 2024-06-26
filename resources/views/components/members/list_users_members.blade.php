<div>
    <h3>Membros Cadastrados</h3>
</div>
<div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Aniversario</th>
            <th>Editar</th>
        </tr>
        </thead>
        <tbody>
        @foreach($members as $member)
            <tr>
                <td> {{ $member->getFullName() }}</td>
                <td> {{ $member->phone }}</td>
                <td> {{ $member->email }}</td>
                <td> {{ $member->dateOfBirth }}</td>
                <td><a href="{{ Route('members.edit', $member->id ) }}">Editar</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

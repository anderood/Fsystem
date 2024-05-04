<div>
    <h3>Transações</h3>
</div>
<div>
    <input type="search" name="" id="">
    <button type="submit">Pesqsuisar</button>
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
        </tr>
        </thead>
        <tbody>

        @foreach($transactions as $transaction)
            <tr>
                <td> {{ $transaction->title }}</td>
                <td> {{ $transaction->amount }}</td>
                <td> {{ $transaction->date }}</td>
                <td> {{ $transaction->member_id }}</td>
                <td> </td>
                <td> {{ $transaction->categories->name }}</td>
                <td><a href="#">Editar</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

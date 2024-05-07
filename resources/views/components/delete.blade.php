<form action="/fsystem/transactions/{{$transaction->id}}/delete" method="post">
    @csrf
    @method('delete')
    <button type="submit">Deletar</button>
</form>

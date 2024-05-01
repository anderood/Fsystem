<h2>Transações</h2>
<ul>
    @foreach($transactions as $transaction)
        <li>{{$transaction->title}} - {{$transaction->description}}</li>
    @endforeach
</ul>

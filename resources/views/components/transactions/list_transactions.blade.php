<h1>Transações</h1>
<ul>
    @foreach($transactions as $transaction)
        <li>{{$transaction->title}} - {{$transaction->description}}</li>
    @endforeach
</ul>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transactions</title>
</head>
<body>
    <h1>Transações</h1>
    <ul>
        @foreach($transactions as $transaction)
            <li>{{$transaction->title}} - {{$transaction->description}}</li>
        @endforeach
    </ul>
</body>
</html>

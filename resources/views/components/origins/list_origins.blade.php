<h1>Origens</h1>
<ul>
    @foreach($origins as $origin)
        <li>{{ $origin->name }} - {{ $origin->description }}</li>
    @endforeach
</ul>

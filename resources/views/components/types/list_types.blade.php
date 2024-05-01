<h1>Tipos de Movimento</h1>
<ul>
    @foreach($types as $type)
        <li>{{ $type->name }}</li>
    @endforeach
</ul>

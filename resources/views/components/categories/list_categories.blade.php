<h1>Categorias</h1>
<ul>
    @foreach($categories as $categorie)
        <li>{{ $categorie->name }}</li>
    @endforeach
</ul>


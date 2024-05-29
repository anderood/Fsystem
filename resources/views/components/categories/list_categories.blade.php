<div>
    <h3>Categorias</h3>
</div>
<div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Categoria</th>
            <th>Descrição</th>
            <th>Editar</th>
        </tr>
        </thead>
        <tbody>

        @foreach($categories as $category)
            <tr>
                <td> {{ $category->name }}</td>
                <td> {{ $category->description }}</td>
                <td><a href="/fsystem/categories/{{$category->id}}">Editar</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

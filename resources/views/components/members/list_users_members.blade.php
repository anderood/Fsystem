<h4>Membros Cadastrados</h4>
<ul>
    @foreach($members as $member)
        <li>{{ $member->first_name }} - {{ $member->last_name }} - {{ $member->name }}</li>
    @endforeach
</ul>

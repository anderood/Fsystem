<section class="container-esquerdo">
<div class="row">
    <div class="container-esquerdo-logo">
        <h1>Financial System</h1>
    </div>
</div>
<div class="row">
    <div class="container-esquerdo-menu">
        <ul>
            <li class="menu-item"><i class="fas fa-tachometer-alt"></i> <a href="/fsystem">Dashboard</a></li>
            <li class="menu-item"><i class="fas fa-exchange-alt"></i> <a href="{{ route('transactions.home_transactions') }}">Transações</a></li>
            <li class="menu-item"><i class="fas fa-users"></i> <a href="{{ route('members.home_members') }}">Membros</a></li>
            <li class="menu-item"><i class="fas fa-user"></i> <a href="{{ route('admin.home_admin') }}">Usuários</a></li>
            <li class="menu-item"><i class="fas fa-user"></i> <a href="{{ route('categories.home_categories') }}">Categorias</a></li>
            <li class="menu-item"><i class="fas fa-user"></i> <a href="{{ route('types.home_types') }}">Tipos</a></li>
            <li class="menu-item"><i class="fas fa-user"></i> <a href="{{ route('origins.home_origins') }}">Origens</a></li>
            <li class="menu-item"><i class="fas fa-user"></i> <a href="{{ route('controls.home_controls') }}">Cadastrar Balanço</a></li>
            <li class="menu-item"><i class="fas fa-file-alt"></i> <a href="#">Relatórios</a></li>
            <li class="menu-item"><i class="fas fa-cog"></i> <a href="#">Configurações</a></li>

        </ul>
    </div>

</div>
<div class="row">
    <div class="container-esquerdo-rodape">
        <ul>
            <a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </ul>
    </div>
</div>
</section>

@extends('layouts.layout-master')

@section('content')
    <section class="container-esquerdo">
        <div class="row">
            <div class="container-esquerdo-logo">
                <h1>Financial System</h1>
            </div>
        </div>
        <div class="row">
            <div class="container-esquerdo-menu">
                <ul>
                    <li class="menu-item"><i class="fas fa-tachometer-alt"></i> <a href="#">Dashboard</a></li>
                    <li class="menu-item"><i class="fas fa-exchange-alt"></i> <a href="#">Transações</a></li>
                    <li class="menu-item"><i class="fas fa-file-alt"></i> <a href="#">Relatórios</a></li>
                    <li class="menu-item"><i class="fas fa-cog"></i> <a href="#">Configurações</a></li>
                    <li class="menu-item"><i class="fas fa-users"></i> <a href="#">Membros</a></li>
                    <li class="menu-item"><i class="fas fa-user"></i> <a href="#">Usuários</a></li>
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
    <section class="container-central">
        <div class="row">
            <div class="container-central-topo-div">
                <p>Hoje é dia 01 de Janeiro de 2024</p>
                <div class="container-central-topo">
                    <h2>Seja Bem vindo <span>Fulano!</span></h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="container-central-balance-div">
                <div class="central-balance-entrada">
                    <h3>Entrada</h3>
                    <span>R$1000,00</span>
                </div>
                <div class="central-balance-saida">
                    <h3>Saida</h3>
                    <span>R$1000,00</span>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="container-central-transacoes-div">
                <div class="transacoes">
                    <h3>Últimas Transações</h3>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Valor</th>
                            <th>Data</th>
                            <th>Tipo</th>
                            <th>Origem</th>
                            <th>Movimentação</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Fulano de tal</td>
                            <td>R$ 300,00</td>
                            <td>01/01/2022</td>
                            <td>Dízimo</td>
                            <td>Banco</td>
                            <td>Entrada</td>
                        </tr>
                        <tr>
                            <td>Fulano de tal</td>
                            <td>R$ 300,00</td>
                            <td>01/01/2022</td>
                            <td>Dízimo</td>
                            <td>Banco</td>
                            <td>Entrada</td>
                        </tr>
                        <tr>
                            <td>Fulano de tal</td>
                            <td>R$ 300</td>
                            <td>01/01/2022</td>
                            <td>Dízimo</td>
                            <td>Banco</td>
                            <td>Entrada</td>
                        </tr>
                        <tr>
                            <td>Fulano de tal</td>
                            <td>R$ 300</td>
                            <td>01/01/2022</td>
                            <td>Dízimo</td>
                            <td>Banco</td>
                            <td>Entrada</td>
                        </tr>
                        <tr>
                            <td>Fulano de tal</td>
                            <td>R$ 300</td>
                            <td>01/01/2022</td>
                            <td>Dízimo</td>
                            <td>Banco</td>
                            <td>Entrada</td>
                        </tr>
                        <tr>
                            <td>Fulano de tal</td>
                            <td>R$ 300</td>
                            <td>01/01/2022</td>
                            <td>Dízimo</td>
                            <td>Banco</td>
                            <td>Entrada</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection

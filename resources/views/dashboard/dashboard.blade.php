<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Lateral</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Seu arquivo CSS personalizado -->
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <!-- Menu lateral -->
        <div class="col-md-3 bg-light d-flex flex-column justify-content-between menu-lateral">
            <!-- Nome da instituição -->
            <div class="instituicao">Financial System</div>
            <!-- Menu -->
            <ul class="list-unstyled">
                <li class="menu-item active"><i class="fas fa-tachometer-alt"></i> <a href="#">Dashboard</a></li>
                <li class="menu-item"><i class="fas fa-exchange-alt"></i> <a href="#">Transações</a></li>
                <li class="menu-item"><i class="fas fa-file-alt"></i> <a href="#">Relatórios</a></li>
                <li class="menu-item"><i class="fas fa-cog"></i> <a href="#">Configurações</a></li>
                <li class="menu-item"><i class="fas fa-users"></i> <a href="#">Membros</a></li>
                <li class="menu-item"><i class="fas fa-user"></i> <a href="#">Usuários</a></li>
            </ul>
            <!-- Rodapé do menu -->
            <div class="menu-rodape">
                <a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </div>

        </div>
        <!-- Conteúdo principal -->
        <div class="conteudo-principal">
            <section class="row">
                <div class="col-md-12 text-center">
                    <div class="bem-vindo">
                        <h2>Olá, Seja bem vindo Anderson Santos!</h2>
                    </div>
                </div>
            </section>

            <section class="row">
                <div class="col-md-6">
                    <div class="caixa text-center entrada">
                        <i class="fas fa-arrow-alt-circle-up fa-lg text-primary"></i>
                        <h3>Entrada</h3>
                        <p class="valor">R$ 1000</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="caixa text-center saida">
                        <i class="fas fa-arrow-alt-circle-down fa-lg text-primary"></i>
                        <h3>Saída</h3>
                        <p class="valor">R$ 1000</p>
                    </div>
                </div>
            </section>

            <section class="row">
                <div class="col-md-12">
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
                            <!-- Adicione mais linhas conforme necessário -->
                            </tbody>
                        </table>
                    </div>

                </div>
            </section>


        </div>
        <div class="conteudo-direito">
            <section>
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Pesquisar...">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="row">
                    <canvas id="graficoPizza"></canvas>
                </div>
            </section>
        </div>

    </div>
</div>

<!-- Bootstrap JS (opcional, apenas se você precisar de funcionalidades como colapsar o menu em dispositivos móveis) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
<script>
    var ctx = document.getElementById('graficoPizza').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Manutenção', 'Ornamentação', 'Aluguel', 'Dízimo', 'Ofertas Avulsas'],
            datasets: [{
                data: [120, 200, 1300, 1000, 100],
                backgroundColor: [
                    '#ff9999',
                    '#99ccff',
                    '#ffcc99',
                    '#99ff99',
                    '#ffccff'
                ],
            }]
        }
    });
</script>

</html>

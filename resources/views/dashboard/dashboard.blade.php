<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Lateral</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">

    <!-- Seu arquivo CSS personalizado -->
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <div class="container">
        @include('partials.menu')
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
    </div>
</body>
<script>
    var ctx = document.getElementById('graficoPizza').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
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

    var ctx = document.getElementById('graficoPizzax').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
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

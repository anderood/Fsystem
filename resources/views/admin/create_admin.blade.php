<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <h1>Cadastrar Usuario</h1>

    <form method="post">
        @csrf
        <div>
            <label>Nome Completo:</label>
            <input type="text" name="name" id="">
        </div>
        <div>
            <label>Telefone</label>
            <input type="text" name="phone" id="">
        </div>
        <div>
            <label>Data de Nascimento</label>
            <input type="text" name="dateOfBirth" id="">
        </div>
        <div>
            <label>E-mail</label>
            <input type="text" name="email" id="">
        </div>
        <div>
            <label>Observação</label>
            <input type="text" name="observations" id="">
        </div>
        <div>
            <label>Senha:</label>
            <input type="password" name="password" id="">
        </div>
        <h2>Endereço</h2>
        <div>
            <label>CEP: </label>
            <input type="text" name="zipcode" id="">
        </div>
        <div>
            <label>Rua: </label>
            <input type="text" name="street" id="">
        </div>
        <div>
            <label>Numero</label>
            <input type="text" name="number" id="">
        </div>
        <div>
            <label>Complemento</label>
            <input type="text" name="complement" id="">
        </div>
        <div>
            <label>Bairro: </label>
            <input type="text" name="district" id="">
        </div>
        <div>
            <label>Cidade: </label>
            <input type="text" name="city" id="">
        </div>
        <div>
            <label>Estado</label>
            <input type="text" name="state" id="">
        </div>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>

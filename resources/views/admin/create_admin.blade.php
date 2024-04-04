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
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>

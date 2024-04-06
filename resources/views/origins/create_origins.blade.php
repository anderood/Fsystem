<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cria Origens</title>
</head>
<body>
    <h1>Cria Origins</h1>
    <form action="" method="post">
        @csrf
        <div>
            <label>Origem</label>
            <div>
                <input type="text" name="name">
            </div>
        </div>
        <div>
            <label>Descrição</label>
            <div>
                <textarea name="description" rows="4" cols="50">At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.</textarea>
            </div>
        </div>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>

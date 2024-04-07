<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transações</title>
</head>
<body>
    <h1>Cria Transações</h1>
    id, title, description, amount, `date`, member_id, origin_id, category_id, created_at, updated_at
    <form action="" method="post">
        @csrf
        <input type="hidden" name="member_id" value="1">
        <input type="hidden" name="origin_id" value="1">
        <input type="hidden" name="origin_id" value="1">
        <input type="hidden" name="category_id" value="1">
        <div>
            <label>Titulo</label>
            <div>
                <label>
                    <input type="text" name="title">
                </label>
            </div>
        </div>
        <div>
            <label>Descrição</label>
            <div>
                <label>
                    <textarea name="description" rows="4" cols="50">At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.</textarea>
                </label>
            </div>
        </div>
        <div>
            <label>Valor</label>
            <div>
                <label>
                    <input type="text" name="amount">
                </label>
            </div>
        </div>
        <div>
            <label>Data da Transação</label>
            <div>
                <label>
                    <input type="text" name="date">
                </label>
            </div>
        </div>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>

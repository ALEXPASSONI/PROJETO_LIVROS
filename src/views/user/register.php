<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./public/css/style.css">



    <title>login</title>
</head>

<body>
    <div class="container-login">

        <form action="/projeto_livros/register/save" method="post">
            <div class="container-logo"><img src="/PROJETO_LIVROS/public/img/logo6" alt="logo"></div>
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input name="name" required type="name" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Telefone</label>
                <input name="phone" required type="phone" class="form-control" id="phone">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email </label>
                <input name="email" required type="email" class="form-control" id="email"placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Senha</label>
                <input name="password" required type="password" class="form-control" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <div class="container-action">
                
                <a class="letra" href="/PROJETO_LIVROS/login">Voltar</a>
            </div>
        </form>


    </div>
</body>

</html>
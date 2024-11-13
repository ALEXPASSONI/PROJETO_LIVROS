<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/PROJETO_LIVROS/public/css/books.css">
  <link rel="stylesheet" href="/PROJETO_LIVROS/public/css/booksEdit.css">
  <link rel="stylesheet" href="/PROJETO_LIVROS/public/css/booksListagem.css">
</head>

<body>
  <nav>
    <a href="/PROJETO_LIVROS/panel/books/create">Bem vindo <?= $_SESSION["user"]["name"] ?></a>
    <ul>
      <li><a href="/PROJETO_LIVROS/panel/books">Listagem</a></li>
      <li><a href="/PROJETO_LIVROS/panel/books/create">Cadrastro de Livros</a></li>
      <li><a href="/PROJETO_LIVROS/panel/books/logout">Sair</a>

        <script>
          const logoutButton = document.getElementById('logoutButton');

          logoutButton.addEventListener('click', (event) => {
            event.preventDefault();

            // Redireciona para a tela de login
            window.location.href = 'login.html'; // Substitua 'login.html' pelo caminho da sua página de login
          });
        </script>
    </ul>
  </nav>
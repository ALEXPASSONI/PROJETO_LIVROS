<div class="books-container">
        <form action="/PROJETO_LIVROS/panel/books/search" method="GET">
            <input value="<?= $search ?>" name="nameFilter" type="text">
            <button>Buscar</button>
        </form>
        <?php if ($search != "") { ?>
            <a class="limpar-container"href="/PROJETO_LIVROS/panel/books">Limpar</a>
        <?php } ?>
    </div>
 <div class="container mt-5">
     <h1 class="text-center mb-4">Lista de Livros</h1>

     <div class="table-container">
         <table class="table table-striped">
             <thead>
                 <tr>
                     <th>Capa</th>
                     <th>Título</th>
                     <th>Autor</th>
                     <th>Gênero</th>
                     <th>Editora</th>

                 </tr>
             </thead>
             <tbody>
                 <?php foreach ($bookss as $key => $book): ?>
                     <tr>
                         <td>
                             <a href="<?= $book['capa'] ?>"><img class="img-capa" src="<?= $book['capa'] ?>" alt=""></a>
                         </td>
                         <td><?= $book['titulo'] ?></td>
                         <td><?= $book['autor'] ?></td>
                         <td><?= $book['genero'] ?></td>
                         <td><?= $book['editora'] ?></td>



                         <td>
                             <a href="/PROJETO_LIVROS/panel/books/edit/<?= htmlspecialchars($book['id'], ENT_QUOTES, 'UTF-8') ?>" class="btn btn-warning">Editar</a>

                             <span style="margin-right: 2px;"></span> <!-- Espaço entre os botões -->

                             <form action="/PROJETO_LIVROS/panel/books/delete/<?= htmlspecialchars($book['id'], ENT_QUOTES, 'UTF-8') ?>" method="post" style="display: inline;">
                                 <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Deletar</button>
                             </form>
                         </td>
                     </tr>
                 <?php endforeach; ?>
             </tbody>
         </table>
     </div>

     <a class="btn btn-primary mt-3" href="/PROJETO_LIVROS/panel/books/create">Cadastrar Novo Livro</a>
 </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 <script>
     // Dados de exemplo para demonstração
     const livros = [{
             id: 1,
             titulo: "O Senhor dos Anéis",
             autor: "J.R.R. Tolkien",
             genero: "Fantasia",
             capa: "https://via.placeholder.com/150"
         },
         {
             id: 2,
             titulo: "Harry Potter e a Pedra Filosofal",
             autor: "J.K. Rowling",
             genero: "Fantasia",
             capa: "https://via.placeholder.com/150"
         },
         {
             id: 3,
             titulo: "Dom Casmurro",
             autor: "Machado de Assis",
             genero: "Realismo",
             capa: "https://via.placeholder.com/150"
         },
         // Adicione mais livros aqui...
     ];

     // Função para preencher a tabela com os dados dos livros
     function preencherTabelaLivros() {
         const tbody = document.querySelector('tbody');
         tbody.innerHTML = ''; // Limpa a tabela

         livros.forEach(livro => {
             const row = tbody.insertRow();
             const idCell = row.insertCell();
             const tituloCell = row.insertCell();
             const autorCell = row.insertCell();
             const generoCell = row.insertCell();
             const capaCell = row.insertCell();
             const acoesCell = row.insertCell();

             idCell.textContent = livro.id;
             tituloCell.textContent = livro.titulo;
             autorCell.textContent = livro.autor;
             generoCell.textContent = livro.genero;
             capaCell.innerHTML = `<img src="${livro.capa}" alt="Capa do livro ${livro.titulo}" style="max-width: 100px;">`;

             // Botões de Ações
             acoesCell.innerHTML = `
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary" onclick="editarLivro(${livro.id})">
                            <i class="bi bi-pencil-square"></i> Editar
                        </button>
                        <button type="button" class="btn btn-danger" onclick="excluirLivro(${livro.id})">
                            <i class="bi bi-trash"></i> Excluir
                        </button>
                    </div>
                `;
         });
     }

     // Funções para editar e excluir livros (implemente a lógica para interagir com o backend)
     function editarLivro(id) {
         // Redireciona para a tela de edição com o ID do livro
         window.location.href = `edicao.html?id=${id}`;
     }

     function excluirLivro(id) {
         // Chama a função para excluir o livro no backend
         // ... (Exemplo de código de exclusão usando fetch)
         fetch(`/livros/${id}`, {
                 method: 'DELETE'
             })
             .then(response => {
                 // Verifica se a exclusão foi bem-sucedida
                 if (response.ok) {
                     // Recarrega a tabela
                     preencherTabelaLivros();
                 } else {
                     // Trata o erro
                     console.error('Erro ao excluir livro');
                 }
             })
             .catch(error => {
                 console.error('Erro na requisição:', error);
             });
     }
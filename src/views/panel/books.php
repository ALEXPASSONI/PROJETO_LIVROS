
    <div class="container mt-5">
        <h1 class="text-center mb-4">Lista de Livros</h1>

        <div class="table-container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Gênero</th>
                        <th>Capa</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>
                        <button type="button" class="btn btn-danger">Excluir</button>
                            <button type="button" class="btn btn-warning">Editar</button>

                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>
                            <button>Edit</button>
                            <button>Deletar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <button class="btn btn-primary mt-3" onclick="window.location.href='cadastro.html'">Cadastrar Novo Livro</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        // Dados de exemplo para demonstração
        const livros = [
            { id: 1, titulo: "O Senhor dos Anéis", autor: "J.R.R. Tolkien", genero: "Fantasia", capa: "https://via.placeholder.com/150" },
            { id: 2, titulo: "Harry Potter e a Pedra Filosofal", autor: "J.K. Rowling", genero: "Fantasia", capa: "https://via.placeholder.com/150" },
            { id: 3, titulo: "Dom Casmurro", autor: "Machado de Assis", genero: "Realismo", capa: "https://via.placeholder.com/150" },
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

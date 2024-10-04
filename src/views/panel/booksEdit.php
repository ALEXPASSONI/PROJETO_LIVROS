
    <div class="container mt-5">
        <h1 class="text-center mb-4">Edição de Livro</h1>

        <form>
            <div class="mb-3">
                <label for="titulo" class="form-label">Título:</label>
                <input type="text" class="form-control" id="titulo" placeholder="Título do livro">
            </div>

            <div class="mb-3">
                <label for="autor" class="form-label">Autor:</label>
                <input type="text" class="form-control" id="autor" placeholder="Nome do autor">
            </div>

            <div class="mb-3">
                <label for="isbn" class="form-label">ISBN:</label>
                <input type="text" class="form-control" id="isbn" placeholder="Número ISBN">
            </div>

            <div class="mb-3">
                <label for="genero" class="form-label">Gênero:</label>
                <select class="form-select" id="genero">
                    <option value="">Selecione um gênero</option>
                    <option value="Ficção">Ficção</option>
                    <option value="Romance">Romance</option>
                    <option value="Aventura">Aventura</option>
                    <option value="Terror">Terror</option>
                    <!-- Adicione outros gêneros -->
                </select>
            </div>

            <div class="mb-3">
                <label for="editora" class="form-label">Editora:</label>
                <input type="text" class="form-control" id="editora" placeholder="Nome da editora">
            </div>

            <div class="mb-3">
                <label for="ano" class="form-label">Ano de Publicação:</label>
                <input type="number" class="form-control" id="ano" placeholder="Ano de publicação">
            </div>

            <div class="mb-3">
                <label for="capa" class="form-label">Capa:</label>
                <input type="file" class="form-control" id="capa">
            </div>

            <div class="mb-3">
                <label for="sinopse" class="form-label">Sinopse:</label>
                <textarea class="form-control" id="sinopse" rows="3" placeholder="Sinopse do livro"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Atualizar</button>
            <button type="reset" class="btn btn-secondary">Limpar</button>
        </form>
    </div>

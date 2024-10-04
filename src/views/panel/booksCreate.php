
    <div class="container mt-5">
        <h1 class="text-center mb-4">Cadastro de Livro</h1>

        <form>
            <div class="row mb-3">
                <label for="titulo" class="col-sm-2 col-form-label">Título:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="titulo" placeholder="Título do livro">
                </div>
            </div>

            <div class="row mb-3">
                <label for="autor" class="col-sm-2 col-form-label">Autor:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="autor" placeholder="Nome do autor">
                </div>
            </div>

            <div class="row mb-3">
                <label for="isbn" class="col-sm-2 col-form-label">ISBN:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="isbn" placeholder="Número ISBN">
                </div>
            </div>

            <div class="row mb-3">
                <label for="genero" class="col-sm-2 col-form-label">Gênero:</label>
                <div class="col-sm-10">
                    <select class="form-select" id="genero">
                        <option value="">Selecione um gênero</option>
                        <option value="Ficção">Ficção</option>
                        <option value="Romance">Romance</option>
                        <option value="Aventura">Aventura</option>
                        <option value="Terror">Terror</option>
                        <!-- Adicione outros gêneros -->
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <label for="editora" class="col-sm-2 col-form-label">Editora:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="editora" placeholder="Nome da editora">
                </div>
            </div>

            <div class="row mb-3">
                <label for="ano" class="col-sm-2 col-form-label">Ano de Publicação:</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="ano" placeholder="Ano de publicação">
                </div>
            </div>

            <div class="row mb-3">
                <label for="capa" class="col-sm-2 col-form-label">Capa:</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="capa">
                </div>
            </div>

            <div class="row mb-3">
                <label for="sinopse" class="col-sm-2 col-form-label">Sinopse:</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="sinopse" rows="3" placeholder="Sinopse do livro"></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    <button type="reset" class="btn btn-secondary">Limpar</button>
                </div>
            </div>
        </form>
    </div>


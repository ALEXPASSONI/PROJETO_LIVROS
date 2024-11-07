
<div class="container mt-5">
        <h1 class="text-center mb-4">Editar de Livro</h1>
       

        
        <form method="post" action="/PROJETO_LIVROS/panel/books/edit/<?= $book['id'] ?>">
            <div class="row mb-3">
                <label for="titulo" class="col-sm-2 col-form-label">Título:</label>
                <div class="col-sm-10">
                    <input value="<?= $book['titulo'] ?>" name="titulo" type="text" class="form-control" id="titulo" placeholder="Título do livro">
                </div>
            </div>

            <div class="row mb-3">
                <label for="autor" class="col-sm-2 col-form-label">Autor:</label>
                <div class="col-sm-10">
                    <input value="<?= $book['autor'] ?>" name="autor" type="text" class="form-control" id="autor" placeholder="Nome do autor">
                </div>
            </div>


            <div class="row mb-3">
                <label for="genero" class="col-sm-2 col-form-label">Gênero:</label>
                <div class="col-sm-10">
                    <select name="genero" class="form-select" id="genero">
                        <option value="">Selecione um gênero</option>
                        <option  <?= $book['genero'] == "Ficção" ? "selected" : "" ?>  value="Ficção">Ficção</option>
                        <option <?= $book['genero'] == "Cristão" ? "selected" : "" ?>  value="Cristão">Cristão</option>
                        <option  <?= $book['genero'] == "Aventura" ? "selected" : "" ?>  value="Aventura">Aventura</option>
                        <option   <?= $book['genero'] == "Terror" ? "selected" : "" ?> value="Terror">Terror</option>
                        <!-- Adicione outros gêneros -->
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <label for="editora" class="col-sm-2 col-form-label">Editora:</label>
                <div class="col-sm-10">
                    <input value="<?= $book['editora'] ?>"  name="editora" type="text" class="form-control" id="editora" placeholder="Nome da editora">
                </div>
            </div>

            <div class="row mb-3">
                <label for="ano" class="col-sm-2 col-form-label">Ano de Publicação:</label>
                <div class="col-sm-10">
                    <input  value="<?= $book['ano_de_publicacao'] ?>"  name="ano_de_publicacao" type="date" class="form-control" id="ano" placeholder="Ano de publicação">
                </div>
            </div>

            <div class="row mb-3">
                <label for="capa" class="col-sm-2 col-form-label">Capa:</label>
                <div class="col-sm-10">
                    <input value="<?= $book['capa'] ?>"   name="capa" type="text" class="form-control" id="capa">
                    <img class="img-preview" src="<?= $book['capa'] ?>"  alt="">
                </div>
            </div>

            <div class="row mb-3">
                <label for="sinopse" class="col-sm-2 col-form-label">Sinopse:</label>
                <div class="col-sm-10">
                    <textarea name="sinope" class="form-control" id="sinopse" rows="3" placeholder="Sinopse do livro"><?= $book['sinope'] ?></textarea>
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


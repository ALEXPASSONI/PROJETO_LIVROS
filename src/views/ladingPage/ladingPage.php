<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Passoni</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="/PROJETO_LIVROS/public/css/landingPage.css">
</head>

<body>

    <header class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <h1 class="display-4 animated fadeInDown">Bem-vindo à Biblioteca Passoni</h1>
            <p class="lead animated fadeInUp">Explore um mundo de conhecimento e cultura.</p>
            <a href="/PROJETO_LIVROS/register" class="button">Cadastrar</a>
            <a href="/PROJETO_LIVROS/login" class="button">Login</a>
            
        </div>
    </header>

    <section class="py-5">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="https://www.google.com/search?q=livros" target="_blank"> <img src="https://www.designi.com.br/images/preview/11006491.jpg" class="d-block w-100" alt="Livros na estante"></a>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Nosso Acervo</h5>
                            <p>Uma vasta coleção de livros para todos os gostos.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <a href="https://www.google.com/search?q=livros" target="_blank"> <img src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="d-block w-100" alt="Pessoas lendo"></a>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Espaço de Leitura</h5>
                            <p>Um ambiente tranquilo e confortável para desfrutar da leitura.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <a href="https://www.google.com/search?q=livros" target="_blank"> <img src="https://img.freepik.com/fotos-premium/design-de-interiores-de-sala-de-leitura-com-estantes-e-muitos-livros-e-plantas-de-casa-biblioteca-antiga-aconchegante-em_183983-56.jpg" class="d-block w-100" alt="Eventos na biblioteca"></a>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Eventos e Atividades</h5>
                            <p>Participe de palestras, workshops e outras atividades culturais.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <section class="py-5 bg-dark text-light">
        <div class="container">
            <h2 class="text-center mb-4 animated fadeInUp">Por que Escolher a Biblioteca Central?</h2>
            <div class="row">
                <?php  foreach($books as $book):?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-book-open fa-2x text-primary"></i>
                                <h5 class="card-title  font-black"><?= $book['titulo'] ?></h5>
                                <div class="book-img">
                                    <a href="https://www.exemplo.com">
                                        <img src="<?= $book['capa'] ?>" alt="Descrição da imagem">
                                    </a>
                                </div>
                                <p class="card-text font-black"><?= $book['sinope'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-light py-4">
        <div class="container text-center">
            <p>Alex Sandro Passoni.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/your-fontawesome-kit-id.js" crossorigin="anonymous"></script>
</body>

</html>
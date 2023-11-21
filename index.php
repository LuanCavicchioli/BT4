<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/controllers/UsuarioController.php";

$usuarioController = new UsuarioController();
$usuario = $usuarioController->usuarioLogado(); // Verifica se o usuário está logado

if ($usuario) {
    // Usuário está logado, exibir cabeçalho completo
    require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecalho.php";
} else {
    // Usuário não está logado, exibir cabeçalho para não logados
    require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecalho.user.php";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuscaTec - Inicio</title>
    <link rel="stylesheet" href="/assets/css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <main>
        <div id="carouselExampleDark" class="carousel carousel-dark slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="1000">
                    <a href="/admin/infos/quemsomos.php">
                        <img src="/assets/img/equipe.png" class="d-block w-50" alt="...">
                    </a>
                    <div class="carousel-caption d-none d-md-block text-white">

                        <h5><strong>Sobre Nós</strong></h5>
                        <p>Quem somos?.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="1000">
                    <a href="/admin/infos/guia.php">
                        <img src="/assets/img/guia.png" class="d-block w-50" alt="...">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <a href="pagina_destino.html">
                        <img src="/assets/img/error.png" class="d-block w-50" alt="...">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
</body>
</main>

</html>



<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/rodape.php";
?>
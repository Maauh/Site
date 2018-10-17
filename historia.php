<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <title>Historia</title>
</head>

<body class="background">
    <nav class="navbar navbar-expand-sm navbar-dark bg-gradient-primary ">
        <div class="container ">
            <a class="navbar-brand h1 mb-0" href="index.php">HOME</a>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSite">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="robocup.php">RobôCup</a></li>
                    <li class="nav-item active"><a class="nav-link " href="historia.php">Historia do Robô</a></li>
                    <li class="nav-item"><a class="nav-link" href="sobre.php">Integrantes</a></li>
                    <li class="nav-item"><a class="nav-link" href="diversao.html">Diversão</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container1">
        <h1 class="display-3 ">Projeto Wall-e</h1><br>
        <div id="carousel1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel1" data-slide-to="1"></li>
                <li data-target="#carousel1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="imagem/sobre/carousel1_slide1.jpeg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Chassi de madeira</h3>
                        <p>Mais facil para trabalhar e sem risco de curto</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="imagem/sobre/carousel1_slide2.jpeg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Montagem</h3>
                        <p>colocando todos os componentes para ver uma melhor organização e se todos cabem no chassi</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="imagem/sobre/carousel1_slide3.jpeg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Programação do arduino</h3>
                        <p>Programando o acionamento das armas movimentação dos motores.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div><br>
        <br>
        <div class="row justify-content-sm-center">
            <div class="texto1 col-sm-6">
                <h4>Teste de movimentação</h4>
                <p>Neste teste confirimos se as rodas estao se movimentando de acordo com o comandado pelo aplicativo.</p>
            </div>
            <div class="video1 col-sm-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <video class="embed-responsive-item" controls src="imagem/sobre/video1.mp4"></video>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-6 float-left">
                <h4>Teste de acionamento de arma</h4>
                <p>Teste para ver se o acionamento ocorre de maneira correta e a regra do tempo de 15 segundos para o
                    recolhimento da arma e respeitado</p>
            </div>
            <div class="col-sm-6">
                <div class="embed-responsive embed-responsive-16by9 float-right ">
                    <video class="embed-responsive-item" controls src="imagem/sobre/testedearma.mp4"></video>
                </div>
            </div>
        </div>
        <div>
            <h2 class="py-5 ">A evolução da estrutura </h2>
        </div>
        <div id="carousel2" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel1" data-slide-to="1"></li>
                <li data-target="#carousel1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="imagem/sobre/carousel2_slide1.jpeg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Metal mais ganho que perdas</h3>
                        <p></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="imagem/sobre/carousel2_slide2.jpeg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Estrutura de metal</h3>
                        <p>O robô ganhou a estrutura de metal para ser mais leve e veloz que os adversarios</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="imagem/sobre/carousel2_slide4.jpeg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Isolamento para evitar curtos</h3>
                        <p>Instalação dos componentes e isolamento para evitar curto circuito</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="py-5">
            <h3>Finalização do robô</h3>
            <p class="pb-5">O robô foi finalizado dentro do prazo fizemos algumas adaptações </p>
            <img class="img-fluid" src="imagem/sobre/robo.jpeg" alt="quase" width="500px" height="400px">
        </div>
        <footer class="page-footer font-small cyan darken-3">
            <div class="footer-copyright text-center py-3">
                &copy; 2018 Copyright, Todos os Direitos Reservados. Criação e implementação Grupo Potatoes Party.
            </div>
        </footer>
    </div>
</body>

</html>
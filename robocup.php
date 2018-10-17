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

    <title>RobôCup</title>
</head>

<body class="background">
    <nav class="navbar navbar-expand-sm navbar-dark bg-gradient-primary ">
        <div class="container ">
            <a class="navbar-brand h1 mb-0" href="index.php">HOME</a>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSite">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="robocup.php">RobôCup</a></li>
                    <li class="nav-item"><a class="nav-link " href="historia.php">Historia do Robô</a></li>
                    <li class="nav-item"><a class="nav-link" href="sobre.php">Integrantes</a></li>
                    <li class="nav-item"><a class="nav-link" href="diversao.html">Diversão</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container1">
        <div class="container">
            <h1>RobôCup</h1>
            <div class="py-3">
                <img class="img-fluid" src="imagem/robocup.jpg">
            </div>
            <br>
            <div>
                <h4>O RoboCup é a competição mais antiga da FIAP. Alunos dos 1°s anos de Sistemas de Informação
                    construíram robôs para participar de duelos, onde o principal objetivo é estourar o balão que o
                    adversário carrega.
                    Para isso, todas as máquinas possuem armas em seu corpo.Mas a competição também exige o
                    funcionamento pleno do robô: após estourar o balão do oponente, ele deve recolher sua arma, só
                    assim é considerado o vencedor.
                </h4>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-sm-6 col-md-6">
                    <div class="card mb-5">
                        <img class="card-img-top" width="276" height="150" src="imagem/robocup/robocup1.jpg">
                        <div class="card-body">
                            <a href="#" data-toggle="modal" data-target="#caixa">
                                <h4 class="card-title card-link">Regras da RobôCup</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="card mb-5">
                        <img class="card-img-top" width="276" height="150" src="imagem/robocup/fiap.jpg">
                        <div class="card-body">
                            <a href="#" data-toggle="modal" data-target="#caixa1">
                                <h4 class="card-title card-link">Disciplinas do projeto</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6" width="276">
                    <div class="card mb-5">
                        <img class="card-img-top d-block " width="276" height="150" src="imagem/robocup/next.png">
                        <div class="card-body">
                            <a href="#" data-toggle="modal" data-target="#caixa2">
                                <h4 class="card-title card-link">NEXT Fiap Festival</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="page-footer font-small cyan darken-3">
            <div class="footer-copyright text-center py-3">
                &copy; 2018 Copyright, Todos os Direitos Reservados. Criação e implementação Grupo Potatoes Party.
            </div>
        </footer>
    </div>
    <div class="modal fade" id="caixa" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document"></div>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Regras da RoboCup</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5>Algumas das regras:</h5>
                <p>O robô não pode pesar mais de 2,5Kg.</p>
                <p>A arma depois de acionada tem o tempo de 15 segundos para se recolher.</p>
                <br>
                <h6>Para ler todas as regras faça o download clickando no botão abaixo.</h6>
                <a class="btn btn-primary" href="regras-robocup-2018.doc" download="Acme Documentation (ver. 2.0.1).txt"
                    role="button">
                    Download
                </a>
            </div>
        </div>
    </div>
    </div>
    <div class="modal fade" id="caixa1" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Disciplinas</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Laboratorio de Programação</p><br>
                    <p>Modelos e Estruturas de Computadores</p><br>
                    <p>Sensores e Circuitos Digitais</p><br>
                    <p>Sistemas de Informação</p><br>
                    <p>Storytelling e Inspiração Empreendedora</p><br>
                    <p>Web Standards and Game Developing</p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="caixa2" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Next Fiap Festival </h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>INFORMAÇÕES DO FESTIVAL NEXT: </h5>
                    <ul>
                        <li>
                            <p>
                                Valor do convite para alunos FIAP e convidados:
                                R$ 30,00 (inclui 2 bebidas: água, refrigerante, chopp ou cerveja).
                            </p>
                        </li>
                        <li>
                            <p>
                                Se você vai competir ou participar de alguma Challenge, antecipe a compra do seu
                                convite.
                            </p>
                        </li>
                        <li>
                            <p> Toda a renda do NEXT é revertida para as iniciativas do iHelp,
                                o projeto de responsabilidade social da FIAP. </p>
                        </li>
                        <li>
                            <p>
                                Apenas alunos FIAP podem comprar a pulseira NEXT
                                para seus convidados.
                            </p>
                        </li>
                        <li>
                            <p>
                                Compre a sua pulseira NEXT no Portal do Aluno. Em seguida,
                                você vai receber um e-mail com as instruções para habilitar
                                sua pulseira RFID e fazer o seu Facebook Conect
                            </p>
                        </li>
                        <a class="btn btn-primary" href="https://www2.fiap.com.br/" role="button">Garanta seu convite</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
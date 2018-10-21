<?php 
function isActive($file)
{
    return basename($_SERVER['REQUEST_URI']) == $file ? "active" : "";
}
$pages =
[
    "next.php" => "Next",
    "historia.php" => "Historia do Robô",
    "sobre.php" => "Integrantes",
    "diversao.php" => "Diversão",
    "administracao.php" => "Administração",
];
?>
<nav class="navbar navbar-expand-sm navbar-dark bg-gradient-primary ">
    <div class="container ">
        <a class="navbar-brand h1 mb-0" href="index.php">HOME</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSite">
            <ul class="navbar-nav mr-auto">
                <?php
                    foreach ($pages as $file => $msg)
                    {
                        $active = isActive($file);
                        echo "<li class=\"nav-item $active\"><a class=\"nav-link\" href=\"$file\">$msg</a></li>";
                    }
                ?>
            </ul>
        </div>
    </div>
</nav>
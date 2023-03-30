<?php 
session_start();
include("../header.php");
include("Login ou n.php");
?>
<div>
    <div style="float: left">
        <img src="../Imagens/carcano.jpg" width="530" height="400">
    </div>
    <div>
        <h1>Rifle carcano(6,5X52mm Carcano)</h1>
        <p>|O rifle carcano, criado pela fábrica italiana Beretta,<br> tendo um design de mais de 100 anos,<br> carrega consigo simplicidade e precisão.<br>Uma boa escolha para iniciantes e aqueles com recursos limitados.
        <br>
        <p>|Características:<br>
                -Fabricada: Veneza, Italia, 9/1995<br>
                -Cano:45 cm<br>
                -Capacidade: 5 munições<br>
                -Mira de ferro de 100-500 metros<br>
                -Kit de limpesa no compartilhamento na coronha<br>
                -Quantidade:<?php $nome = "Carcano"; include("quantidade.php"); ?>
        </p>
        <br>
        <a href="Compra.php">|Comprar</a>
        <br>
    </div>
</div>

<br>
<a href="../main.php">|Página inicial</a>
<hr>
<?php include("../footer.php")?>
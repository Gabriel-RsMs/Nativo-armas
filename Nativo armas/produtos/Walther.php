<?php 
session_start();
include("../header.php");
include("Login ou n.php");
?>
<div>
    <div style="float: left">
        <img src="../Imagens/walther.jpg" width="530" height="400">
    </div>
    <div>
        <h1>Walther PPk(.32 ACP)</h1>
        <p>|A pistola semiautomática alemã de ação blowback</p>
        <br>
        <p>|Características:<br>
                -Fabricada: Austin, Texas, EUA, 12/2020<br>
                -Cano:10 cm<br>
                -Capacidade: 6 munições<br>
                -kit de peças reserva acompanha<br>
                -kit de recarregar munições<br>
                -Quantidade:<?php $nome = "Walther"; include("quantidade.php"); ?>
        </p>
        <br>
        <a href="Compra.php">|Comprar</a>
        <br>
    </div>
</div>
<a href="../main.php">| Página inicial</a>
<hr>
<?php include("../footer.php")?>
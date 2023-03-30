<?php 
session_start();
include("../header.php");
include("Login ou n.php");
?>
<div>
    <div style="float: left">
        <img src="../Imagens/taurus.jpg" width="530" height="400">
    </div>
    <div>
        <h1>Taurus Raging Bull(.454 Casull)</h1>
        <p>|O revolver Raging Bull, da Taurus, desenvolvido com a caça de<br> animais de médio porte faz uso de uma munição pesada e devagar<br> ideal para caça de javalis.<br>Seu tamanho é diametricamente oposto ao seu preço e vertlidade.</p>
        <br>
        <p>|Características:<br>
                -Fabricada: Belo Horizonte, Minas Gerais, Brasil, 6/2019<br>
                -Cano:21 cm<br>
                -Capacidade: 6 munições<br>
                -Fast reloader e<br>
                -kit de limpeza acompanham<br>
                -Quantidade:<?php $nome = "Taurus"; include("quantidade.php"); ?>
        </p>
        <br>
        <a href="Compra.php">|Comprar</a>
        <br>
    </div>
</div>
<a href="../main.php">| Página inicial</a>
<hr>
<?php include("../footer.php")?>
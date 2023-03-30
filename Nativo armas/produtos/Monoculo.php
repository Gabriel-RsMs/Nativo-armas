<?php 
session_start();
include("../header.php");
include("Login ou n.php");
?>
<div>
    <div style="float: left">
        <img src="../Imagens/monoculo.jpg" width="530" height="400">
    </div>
    <div>
        <h1>Monóculo</h1>
        <p>|Um monóculo preciso, moderno e leve, capaz de aumentos altíssimos<br> além de vários tipos de filtros e proteções anti-queda</p>
        <br>
        <p>|Características:<br>
                -Fabricada: Nagoya, Aichi, Japão, 3/2022<br>
                -Aumento: 2X-14X<br>
                -Modo de visão noturna<br>
                -Modo de visão térmica<br>
                -Quantidade:<?php $nome = "Monoculo"; include("quantidade.php"); ?>
        </p>
        <br>
        <br>
        <br>
        <br>
        <a href="Compra.php">|Comprar</a>
        <br>
    </div>
</div>
<a href="../main.php">| Página inicial</a>
<hr>
<?php include("../footer.php")?>
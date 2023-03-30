<?php 
session_start();
include("../header.php");
include("Login ou n.php");
?>
<div>
    <div style="float: left">
        <img src="../Imagens/corda.jpg" width="530" height="400">
    </div>
    <div>
        <h1>Corda(100m)</h1>
        <p>|Corda modelo wainder, elaborada para ser tanto barata quanto resistente</p>
        <br>
        <p>|Características:<br>
                -Fabricada: Aracaju, Sergipe, Brasil, 2019-20<br>
                -Material: Painço<br>
                -Quantidade:<?php $nome = "Corda"; include("quantidade.php"); ?>
        </p>
        <br>
        <br>
        <br>
        <br>
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
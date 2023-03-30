<?php 
session_start();
include("../header.php");
include("Login ou n.php");
?>
<div>
    <div style="float: left">
        <img src="../Imagens/mossberg12.jpg" width="530" height="400">
    </div>
    <div>
        <h1>Mossberg Modelo 12(12 gauge)</h1>
        <p>|A escopeta modelo 12 da Mossberg, empresa americana,<br> oferece uma alternativa potente e econômica, <br> sendo optimal para a caça de aves, <br>mas também com grande utilidade à alvos maiores</p>
        <br>
        <p>|Características:<br>
                -Fabricada: Jefferson city, Missouri, EUA, 3/2020<br>
                -Cano:16.4 cm<br>
                -Capacidade: 4+1 munições<br>
                -Mira pigenot<br>
                -Alma lisa<br>
                -Quantidade:<?php $nome = "Mossberg"; include("quantidade.php"); ?>
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
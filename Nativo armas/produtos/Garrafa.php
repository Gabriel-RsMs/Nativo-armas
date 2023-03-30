<?php 
session_start();
include("../header.php");
include("Login ou n.php");
?>
<div>
    <div style="float: left">
        <img src="../Imagens/garrafa.jpg" width="530" height="400">
    </div>
    <div>
        <h1>Garrafa Térmica</h1>
        <p>|Uma garrafa térmica capaz de manter seus líquidos <br>quentes(ou frios) por, em média, 8 horas</p>
        <br>
        <p>|Características:<br>
                -Fabricada: Avaré, São Paulo, Brasil, 2/2022<br>
                -Armazenagem: 2 litros<br>
                -Alça de ombro acompanha<br>
                -Filtro de água acompanha<br>
                -Quantidade:<?php $nome = "Garrafa"; include("quantidade.php"); ?>
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
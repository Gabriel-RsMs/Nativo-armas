<?php 
session_start();
include("../header.php");
include("Login ou n.php");
?>
<div>
    <div style="float: left">
        <img src="../Imagens/tenda.jpg" width="530" height="400">
    </div>
    <div>
        <h1>Tenda(15m²)</h1>
        <p>|Uma tenda larga e resistente, capaz de armazenar<br> equipamento e local de descanso para até 5 homens</p>
        <br>
        <p>|Características:<br>
                -Fabricada: Buenos Aires, Buenos Aires, Argentina, 8/2020<br>
                -Dimensões:3X5X2.5 metros <br>
                -Redes de mosquitos e aberturas para ventilação<br>
                -Estacas de aço carbonizado<br>
                -Quantidade:<?php $nome = "Tenda"; include("quantidade.php"); ?>
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
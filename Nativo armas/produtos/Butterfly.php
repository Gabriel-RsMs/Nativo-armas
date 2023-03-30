<?php 
session_start();
include("../header.php");
include("Login ou n.php");
?>
<div>
    <div style="float: left">
        <img src="../Imagens/butterfly.jpg" width="530" height="400">
    </div>
    <div>
        <h1>Butterfly</h1>
        <p>|Uma faca retrátil e compacta, ideal para ser usada em situação de auto-defesa,  <br> além de truques que se pode aprender a se fazer com ela</p>
        <br>
        <p>|Características:<br>
                -Fabricada: Poitiers, Nova Aquitânia, França, 3/2020<br>
                -Fio de 1/2 mm<br>
                -Material: Aço Inox<br>
                -kit de reparos acompanha<br>
                -Coldre acompanha<br>
                -Quantidade:<?php $nome = "Butterfly"; include("quantidade.php"); ?>
        </p>
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
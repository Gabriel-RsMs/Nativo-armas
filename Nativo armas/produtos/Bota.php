<?php 
session_start();
include("../header.php");
include("Login ou n.php");
?>
<div>
    <div style="float: left">
        <img src="../Imagens/bota.jpg" width="530" height="400">
    </div>
    <div>
        <h1>Par de botas</h1>
        <p>|Um par de botas resistente, pronto para superar todo tipo de<br> terreno e te oferecer o máximo de conforto possível.</p>
        <br>
        <p>|Características:<br>
                -Fabricada: Shanghai, Shanghai, China, 6/2018<br>
                -Tamanho: 30-45(avisar pelo telefone)<br>
                -Material: Couro e algodão<br>
                -Amortecimento por gel<br>
                -Palminhas extra macias<br>
                -Quantidade:<?php $nome = "Bota"; include("quantidade.php"); ?>
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
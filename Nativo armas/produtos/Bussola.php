<?php 
session_start();
include("../header.php");
include("Login ou n.php");
?>
<div>
    <div style="float: left">
        <img src="../Imagens/bussola.jpg" width="530" height="400">
    </div>
    <div>
        <h1>Bussola</h1>
        <p>|Uma bussola moderna equipada com vários marcadores<br> e réguas, ideal para o uso acompanhado de um mapa.</p>
        <br>
        <p>|Características:<br>
                -Fabricada: Nanjing, Jiangsu, China, 6/2018<br>
                -Possui Estabilizador<br>
                -Material: Aço e polímero<br>
                -Tinta que fosforecente<br>
                -Giroscópio<br>
                -Quantidade:<?php $nome = "Bussola"; include("quantidade.php"); ?>
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
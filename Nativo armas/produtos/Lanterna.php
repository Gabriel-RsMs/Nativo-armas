<?php 
session_start();
include("../header.php");
include("Login ou n.php");
?>
<div>
    <div style="float: left">
        <img src="../Imagens/lanterna.jpg" width="530" height="400">
    </div>
    <div>
        <h1>Lanterna</h1>
        <p>|Uma lanterna capaz de uma grande área de iluminação e por<br> longas durações, intensidade e amplitude ajustáveis</p>
        <br>
        <p>|Características:<br>
                -Fabricada: Nanjing, Jiangsu, China, 8/2021<br>
                -Intesidade: 2500 lumens/m²<br>
                -Área abrandgida: 4X5X4 metros<br>
                -Baterias e carregador acompanha<br>
                -Quantidade:<?php $nome = "Lanterna"; include("quantidade.php"); ?>
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
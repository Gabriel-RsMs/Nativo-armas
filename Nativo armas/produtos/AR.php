<?php 
session_start();
include("../header.php");
include("Login ou n.php");
?>
<div>
    <div style="float: left">
        <img src="../Imagens/ar.jpg" width="530" height="400">
    </div>
    <div>
        <h1>AR-15:Rifle de assalto(55.6)</h1>
        <p>|O rifle AR-15, criado nos EUA pela colt,<br> é uma plataforma diversa, com alta adaptabilidade<br> aos desejos do atirador e um preço razoável.<br> Plataforma usada pelas forças armadas dos EUA</p>
        <br>
        <p>|Características:<br>
                -Fabricada: Columbus, Ohio, EUA, 5/2021<br>
                -Cano:23,3 cm<br>
                -Capacidade: 30 munições<br>
                -Mira de ferro de 100-300 metros<br>
                -Trilho Picatinny em 3 lados(cima, esquerda e direita)<br>

                -Quantidade:<?php $nome = "AR"; include("quantidade.php"); ?>
        </p>
        <br>
        <a href="Compra.php">|Comprar</a>
        <br>
    </div>
</div>
<a href="../main.php">| Página inicial</a>
<hr>
<?php include("../footer.php")?>
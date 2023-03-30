<?php 
session_start();
include("../header.php");
include("Login ou n.php");
?>
<div>
    <div style="float: left">
        <img src="../Imagens/glock.jpg" width="530" height="400">
    </div>
    <div>
        <h1>Glock 17(9mm)</h1>
        <p>|A pistola modelo 17 da Glock, empresa austríaca,<br> usada por forças militares, policiais e civis uma arma<br> versátil de alta capacidade e fácil manuseio,<br> infelizmente com oferta excassa nacional</p>
        <br>
        <p>|Características:<br>
                -Fabricada: Austin, Texas, EUA, 10/2020<br>
                -Cano:8 cm<br>
                -Capacidade: 17 munições<br>
                -Segurança de gatilho<br>
                -Pente extendido acompanha<br>
                -Quantidade:<?php $nome = "Glock"; include("quantidade.php"); ?>
        </p>
        <br>
        <a href="Compra.php">|Comprar</a>
        <br>
    </div>
</div>
<a href="../main.php">| Página inicial</a>
<hr>
<?php include("../footer.php")?>
<?php 
session_start();
include("../header.php");
include("Login ou n.php");
?>

<div>
    <div style="float: left">
        <img src="../Imagens/single.jpg" width="530" height="400">
    </div>
    <div>
        <h1>Colt Single Action Army(.45 Colt)</h1>
        <p>|O revólver de ação simples da colt que fora adotado pelo exército dos EUA no século 19,<br> mesmo sendo um design antiquado, ainda se configura como<br> uma boa arma para animais de pequeno porte ou<br> arma secundária econômica</p>
        <br>
        <p>|Características:<br>
                -Fabricada: Austin, Texas, EUA, 12/2020<br>
                -Cano:10 cm<br>
                -Capacidade: 6 munições<br>
                -kit de peças reserva acompanha<br>
                -kit de recarregar munições<br>

                -Quantidade:<?php $nome = "Single"; include("quantidade.php"); ?>
        </p>
        <br>
        <a href="Compra.php">|Comprar</a>
        <br>
    </div>
</div>
<a href="../main.php">| Página inicial</a>
<hr>
<?php include("../footer.php")?>
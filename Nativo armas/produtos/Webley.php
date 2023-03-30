<?php 
session_start();
include("../header.php");
include("Login ou n.php");
?>
<div>
    <div style="float: left">
        <img src="../Imagens/webley.jpg" width="530" height="400">
    </div>
    <div>
        <h1>Webley MK IV(.32 British)</h1>
        <p>|O icônico revolver britânico webley, que serviu o Reino Unido do final do século XIX até metade do século XX,<br> de construção rígida e simples é tanto um revolver barato e fácil de manusear</p>
        <br>
        <p>|Características:<br>
                -Fabricada: Liverpool, Ussex, UK, 3/1912<br>
                -Cano:7 cm<br>
                -Capacidade: 6 munições<br>
                -Carregador rápido incluso<br>
                -Corda para sinto incluso<br>

                -Quantidade:<?php $nome = "Webley"; include("quantidade.php"); ?>
        </p>
        <br>
        <a href="Compra.php">|Comprar</a>
        <br>
    </div>
</div>
<a href="../main.php">| Página inicial</a>
<hr>
<?php include("../footer.php")?>
<?php 
session_start();
include("../header.php");
include("Login ou n.php");
?>
<div>
    <div style="float: left">
        <img src="../Imagens/1911.png" width="530" height="400">
    </div>
    <div>
        <h1>Colt M1911(.45 ACP)</h1>
        <p>|A pistola M1911, patente da Colt, fabricada localmente pela Taurus,<br> usada durante grande maioria do século XX pelo<br> exército americano posa como uma alternativa <br>genérica de pistola semi-automática de médio calibre.</p>
        <br>
        <p>|Características:<br>
                -Fabricada: Belo horizonte, Minas Gerais, Brasil, 7/2020<br>
                -Cano:6 cm<br>
                -Capacidade: 12 munições<br>
                -Mira de ferro flip 50-100 metros<br>
                -Trilho Picatinny inferior<br>
                -Quantidade:<?php $nome = "1911"; include("quantidade.php"); ?>
        </p>
        <br>
        <a href="Compra.php">|Comprar</a>
        <br>
    </div>
</div>

<br>
<a href="../main.php">|Página inicial</a>
<hr>
<?php include("../footer.php")?>

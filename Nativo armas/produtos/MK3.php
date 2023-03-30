<?php 
session_start();
include("../header.php");
include("Login ou n.php");
?>
<div>
    <div style="float: left">
        <img src="../Imagens/MK3.jpg" width="530" height="400">
    </div>
    <div>
        <h1>Faca MK 3</h1>
        <p>|Uma faca militar desenvolvida na america, sendo tanto leve quanto versátil<br> apresentando serras e abridores de latas</p>
        <br>
        <p>|Características:<br>
                -Fabricada: Volta Redonda, Rio de Janeiro, Brasil, 3/2022<br>
                -Material: Aço carbonizado<br>
                -Fio 1/2 mm<br>
                -Bainha acompanha<br>
                -Quantidade:<?php $nome = "MK3"; include("quantidade.php"); ?>
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
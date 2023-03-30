<script src="../../jquery-3.6.1.min.js"></script>
<?php
session_start();
if($_SESSION['erro'] == 1){
        echo "<p>O valor inserido está incorreto.</p>";
}else if($_SESSION['erro'] == 2){
        echo "<p>Infelizmente o produto esta fora de estoque, volte mais tarde.</p>";
}else if($_SESSION['erro'] == 3){
        echo "<p>Nenhum produto fora selecionado.</p>";
}else if($_SESSION['erro'] == 4){
        echo "<p>A quantide requerida supera a oferecida.</p>";
}else if($_SESSION['erro'] == 5){
        echo "<p>É necessário que esteja logado para realizar uma compra</p>";
}
include("../header.php") ?>
<form method="POST" action="Confirma.php">
        <input name="email" type="email" placeholder="E-mail"><br>
        <input name="nome" type="text" placeholder="Nome"><br>
        <input name="endereco" type="text" placeholder="Endereço"><br>
        <input name="codigo" type="text" placeholder="CRAF"><br>
        <?php include("menuCompra.php")?><br>
        <input name="qtd" type="text" placeholder="Quantidade"><br>
        <input name="cartão" type="text" placeholder="Numero do cartão"><br>
        <input name="cep" type="text" placeholder="CEP"><br>
        <input type="submit" placeholder="Comprar">
</form>
<br>
<a href="../main.php">| Página inicial</a>
<hr>
<?php include("../footer.php") ?>
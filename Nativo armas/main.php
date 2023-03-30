<script src="../jquery-3.6.1.min.js"></script>
<?php session_start();
include("header.php");
include("menu.php");
echo "<br>";
//Checa a se há um login caso n da a opção
if(!isset($_SESSION['login'])){
    $_SESSION['login'] = 0;
    $_SESSION['erro'] = 0;
    $_SESSION['compra'] = 0;
    $_SESSION['qtd'] = 0;
    $_SESSION['nome'] = '';
    $_SESSION['preço'] = 0;
}
$_SESSION['preço'] = 0;
$_SESSION['nome'] = '';
$_SESSION['erro'] = 0;
$_SESSION['qtd'] = 0;
if($_SESSION['login'] != 1){
    echo "<br>";
    echo '<a href="login.php">Cadastro/Login</a>';
    echo "<br>";
    echo "<br>";
}else{
    echo "<br>";
    echo '<a href="logout.php">Logout</a>';
    echo "<br>";
    echo "<br>";
}
?>
    <h1>Produtos em destaque!</h1>
    <hr>
   <table>
       <tr>
           <th><img src="Imagens/1911.png" width="330" height="200"></th>
           <th><img src="Imagens/taurus.jpg" width="330" height="200"></th>
           <th><img src="Imagens/corda.jpg" width="330" height="200"></th>
           <th><img src="Imagens/lanterna.jpg" width="330" height="200"></th>
       </tr>

       <tr>
            <th>M1911: <a href="Produtos/M1911.php">Ficha técnica</a><a href="Produtos/Compra.php">Comprar</a></th>
            <th>Taurus Raging Bull: <a href="Produtos/Taurus.php">Ficha técnica</a><a href="Produtos/Compra.php">Comprar</a></th>
            <th>Corda(100m): <a href="Produtos/Corda.php">Ficha técnica</a><a href="Produtos/Compra.php">Comprar</a></th>
            <th>Lanterna: <a href="Produtos/Lanterna.php">Ficha técnica</a><a href="Produtos/Compra.php">Comprar</a></th>
        </tr>
   </table>
<hr>
</body>
<?php include("footer.php")?>

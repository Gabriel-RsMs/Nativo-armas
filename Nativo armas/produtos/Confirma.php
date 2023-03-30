<?php
session_start();
$_SESSION['erro'] = 0;
$inv=fopen("Inventário.txt", "r");
$qtd = $_POST['qtd'];
$_SESSION['qtd'] = $qtd;
$nome = $_POST['itens'];
$_SESSION['nome'] = $nome;
$preço = 0;

while(($linha = fgets($inv)) != NULL){
    $parte = explode("/", $linha);
        if($qtd == 0 || $qtd == NULL || $qtd < 0){
            $_SESSION['erro'] = 1;
            header("Location: Compra.php");
        }else if($parte[0] == $nome && $parte[2] == 0){
            $_SESSION['erro'] = 2;
            header("Location: Compra.php");
        }else if($nome == "nada"){
            $_SESSION['erro'] = 3;
            header("Location: Compra.php");
        }else if($parte[0] == $nome && $parte[2] < $qtd){
            $_SESSION['erro'] = 4;
            header("Location: Compra.php");
        }else if($_SESSION['login'] == 0){
            $_SESSION['erro'] = 5;
            header("Location: Compra.php");
        }else if($parte[0] == $nome){
            $preço = $parte[1] * $qtd;
            $_SESSION['preço'] = $preço;
            header("Location: Confirma_página.php");
        }
}
fclose($inv);
?>
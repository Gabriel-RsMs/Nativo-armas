<?php
session_start();

$vetor = file("Inventário.txt");
$aux = 0;

foreach($vetor as $indice=>$valor) {

    $parte = explode("/", $valor);
    if($parte[0] == $_SESSION['nome']){

        $aux = $parte[2] - $_SESSION['qtd'];
        $vetor[$indice] = $_SESSION['nome']. "/". $parte[1]. "/". $aux . "/ \n";
        break;
    }
}

file_put_contents("Inventário.txt", $vetor);

header("Location: ../main.php");
?>
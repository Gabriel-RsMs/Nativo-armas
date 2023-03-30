<?php
$inventario=fopen("Inventário.txt", "r");
while(($linha = fgets($inventario)) != NULL){
    $parte = explode("/", $linha);
    if($parte[0] == $nome){
        echo $parte[2];
    }
}
fclose($inventario);
?>
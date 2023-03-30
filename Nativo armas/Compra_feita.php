<script src="../jquery-3.6.1.min.js"></script>
<?php
session_start();
$inv = fopen("Inventário.txt", "a+");
while(($linha = fgets($login)) != NULL){
    $parte = explode("/", $linha);
    if($parte[0] == $_SESSION['nome']){
        
    }
}
?>
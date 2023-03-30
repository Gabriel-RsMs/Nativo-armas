<?php 
session_start();
include("../header.php");
?>
<p>O valor final será <?php echo $_SESSION['preço']?></p>
<p>Deseja continuar?</p>
<a href="Compra_feita.php">Confirmar</a>
<a href="Compra.php">Cancelar</a>
<hr>
<?php include("../footer.php")?>
<?php include("header.php")?>
<script src="../jquery-3.6.1.min.js"></script>
<!--
O script a seguir faz as divs 1 e 2 aparecerem com um certo atraso na página
-->
<script>
        $(document).ready(function(){
          $(window).on("load", function(){
            $("#div1").delay("fast").fadeIn();
            $("#div2").delay("fast").fadeIn();
          ;})       
        });
        
    </script>
<h1>Registrar</h1>
<div id="div1" style="display: none;">
<form method="POST" action="registra.php">
        <input name="email" type="email" placeholder="E-mail"><br>
        <input name="nome" type="text" placeholder="Nome"><br>
        <input name="senha" type="text" placeholder="Senha"><br>
        <input name="data" type="date" placeholder="Data de Nascimento"><br>
        <input type="submit" placeholder="Registrar">
</form>
</div>
<hr>
<h1>Login</h1>
<div id="div2" style="display: none;">
<form method="POST" action="checa.php">
        <input name="nome" type="text" placeholder="Nome"><br>
        <input name="senha" type="text" placeholder="Senha"><br>
        <input type="submit" placeholder="Logar">
</form>
</div>
<hr>
<a href="main.php">| Página inicial</a>
<?php include("footer.php")?>
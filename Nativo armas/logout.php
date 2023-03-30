<script src="../jquery-3.6.1.min.js"></script>
<?php
    
    session_start();
    unset($_SESSION['login']);
    header('Location: main.php');
?>
<?php
    session_destroy();
    include("conexao.php");
    mysqli_close($conexao);    
    header("Location: index.php");
?>
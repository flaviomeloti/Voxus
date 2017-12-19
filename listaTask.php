<?php
    header('Content-type: text/html; charset=iso-8859-1');
    include("conexao.php");
    $id_usuario =  $_SESSION['usuId'];
    $valida = $_SESSION['$valida'];
    $buscaTasks = "SELECT * FROM tasks WHERE id_usuario = $id_usuario";
    $resul = mysqli_query($conexao, $buscaTasks);
    while ($resultado = mysqli_fetch_array($resul, MYSQLI_ASSOC)) {
            echo "<option value='".$resultado['nome']."'>".$resultado['nome']."</option>"; 
    }
?>
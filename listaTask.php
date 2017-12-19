<?php
    session_start();
    include("conexao.php");
    $id_usuario =  $_SESSION['usuId'];
    $valida = $_SESSION['$valida'];
    $buscaTasks = "SELECT * FROM tasks WHERE id_usuario = $id_usuario";
    $verifica = mysqli_query($conexao, $buscaTasks);
    $verifica = mysqli_fetch_assoc($verifica);
    if(!isset($verifica)){
        echo "<option value='vazio'>Sem Tasks</option>";
        $_SESSION['buttonDisableList'] = '<button type="submit" class="btn btn-secondary" disabled>OK</button>';
    }else{
        $resul = mysqli_query($conexao, $buscaTasks);
        while ($resultado = mysqli_fetch_array($resul, MYSQLI_ASSOC)) {
            echo "<option value='".$resultado['id']."'>".$resultado['nome']."</option>"; 
        }
    }

?>
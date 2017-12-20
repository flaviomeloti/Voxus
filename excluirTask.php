<?php
    session_start();
    include("conexao.php");
    $id = $_SESSION['idTask'];
    $buscaTask = "SELECT * FROM tasks WHERE id = '$id'";
    $resul = mysqli_query($conexao, $buscaTask);
    $resultado = mysqli_fetch_assoc($resul);
    unlink("anexos/".$resultado['anexo']);
    $excluirTask = "DELETE FROM tasks WHERE id = '$id'";
    $delete = mysqli_query($conexao, $excluirTask);
    header("Location: tarefas.php");
?>
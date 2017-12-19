<?php
    session_start();
    include("conexao.php");
    $id = $_SESSION['idTask'];
    echo $id;
    $excluirTask = "DELETE FROM tasks WHERE id = '$id'";
    $delete = mysqli_query($conexao, $excluirTask);
    header("Location: tarefas.php");
?>
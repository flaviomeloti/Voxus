<?php
    session_start();
    include("conexao.php");
    $nome   = $_POST["nome"];
    $descricao  = $_POST["descricao"];
    $id_usuario =  $_SESSION['usuId'];
    $novaTask = "INSERT INTO `tasks` (`id`, `id_usuario`, `nome`, `descricao`) VALUES (NULL, '$id_usuario', '$nome', '$descricao')";
    $insert = mysqli_query($conexao, $novaTask);
    header("Location: tarefas.php");
?>
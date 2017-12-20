<?php
    session_start();
    include("conexao.php");
    $nome   = $_POST["nome"];
    $descricao  = $_POST["descricao"];
    $id_usuario =  $_SESSION['usuId'];
    $nomeAnexo;
    if($_FILES["anexo"]["error"] == 0){
        $extensao = strtolower(substr($_FILES['anexo']['name'], -4));
        $nomeAnexo = time().$extensao;
        $dir = "anexos/";
        move_uploaded_file($_FILES['anexo']['tmp_name'], $dir.$nomeAnexo);
    }


    $novaTask = "INSERT INTO `tasks` (`id`, `id_usuario`, `nome`, `descricao`, `anexo`) VALUES (NULL, '$id_usuario', '$nome', '$descricao', '$nomeAnexo')";
    $insert = mysqli_query($conexao, $novaTask);
    header("Location: tarefas.php");
?>
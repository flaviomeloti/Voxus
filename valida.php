<?php
    session_start();
    include("conexao.php");    
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $buscaUsuario = "SELECT * FROM usuarios WHERE email = '$email' && senha = '$senha'"; //Comando que irá buscar email e senha no BD
        $resul = mysqli_query($conexao, $buscaUsuario); //Consulta nesse BD (conexao) o seguinte comando (buscaUsuario)
        $resultado = mysqli_fetch_assoc($resul); //Resultado da consulta
        if(isset($resultado)){
            $_SESSION['usuId'] = $resultado['id'];
            $_SESSION['usuNome'] = $resultado['nome'];
            $_SESSION['usuEmail'] = $resultado['email'];
            header("Location: tarefas.php");
        }else{
            $_SESSION['erroLogin'] = "Usuário ou senha inválido";
            header("Location: index.php");
        }
?>
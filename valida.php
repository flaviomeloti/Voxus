<?php
    session_start();
    include("conexao.php");    
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $senha = md5($senha);
        $buscaUsuario = "SELECT * FROM usuarios WHERE email = '$email' && senha = '$senha'";
        $resul = mysqli_query($conexao, $buscaUsuario);
        $resultado = mysqli_fetch_assoc($resul);
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
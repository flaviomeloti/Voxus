<?php    
    session_start();
    include("conexao.php");
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confere = "SELECT * FROM usuarios WHERE email = '$email'";
    $resul = mysqli_query($conexao, $confere);    
    $resultado = mysqli_fetch_assoc($resul);
    if(isset($resultado)){
        $_SESSION['erroCadastro'] = "E-mail já cadastrado";
        header("Location: cadastro.php");
    }else{
        $cadastraUsuario = "INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES (NULL, '$nome', '$email', '$senha')";
        $resul = mysqli_query($conexao, $cadastraUsuario);
        if(isset($resul)){
            echo '
                <script>
                    alert("Usuário cadastrado com sucesso!");
                    window.location.href = "index.php";
                </script>
            ';
        }
    }
    
?>
<?php
    session_start();
?>
<!DOCTYPE html>
  <html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <title>MyTasks</title>
        <meta name="description" content="Minhas Tarefas">
        <meta name="author" content="Flávio Meloti">    
        <meta name="keywords" content="tarefa, task, online">      
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/css/signin.css">        
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="icon" href="https://www.seald.io/img/3_PartThree_IconTitle.svg" type="image/x-icon">
    </head>
    <body>        
        <header class="index">
            <h1 class="display-4">Bem vindo ao MyTasks</h1>
            <p>Todas suas tarefas em um só lugar</p>
        </header>
        <div class="container">
            <form class="form-signin" action="valida.php" method="post">
                <h2 class="form-signin-heading">Minhas tarefas</h2>
                    <label for="email" class="sr-only">E-mail</label>
                    <input type="email" class="form-control" name="email" placeholder="E-mail" required>            
                    <label for="senha" class="sr-only">Senha</label>
                    <input type="password" class="form-control" name="senha" placeholder="Senha" required>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me"> Lembrar
                        </label>                    
                    </div>   
                    <button class="btn btn-lg btn-primary btn-block" type="submit" value="entrar" name="entrar" id="entrar">Entrar</button>
            </form>   
            <form class="form-signin" action="cadastro.php" method="post">
                <button class="btn btn-lg btn-secondary btn-block" type="submit" value="cadastro" name="cadastro" id="cadastro">Cadastrar</button>
            </form>         
            <p style="text-align:center; color:red; margin:3px">
                <?php 
                    if(isset($_SESSION['erroLogin'])){
                        echo $_SESSION['erroLogin'];
                        unset ($_SESSION['erroLogin']);
                    }
                ?>
            </p>
        </div>
        <div class"containercontainer-fluid">
            <footer class="index">
                <a>Flávio Meloti @ 2017</a>
            </footer>
        </div>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"> </script>         
    </body>
  </html>
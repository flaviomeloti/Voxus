<?php
    session_start(); 
    if(!isset($_SESSION['usuId'])){
        header("Location: index.php");
    }
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
        <header>
            <h1 class="display-4">MyTasks</h1>
            <p>Bem vindo, <?php echo $_SESSION['usuNome']; ?></p>
        </header>
        <ul class="nav nav-tabs">        
            <li class="nav-item">
                <a class="nav-link active" href="tarefas.php">MyTasks</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="novaTarefa.php">New Task</a>
            </li>
            <li class="nav-item">
						<a class="nav-link" href="editaTarefa.php">Edit/Delete Task</a>
			</li>
            <li class="nav-item">
                <a class="nav-link" href="sair.php">Sair</a>
            </li>
        </ul>
        <div class="container">
            </br>
            <h2 class="form-signin-heading">Minhas Tasks</h2>
                <?php
                    include("mytasks.php");
                ?>
        </div>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"> </script>
    </body>
</html>

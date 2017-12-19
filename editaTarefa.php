<?php
    session_start();
    header('Content-type: text/html; charset=iso-8859-1');
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
        <header class="task">
            <h1 class="display-4">MyTasks</h1>
            <p>Bem vindo, <?php echo $_SESSION['usuNome']; ?></p>
        </header>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="tarefas.php">MyTasks</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="novaTarefa.php">New Task</a>
            </li>
            <li class="nav-item">
						<a class="nav-link active" href="editaTarefa.php">Edit/Delete Task</a>
			</li>
            <li class="nav-item">
                <a class="nav-link" href="sair.php">Sair</a>
            </li>
        </ul>
        <div class="container">
        </br>
            <form class="form-signin" method="POST" action="updateTask.php">
                <select name="tasks" class="custom-select">
                    <option value="task">Selecione a Task</option>
                    <?php
                        include("listaTask.php");
                    ?>
                </select>
                <button type="submit" class="btn btn-sm btn-primary">OK</button>
            </form>
            </div>
            <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"> </script>
    </body>
</html>
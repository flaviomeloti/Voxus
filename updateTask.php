<?php
    session_start();
    header('Content-type: text/html; charset=iso-8859-1');
    include("conexao.php");
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
<?php

    if(isset($_POST['nome'])){
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];        
        $id = $_SESSION['idTask'];
        echo $id;
        $editaTask = "UPDATE `tasks` SET `nome` = '$nome', `descricao` = '$descricao' WHERE `tasks`.`id` = '$id' ";
        $update = mysqli_query($conexao, $editaTask);
        header("Location: tarefas.php");
    }else{
        $select = $_POST['tasks'];
        $buscaTask = "SELECT * FROM tasks WHERE nome = '$select'";
        $resul = mysqli_query($conexao, $buscaTask);
        $resultado = mysqli_fetch_assoc($resul);
        echo '
            <form class="form-signin" method="POST" action="#">
                <h2 class="form-signin-heading">Edicao Tasks</h2>
                </br>
                <label for="name" class="sr-only">Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Nome da task" required/></br>
                <label for="descricao" class="sr-only">Descrição</label>
                <textarea rows="4" class="form-control" name="descricao" placeholder="Descricao da task" required></textarea>
                <br/>
                <button type="submit" class="btn btn-lg btn-primary btn-block">Editar Task</button>
            </form>
            <form class="form-signin" method="POST" action="excluirTask.php">
                <button type="submit" class="btn btn-lg btn-primary btn-block">Excluir Task</button>
            </form>
        ';
        $_SESSION['idTask'] = $resultado['id'];
    }    
?>
            </div>
            <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"> </script>
    </body>
</html>
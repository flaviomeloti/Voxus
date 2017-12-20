<?php
	session_start(); 
	header('Content-type: text/html; charset=iso-8859-1');
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
				<a class="nav-link" href="tarefas.php">MyTasks</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active" href="novaTarefa.php">New Task</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="editaTarefa.php">Edit/Delete Task</a>
			</li>
			<ul class="nav nav-tabs" id="bSair">
			<li class="nav-item">
				<a class="nav-link active" href="sair.php">Sair</a>
			</li>
            </ul>
		</ul>
		<div class="container">
			</br>
			<form class="form-signin" method="POST" enctype="multipart/form-data" action="enviaTask.php">
				<h2 class="form-signin-heading">Novas Tasks</h2>
				</br>
				<label for="name" class="sr-only">Nome</label>
				<input type="text" class="form-control" name="nome" placeholder="Nome da task" required/>
		
				<label for="descricao" class="sr-only">Descrição</label>
				<textarea rows="4" class="form-control" name="descricao" placeholder="Descricao da task" required></textarea>
				</br>
				<label for="anexo" class="sr-only">Anexo</label>
				<input type="file" class="form-control" name="anexo"/><br/>
				<br/><br/>
				<button type="submit" class="btn btn-lg btn-primary btn-block">Cadastrar Task</button>
			</form>
		</div>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"> </script>
	</body>
</html>
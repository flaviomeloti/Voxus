<?php
    header('Content-Type: text/html; charset=iso-8859-1');
    include("conexao.php");
    $id_usuario =  $_SESSION['usuId'];
    $buscaTasks = "SELECT * FROM tasks WHERE id_usuario = $id_usuario";
    $resul = mysqli_query($conexao, $buscaTasks); 
    while ($resultado = mysqli_fetch_array($resul, MYSQLI_ASSOC)) {
        echo "
        </br>
        ";
        $id = $resultado['id'];
        echo "<h3><small class='text-muted'>Tarefa:</small></h3> ".$resultado['nome'] . "</br></br>";
        echo "<h3><small class='text-muted'>Descricao:</small></h3> ".$resultado['descricao'] . "</br>";
        echo "<hr>";        
    }
    echo "</br>";
?>
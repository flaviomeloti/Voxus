<?php
    header('Content-Type: text/html; charset=iso-8859-1');
    include("conexao.php");
    $id_usuario =  $_SESSION['usuId'];
    $buscaTasks = "SELECT * FROM tasks WHERE id_usuario = $id_usuario";
    $verifica = mysqli_query($conexao, $buscaTasks); 
    $verifica = mysqli_fetch_assoc($verifica);
    if(!isset($verifica)){
        echo "</br><h3><small class='text-muted'>Sem Tasks</small>";
    }
    $resul = mysqli_query($conexao, $buscaTasks); 
    while ($resultado = mysqli_fetch_array($resul, MYSQLI_ASSOC)) {
        echo "
        </br>
        ";
        $id = $resultado['id'];
        echo "<h3><small class='text-muted'>Tarefa:</small></h3> ".$resultado['nome'] . "</br></br>";
        echo "<h3><small class='text-muted'>Descricao:</small></h3> ".$resultado['descricao'] . "</br>";
        if($resultado['anexo'] <> ""){
            echo "</br><a href='anexos/".$resultado['anexo']."' target='_blank'>Anexo</a>";
        }        
        echo "<hr>";        
    }
    echo "</br>";
?>
<?php
    @$conexao = mysqli_connect('localhost','root','','mytasks');
    if(!$conexao){
        die("Falha na conexão com o banco de dados.");
    }else{
        //echo "Conexão realizada com sucesso.";
    }
?>
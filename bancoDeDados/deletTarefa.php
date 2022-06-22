<?php

    require_once ("conexao.php");
    session_start();
    $id = $_GET['id'];

    $sql = "DELETE FROM tarefas WHERE id = $id ";

    $resultado = mysqli_query($conn, $sql);

    if($resultado == true){
        header("Location:../index.php");
    }
<?php 
    require_once("conexao.php");

    session_start();

    $titulo = $_POST['titulo'];
    $data = $_POST['data'];
    $recompensa = $_POST['recompensa'];
    $idUsuario = $_SESSION['id'];

    $sql = "INSERT INTO tarefas(titulo, dataT, recompensa, usuarioID)
            VALUES ('$titulo', '$data', '$recompensa', $idUsuario)
            ";


    $resultSql = mysqli_query($conn, $sql);

    if ($resultSql == TRUE) {
        header("location:../index.php");
    }
?>
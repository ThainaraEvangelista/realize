<?php 
    require_once("conexao.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);
    $perfil = 2;

    $sql = "INSERT INTO usuarios(nome, email, senha, perfisID)
            VALUES ('$nome', '$email', '$senha', $perfil)
            ";

    $resultSql = mysqli_query($conn, $sql);

    if ($resultSql == TRUE) {
        header("location:../login.php");
    }
?>
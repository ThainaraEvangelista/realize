<?php 
    
    session_start();
    if (!isset($_SESSION['email']) and !isset($_SESSION['perfil'])) {
       header("location: login.php?erro=1");
    }

    require_once("bancoDeDados/conexao.php");
?>
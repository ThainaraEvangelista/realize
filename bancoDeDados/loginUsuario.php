<?php 
    require_once ("conexao.php");
     
    session_start();

    $email = $_POST['login'];
    $senha = md5($_POST['senha']);

    $query = "SELECT  * FROM  $dbname.usuarios WHERE email = '".$email."' AND senha = '".$senha."' ";

    $resultQuery = mysqli_query($conn, $query);

    

   

    if (mysqli_num_rows($resultQuery) > 0) {
        
        $dados = mysqli_fetch_array($resultQuery);

        $_SESSION['id'] = $dados['id'];
        $_SESSION['nome'] = $dados['nome'];
        $_SESSION['email'] = $dados['email'];
        $_SESSION['perfil'] = $dados['perfisID'];
        header('location:http://'.$site.'index.php');
    }else{
        echo "<script>alert('login ou senha incorreto(a), tente novamente');</script>";

        unset ($_SESSION['login']);
        unset ($_SESSION['senha']);
        echo $login;
        echo $senha;
        header('location:http://'.$site.'login.php?erro=2');
    }
 ?>
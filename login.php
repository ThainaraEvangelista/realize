<?php
    if (isset($_GET['erro'])) {
        if ($_GET['erro'] == 1) {
            $erro = "acesso negado";        
        }else  if ($_GET['erro'] == 2) {
        $erro = "email ou senha invalidos";
        }else if($_GET['erro'] == 3){
            $erro = "Logout realizado com sucesso!";
        }
    }else{
        $erro = "";
    }
       
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>realize - login</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Madurai:wght@300&family=Pacifico&family=Ubuntu:ital,wght@0,300;0,400;1,300;1,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="corpo-login">

        <h1>Realize</h1>

        <hr>
        <span><?php echo $erro;?></span>
        <form class="form-login" action="bancoDeDados/loginUsuario.php" method="post">
        
            <input type="text" name="login" placeholder="email:">
            <input type="password" name="senha" placeholder="senha:">
            
            <button class="btn-login" type="submit">entrar</button>
           
        
        </form>
        <p> não tem conta? <br><a href="cadastro.php">cadastre-se</a></p>

    </div>


</body>
</html>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>realize - cadastro</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="corpo-login">

<h1>Realize</h1>

<hr>
<!-- <span><?php echo $erro;?></span> -->
<form class="form-login" action="bancoDeDados/cadastroUsuario.php" method="post">

    <input type="text" name="nome" placeholder="nome:">
    <input type="email" name="email" placeholder="email:">
    <input type="password" name="senha" id="senha" placeholder="senha:">
    <input type="password" name="senha2" id="senha2" onkeyup="confirmaSenha()" placeholder="confirmar senha:">
  
    <button class="btn-login" type="submit">cadastrar</button>
   

</form>
<p> voltar para login? <br><a href="login.php">clique aqui</a></p>

</div>

<script>
    function confirmaSenha(){
        $senha = document.getElementById("senha").value;
        $senha2 = document.getElementById("senha2").value;
        if ($senha != $senha2) {
            document.getElementById("senha2").style.border = "red 1px solid";
        }else{
            document.getElementById("senha2").style.border = "blue 1px solid";
        }
    }
</script>
</body>
</html>
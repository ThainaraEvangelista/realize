<?php
require_once("barreira.php");


if (isset($_FILES['arquivo'])) {

    $arquivo = $_FILES['arquivo'];

    if ($arquivo['error'])
        die("falha ao enviar arquivo");

    if ($arquivo['size'] > 3145728)
        die("tamanho maximo permitido: 3MB!");


    $pasta = "arquivos/";
    $nomeArquivo = $arquivo['name'];
    $novoNomeArquivo = uniqid();
    $ext = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));

    if ($ext != "pdf")
        die("somente pdfs sao aceitos");
    
    $ok = move_uploaded_file($arquivo["tmp_name"], $pasta . $novoNomeArquivo . "." . $ext);

    //  if($ok){
    //         echo"<p> acessar arquivo <a target=\"_blank\" href=\"arquivos/$novoNomeArquivo.$ext\" >aqui</a> </p>";
    
    //  }else
    //     echo "<p>falaha ao enviar arquivo</p>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>realize - estudar</title>

    <link rel="stylesheet" href="pdfStyle.css">
</head>

<body>
    <!-- barra de navegaçao -->
    <div>
        <nav class="navB">
            <a class="active" href="index.php">Realize</a>
            <a href="cadastroTarefa.php">cadastrar tarefa</a>
            <a href="estudar.php">estudar pdfs</a>
            <a href="pomodoro.php">meu pomodoro</a>
            <a class"btnSair" href="bancoDeDados/sair.php">sair</a>
        </nav>
    </div>

   

        <!-- formulario para encontrar o pdf -->
        <div class="achar-pdf">
            <form class="form-pdf" enctype="multipart/form-data" action="" method="POST">

                <input class="inputpdf" type="file" name="arquivo" type="file" placeholder="escolher pdf"><br>
                

                <button class="btn-pdf" name="upload" type="submit">estudar pdf</button>
            </form>

        

        
            <?php 
            if($ok){
                    echo"<p> <a target=\"_blank\" href=\"arquivos/$novoNomeArquivo.$ext\" >visualizaar arquivo</a> </p>";
            
                }else
                echo "<p>falha ao enviar arquivo</p>";
            
            ?>

        </div>

</body>

</html>
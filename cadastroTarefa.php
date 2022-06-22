<?php
require_once("barreira.php");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>realize - cadastro tarefa</title>

    <link rel="stylesheet" href="cadTarefaStile.css">
</head>

<body>
    <!-- menu -->
    <nav>
        <a class="active" href="index.php">Realize</a>
        <a href="cadastroTarefa.php">cadastrar tarefa</a>
        <a href="estudar.php">meus pdfs</a>
        <a href="pomodoro.php">meu pomodoro</a>
        <a class"btnSair" href="bancoDeDados/sair.php">sair</a>
    </nav>

    <div class="corpo-form-tarefa">
        <h2>cadastro de tarefas</h2>

        <hr>
        <!-- <span><?php echo $erro; ?></span> -->
        <form class="form-tarefa" action="bancoDeDados/cadTarefa.php" method="post">

            
            <input type="text" name="titulo" placeholder="ex: prova de português">

            
            <input type="date" name="data" placeholder="">

            
            <input type="text" name="recompensa" placeholder="ex: comer um bombom">

            <button class="btn-form-tarefa" type="submit">cadastrar</button>


        </form>
    </div>

</body>

</html>
<?php 
    require_once("barreira.php");
    $id =  $_SESSION['id'];
   
    $sql = "SELECT * FROM tarefas WHERE usuarioID = $id ORDER BY dataT";
    $resultTarefas = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>realize - home</title>

    <link rel="stylesheet" href="indexStile.css">
</head>
<body>
    <!-- barra de navegaçao -->
    <nav>
        <a class="active" href="index.php">Realize</a>
        <a href="cadastroTarefa.php">cadastrar tarefa</a>
        <a href="estudar.php">estudar pdf</a>
        <a href="pomodoro.php">meu pomodoro</a>
        <a class"btnSair" href="bancoDeDados/sair.php">sair</a>
    </nav>

  
    <div class="corpoTarefas">

        <div class="titTarefa"><h2>minhas tarefas</h2></div>

        <table>

            <tr class="titulos">
                <td>titulo</td>
                <td>data</td>
                <td>recompensa</td>
                <td>opçoes</td>
            </tr>

            <!-- aqui em baixo o terceiro td é para mostrar a recompensa ou punicao e outro é pra opcoes -->
            <?php foreach ($resultTarefas as $tarefa){


                $codTarefa = $tarefa['id'] ?>

                <tr >
                    <td><?=$tarefa['titulo']?></td>
                    <td><?=date("d/m/y", strtotime($tarefa['dataT']));?></td>

                    <td> <?php
                            if ($tarefa['statos']==1){
                            $recom = $tarefa['recompensa'];
     
                            }else{
                            $recom = "";
                            } 
                            echo $recom;                        
                        ?>
 
                    </td> 

                    <td>
                        <a href="bancoDeDados/concluiTarefa.php?id=<?=$codTarefa?>"><img src="imagens/verificar.png" alt="concluir tarefa"></a>
                        <a href="bancoDeDados/deletTarefa.php?id=<?=$codTarefa?>"><img src="imagens/lixeira.png" alt="apagar"></a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
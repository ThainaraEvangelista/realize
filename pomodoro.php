<?php
    require_once("barreira.php");
 ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>realize - estudar</title>

    <link rel="stylesheet" href="pomodoroStyle.css">
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

    <div class="container">

        <div class="form-pomodoro">
            <div id="config">
                <div class="tituloPomo">
                    <h2>meu pomodoro</h2>
                </div>
                <form action="">

                    <input type="number" id="acao" placeholder=" ex:25">

                    <input type="number" id="pausa" placeholder="ex:5">

                    <input type="number" id="sessoes" placeholder="ex:3">
                </form>

                <!-- msg de erro para campo -->
                <div class="msgErro">
                    <small id='erro_campoVazio'></small>
                </div>


                <!-- Botão iniciar -->
                <div class="">
                    <button onclick="iniciar()" id="btnPomo">Iniciar</button>
                </div>

            </div>

        </div>

        <!-- Timer -->

        <div id="timer">

            <div class="">
                <h3 id='title'></h3>
            </div>

            <!-- Relogio -->
            <div class="time">
                <div class="minutos ">
                    <h2 id="minutes_ok"></h2>
                </div>
                <div class="divisor">
                    <h2>:</h2>
                </div>
                <div class="segundo">
                    <h2 id="seconds_ok"></h2>
                </div>
            </div>
            <!-- /Relogio -->

            <div class="linha sessao ">
                <h3 id="title_sessao"></h3>
            </div>

        </div>


        <!-- Finalização -->
        <div id="fim" style="display: none;">
            <h1 class="finalizacao">Parabéns! Você finalizou suas tarefas.</h1>
        </div>
        <!-- /Finalização -->

    </div>
    <script src="pomodScript.js"></script>
</body>



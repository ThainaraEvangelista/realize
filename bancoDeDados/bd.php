<?php

    include("conexao.php");

    //tablea de perfis
    $query_create_table_perfis = "CREATE TABLE perfis(
        id int AUTO_INCREMENT PRIMARY KEY,
        nome varchar(80)
    )";

    if (mysqli_query($conn, $query_create_table_perfis)) {
       echo "Table perfis criada <br>";
    } else {
        echo "Erro ao criar a table perfis: <br>" . mysqli_error($conn);
    }

    //tabela de usuarios
    $query_create_table_usuarios = "CREATE TABLE usuarios(
        id int AUTO_INCREMENT PRIMARY KEY,
        nome varchar(80) NOT NULL,
        senha varchar(50) NOT NULL,
        email varchar(80) NOT NULL,
        perfisID int,
        CONSTRAINT FK_PerfisUsuarios FOREIGN KEY (perfisID) REFERENCES perfis(id)
    )";

    if (mysqli_query($conn, $query_create_table_usuarios)) {
        echo "Table usuarios criada <br>";
    } else {
        echo "Erro ao criar a table usuarios: <br>" . mysqli_error($conn);
    }


    //tabela de tarefas
    $query_create_table_tarefas = "CREATE TABLE tarefas(
        id int AUTO_INCREMENT NOT NULL PRIMARY KEY,
        titulo varchar(50) NOT NULL,
        dataT DATETIME,
        recompensa varchar(80),
        punicao varchar(80),
        usuarioID int,
        CONSTRAINT FK_UsuariosTarefas FOREIGN KEY (usuarioID) REFERENCES usuarios(id)
    )";

    if (mysqli_query($conn, $query_create_table_tarefas)) {
        echo "Table tarefas criada <br>";
    } else {
       echo "Erro ao criar a table tarefas: <br>" . mysqli_error($conn);
    }

// insercao de dados
//   $sqla = "INSERT INTO perfis (nome, id)
//   VALUES ('usuarioPadrao', '2')";

//   if (mysqli_query($conn, $sqla)) {
//       echo "<br> deu bom na insercao da tabela usuario <br>";
//     } else {
//       echo "Error: " . $sqla . "<br>" . mysqli_error($conn);
//     }



mysqli_close($conn);

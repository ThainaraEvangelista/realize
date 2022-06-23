<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "realizebd";
    $site = localhost/realize/";
    // criando a conexao
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_select_db($conn,$dbname);

    // //tablea de perfis
    // $query_create_table_perfis = "CREATE TABLE perfis(
    //         id int PRIMARY KEY,
    //         nome varchar(80))";

    // if (mysqli_query($conn, $query_create_table_perfis)) {
    //     echo "Table perfis criada";
    // } else {
    //     echo "Erro ao criar a table perfis: " . mysqli_error($conn);
    // }

    // //tabela de usuarios
    // $query_create_table_usuarios = "CREATE TABLE usuarios(
    //         id int AUTO_INCREMENT PRIMARY KEY,
    //         nome varchar(80) NOT NULL,
    //         senha varchar(50) NOT NULL,
    //         email varchar(80) NOT NULL,
    //         perfisID int,
    //         CONSTRAINT FK_PerfisUsuarios FOREIGN KEY (perfisID) REFERENCES perfis(id))";

    // if (mysqli_query($conn, $query_create_table_usuarios)) {
    //     echo "Table usuarios criada";
    // } else {
    //     echo "Erro ao criar a table usuarios: " . mysqli_error($conn);
    // }


    // //tabela de tarefas
    // $query_create_table_tarefas = "CREATE TABLE tarefas(
    //         id int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    //         titulo varchar(60) NOT NULL,
    //         dataT DATE,
    //         recompensa varchar(80),
    //         punicao varchar(80))";
    // if (mysqli_query($conn, $query_create_table_tarefas)) {
    //     echo "Table tarefas criada";
    // } else {
    //     echo "Erro ao criar a table tarefas: " . mysqli_error($conn);
    // }
    // // testando insercao de dados
    // // $sql = "INSERT INTO usuarios (nome, senha, email)
    // // VALUES ('John', '123', 'john@example.com')";

    // // if (mysqli_query($conn, $sql)) {
    // //     echo "deu bom na insercao da tabela usuario";
    // //   } else {
    // //     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    // //   }

    // mysqli_close($conn);
?>

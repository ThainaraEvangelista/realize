
<?php

 require_once ("conexao.php");
 session_start();
 
$statos = 1;

 $id = $_GET['id'];

 
 $sql = "UPDATE tarefas SET 
             statos = $statos

             WHERE
             id = $id
         ";
 //echo $sql;
 $resultados = mysqli_query($conn, $sql);
 
 if($resultados == true){

    
     header("Location:../index.php");
 }
?>
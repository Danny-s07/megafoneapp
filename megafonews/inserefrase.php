<?php
require_once('conecta.php');
if (isset($_POST['inserefrase'])) {
    $autor = mysqli_real_escape_string($con,$_POST['autor']);
    $frase =mysqli_real_escape_string($con,$_POST['frase']);
    $id_usuario = $_POST['id_usuario'];
    $concordo = 0;
    $discordo = 0;
   

    $sql = mysqli_query($con,"INSERT INTO frases(autor,frase,concordo,discordo,id_user) VALUES ('$autor','$frase','$concordo','$discordo','$id_usuario')");
    if ($sql) {
        echo
        "<div class='alert alert-success'role='alert'>
        Frase inserida com sucesso
        </div>";
        // "NOvo usuario inserido com sucesso";
    }
    else
    {
        echo 
        "<div class='alert alert-danger' role='alert'>
        Erro ao inserir a frase
      </div>";
        // "Erro ao inserir usuario";
    }
}


?>
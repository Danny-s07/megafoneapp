<?php
require_once('conecta.php');
if (isset($_POST['alterafrase'])) {
    $autor = mysqli_real_escape_string($con,$_POST['autor']);
    $frase =mysqli_real_escape_string($con,$_POST['frase']);
    $id_frase = $_POST['id_frase'];
   
    $sql = mysqli_query($con,"UPDATE frases SET autor='$autor',frase='$frase' WHERE id_frase=$id_frase");
    if ($sql) {
        echo
        "<div class='alert alert-success'role='alert'>
        Frase alterada com sucesso
        </div>";
        // "NOvo usuario inserido com sucesso";
    }
    else
    {
        echo 
        "<div class='alert alert-danger' role='alert'>
        Erro ao alterar a frase
      </div>";
        // "Erro ao inserir usuario";
    }
}


?>
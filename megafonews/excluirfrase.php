<?php
require_once('conecta.php');
if (isset($_POST['excluirfrase'])) {
    $id_frase = $_POST['id_frase'];
     $sql = mysqli_query($con,"DELETE FROM frases WHERE id_frase=$id_frase");
    if ($sql) {
        echo
        "<div class='alert alert-success'role='alert'>
        Frase excluida com sucesso
        </div>";
        // "NOvo usuario inserido com sucesso";
    }
    else
    {
        echo 
        "<div class='alert alert-danger' role='alert'>
        Erro ao excluir a frase
      </div>";
        // "Erro ao inserir usuario";
    }
}


?>
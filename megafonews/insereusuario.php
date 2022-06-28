<?php
require_once('conecta.php');
if (isset($_POST['insereusuario'])) {
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = mysqli_query($con,"INSERT INTO usuarios(usuario,email,senha) VALUES ('$usuario','$email','$senha')");
    if ($sql) {
        echo
        "<div class='alert alert-success'role='alert'>
        Novo usuario inserido com sucesso
        </div>";
        // "NOvo usuario inserido com sucesso";
    }
    else
    {
        echo 
        "<div class='alert alert-danger' role='alert'>
        Erro ao inserir usuario
      </div>";
        // "Erro ao inserir usuario";
    }
}


?>
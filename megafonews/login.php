<?php
require_once('conecta.php');
if (isset($_POST['login'])) {
    $usuario = mysqli_real_escape_string($con,$_POST['usuariologin']);
    $senha = mysqli_real_escape_string($con,$_POST['senhalogin']);
    $sql = mysqli_query($con, "SELECT id_usuario,usuario,email FROM usuarios WHERE usuario='$usuario' AND senha='$senha'");
    $login = mysqli_num_rows($sql);
    if ($login !=0) {
        $dados = array();
        while($linha = mysqli_fetch_object($sql)){
            $dados[] =$linha;
        }
        echo json_encode($dados);
      
    }
    else
    {
        echo 'Falha na realização do login';
    }
}
?>

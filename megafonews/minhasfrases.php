<?php
header('Cache-Control: no-cache, must-revalidate');
header('Content-Type: application/json; charset=utf-8');
require_once('conecta.php');

if (isset($_POST['minhasfrases'])) {
    $id_user = $_POST['id_user'];
   $dados = array();
$sql = mysqli_query($con,"SELECT * FROM frases WHERE id_user=$id_user");
// $sql = mysqli_query($con,'SELECT discordo = concordo AS indice,id_frase,autor,frase,concordo,discordo FROM frases WHERE discordo = concordo  ORDER BY indice DESC');
while ($linha = mysqli_fetch_object($sql)) {
    $dados[] = $linha;

}
echo json_encode($dados);
}

?>
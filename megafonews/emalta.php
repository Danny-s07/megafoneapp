<?php
header('Cache-Control: no-cache, must-revalidate');
header('Content-Type: application/json; charset=utf-8');
require_once('conecta.php');

if (isset($_POST['emalta'])) {
   $dados = array();
$sql = mysqli_query($con,'SELECT concordo - discordo AS indice,id_frase,autor,frase,concordo,discordo FROM frases WHERE concordo - discordo > 0 ORDER BY indice DESC');
while ($linha = mysqli_fetch_object($sql)) {
    $dados[] = $linha;

}
echo json_encode($dados);
}

?>
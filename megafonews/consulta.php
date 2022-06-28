<?php
header('Cache-Control: no-cache, must-revalidate');
header('Content-Type: application/json; charset=utf-8');
require_once('conecta.php');
$dados = array();
$sql = mysqli_query($con,'SELECT * FROM frases ORDER BY id_frase DESC');
while ($linha = mysqli_fetch_object($sql)) {
    $dados[] = $linha;

}
echo json_encode($dados);
?>
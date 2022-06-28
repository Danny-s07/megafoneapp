<?php
header('Cache-Control: no-cache, must-revalidate');
header('Content-Type: application/json; charset=utf-8');
require_once('conecta.php');

if (isset($_POST['realizabusca'])) {
    $busca = $_POST['busca'];
   $dados = array();
$sql = mysqli_query($con,"SELECT * FROM frases WHERE frase LIKE '%$busca%'");
while ($linha = mysqli_fetch_object($sql)) {
    $dados[] = $linha;

}
echo json_encode($dados);
}

?>
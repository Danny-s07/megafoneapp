<?php
require_once('conecta.php');
if (isset($_POST['concordo'])) {
    $id_frase = $_POST['id_frase'];
    $sql = mysqli_query($con,"UPDATE frases SET concordo = concordo+1 WHERE id_frase = $id_frase");
    if ($sql) {
        $contagem = mysqli_query($con,"SELECT concordo FROM frases WHERE id_frase=$id_frase");
        // $resultado = mysqli_fetch_object($contagem);
        // echo json_encode($resultado);
        $resultado = mysqli_fetch_assoc($contagem);
        $valor = $resultado['concordo'];
        echo $valor;
    }
    else{
        echo 'erro';
    }
}
//alternado o discordo com o concordo
if (isset($_POST['concordoalt'])) {
    $id_frase = $_POST['id_frase'];
    $sqldiscorda = mysqli_query($con,"SELECT discordo FROM frases WHERE id_frase=$id_frase");
    $resultadodiscorda = mysqli_fetch_assoc($sqldiscorda);
    $valordiscorda = $resultadodiscorda['discordo'];
    if ($valordiscorda > 0) {
       $sql = mysqli_query($con,"UPDATE frases SET concordo = concordo+1, discordo = discordo-1 WHERE id_frase =$id_frase");
            if ($sql) {
                $contagem = mysqli_query($con,"SELECT  id_frase, concordo,discordo FROM frases WHERE id_frase=$id_frase");
                $resultado = mysqli_fetch_object($contagem);
                echo json_encode($resultado);
                // $resultado = mysqli_fetch_assoc($contagem);
                // $valor = $resultado['concordo'];
                // echo $valor;
            }
            else{
                echo 'erro';
            }
        
    }
    else{
            $sql = mysqli_query($con,"UPDATE frases SET concordo = concordo+1 WHERE id_frase = $id_frase");
            if ($sql) {
                $contagem = mysqli_query($con,"SELECT concordo FROM frases WHERE id_frase=$id_frase");
                // $resultado = mysqli_fetch_object($contagem);
                // echo json_encode($resultado);
                $resultado = mysqli_fetch_assoc($contagem);
                $valor = $resultado['concordo'];
                echo $valor;
            }
            else{
                echo 'erro';
            }
        }

}

//alternado o concordo com o discordo
if (isset($_POST['discordoalt'])) {
    $id_frase = $_POST['id_frase'];
    $sqlconcorda = mysqli_query($con,"SELECT concordo FROM frases WHERE id_frase=$id_frase");
    $resultadoconcorda = mysqli_fetch_assoc($sqlconcorda);
    $valorconcorda = $resultadoconcorda['concordo'];
    if ($valorconcorda > 0) {
       $sql = mysqli_query($con,"UPDATE frases SET discordo = discordo+1, concordo = concordo-1 WHERE id_frase =$id_frase");
            if ($sql) {
                $contagem = mysqli_query($con,"SELECT  id_frase, concordo,discordo FROM frases WHERE id_frase=$id_frase");
                $resultado = mysqli_fetch_object($contagem);
                echo json_encode($resultado);
                // $resultado = mysqli_fetch_assoc($contagem);
                // $valor = $resultado['concordo'];
                // echo $valor;
            }
            else{
                echo 'erro';
            }
        
    }
    else{
            $sql = mysqli_query($con,"UPDATE frases SET discordo = discordo+1 WHERE id_frase = $id_frase");
            if ($sql) {
                $contagem = mysqli_query($con,"SELECT discordo FROM frases WHERE id_frase=$id_frase");
                // $resultado = mysqli_fetch_object($contagem);
                // echo json_encode($resultado);
                $resultado = mysqli_fetch_assoc($contagem);
                $valor = $resultado['discordo'];
                echo $valor;
            }
            else{
                echo 'erro';
            }
        }

}


//apenas clicando no discordo
if (isset($_POST['discordo'])) {
    $id_frase = $_POST['id_frase'];
    $sql = mysqli_query($con,"UPDATE frases SET discordo = discordo+1 WHERE id_frase = $id_frase");
    if ($sql) {
        $contagem = mysqli_query($con,"SELECT discordo FROM frases WHERE id_frase=$id_frase");
        // $resultado = mysqli_fetch_object($contagem);
        // echo json_encode($resultado);
        $resultado = mysqli_fetch_assoc($contagem);
        $valor = $resultado['discordo'];
        echo $valor;
    }
    else{
        echo 'erro';
    }
}
?>
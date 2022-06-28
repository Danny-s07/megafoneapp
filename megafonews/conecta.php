<?php
header('Access-Control-Allow-Origin: *');
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB_NAME','megafone');

$con = mysqli_connect(HOST,USER,PASS,DB_NAME);
if (!$con) {
    die('Falha na conexao!');
}
?>
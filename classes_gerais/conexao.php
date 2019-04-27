<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$db = "db_anatomia";
$msgErro = "";

$mysqli = new mysqli($host, $usuario, $senha, $db);

if($mysqli->connect_errno){
    echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_errno;
    $msgErro = "Tente novamente";
}

?>
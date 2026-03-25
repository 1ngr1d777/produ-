<?php

$servidor = "localhost";
$usuario = "root";
$senha ="";
$banco ="produ";

$conexao = maysqli_connect($servidor, $usuario, $senha, $banco);

if (!$conexao){
    die("Erro de conexao: " .mysql_connect_error());
}
?>
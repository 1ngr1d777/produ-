<?php
include("conexao.php");
$sql = "SELECT * FROM produtos" ORDERM BY id DESC";
$resultado mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang= "pt-br">
<head>
<title>INGRIdISYS</title>
</head>
<body>
<h1>cadastro de produtos<h1>

<form action="salvar.php" method="post">
<label>nome</label>
<input type="text" name="nome" required>

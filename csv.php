<?php 
include_once("conexao.php");
 
$consulta = "SELECT * FROM people";
$con = $conexao->query($consulta) or die($conexao->error);
?>
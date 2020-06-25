<?php
$host="localhost";
$user="root";
$pass="";
$banco="pessoas";
$conexao=@mysqli_connect($host,$user,$pass,$banco) or die("Problema na conexão ao banco de dados!");
?>
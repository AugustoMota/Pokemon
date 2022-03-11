<?php
include_once("conexao.php");
 echo '<pre>';
print_r($_POST);
$email     = $_POST["email"];
$senha     =$_POST["senha"];
$nome      =$_POST["nome"];
$sobrenome =$_POST["sobrenome"];




$result_usuario = "INSERT INTO usuarios (email,senha,nome,sobrenome) 
values ($email,$senha,$nome,$sobrenome)";

?>


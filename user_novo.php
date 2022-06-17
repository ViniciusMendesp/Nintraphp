<?php 
include_once "head.php"; 
include_once "database.php";
include('verifica_login.php');

$user_nome=$_POST["user_nome"] ;
$user_email=$_POST["user_email"];
$user_admin=$_POST["user_admin"];
$user_senha=$_POST["user_senha"];

        
//String em SQL
$sql = "INSERT INTO plataforma_user (nome,email,adm,senha) 
VALUES ('$user_nome','$user_email','$user_admin','$user_senha')";
echo $sql;
//Realizar o cadastro no banco de dados
if(mysqli_query($conexao, $sql))
{
    header("Location: painel.php");
}
else
{
    echo "Falha ao cadastrar usuario";
}

?>
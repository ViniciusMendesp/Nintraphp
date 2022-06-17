<?php 
include_once "head.php"; 
include_once "database.php";
include('verifica_login.php');

$video_name=$_POST["video_name"] ;
$video_link=$_POST["video_link"];
$video_tipo=$_POST["video_tipo"];
                 
//String em SQL
$sql = "INSERT INTO plataforma_videos (nome,link,tipo) VALUES ('$video_name', '$video_link', '$video_tipo')";
echo $sql;
//Realizar o cadastro no banco de dados
if(mysqli_query($conexao, $sql))
{

    header("Location: painel.php");
}
else
{
    echo "Falha ao cadastrar video";
}







?> 
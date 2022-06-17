<?php 
include_once "head.php"; 
include_once "database.php";
include('verifica_login.php');

$video_cdvideo=$_POST["video_cdcli"] ;
$video_name=$_POST["video_name"] ;
$video_link=$_POST["video_link"];
$video_tipo=$_POST["video_tipo"];


//String em SQL
$sql = "UPDATE plataforma_videos SET nome='$video_name',link='$video_link',tipo='$video_tipo' where cdvideo='$video_cdvideo'";
echo $sql;
//Realizar o cadastro no banco de dados
if(mysqli_query($conexao, $sql))
{
    //echo $sql;
    header("Location: listar_video.php");
}
else
{
    echo "Falha ao atualizar video";
}

?>
new wildcard 
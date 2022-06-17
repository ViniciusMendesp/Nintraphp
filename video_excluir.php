<?php 
        //Inclusão de página com o conteúdo do cabeçalho
        include_once "head.php" ;
        include_once "database.php" ;
        include('verifica_login.php');
        /*
            Forma de comentário em bloco
        */
        $cdvideo=$_GET['cdvideo'];
        $sql = "DELETE FROM plataforma_videos where cdvideo='$cdvideo'";
        // Realiza a conexão  com o banco de dados e executar o comando em SQL armazendano o resultado em uma variável
        
        if(mysqli_query($conexao, $sql))
{
    //echo $sql;
    header("Location: listar_video.php");
}
else
{
    echo "Falha ao ecluir video";
}
?>
<br>

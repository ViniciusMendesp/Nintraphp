<?php 
        //Inclusão de página com o conteúdo do cabeçalho
        include_once "head.php" ;
        include_once "database.php" ;
        include('verifica_login.php');
        /*
            Forma de comentário em bloco
        */
        $codigo=$_GET['codigo'];
        $sql = "DELETE FROM plataforma_user where codigo='$codigo'";
        // Realiza a conexão  com o banco de dados e executar o comando em SQL armazendano o resultado em uma variável
        
        if(mysqli_query($conexao, $sql))
{
    //echo $sql;
    header("Location: listar_user.php");
}
else
{
    echo "Falha ao excluir usuario";
}
?>
<br>

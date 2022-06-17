<!DOCTYPE html>
<html>
<head>
    <title>Lista de videos</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <style>
        .fundo {
            background-color: white;
        }
    </style>
</head>

<link rel="stylesheet" type="text/css" href="css/login.css">
<body class="">

<?php
    // Inclui o arquivo de conexão com o banco de dados
    include "head.php";
    include_once "database.php";
    include('verifica_login.php');

    if(!isset($_SESSION)) { session_start(); } 
    // Declarando uma variável para receber o comando em SQL
    $sql = "SELECT * FROM plataforma_videos";
    // Realiza a conexão  com o banco de dados e executar o comando em SQL armazendano o resultado em uma variável
    $resultado = mysqli_query($conexao, $sql);
    // Criar uma variável para receber uma função que converte o valor do banco em um array
    
    $verifique_adm=$_SESSION['login_adm'];
?>

<nav class="navbar navbar-expand-lg bg-secondary">
    <div class="container-fluid">
        <a class="navbar-brand" href="painel.php">Painel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></button>

        <a class="navbar-brand" href="cadastro_video.php">Novo Video</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></button>

        <a class="navbar-brand" href=seleciona.php >Menu Categoria</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></button>

        <a class="navbar-brand" href="logout.php" >Sair</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></button>
    </div>
</nav>









    <h3>Lista de Videos</h3>
    
    <table class="table table-striped">
        <thead> <!--Cabeçalho da tabela-->
            <tr><!--Representa uma linha na tabela-->
               <th scope="col"></th>
               <th scope="col"></th>
               <th scope="col"></th>
               
            </tr>
        </thead>
        <tbody><!--Corpo da tabela-->
                <?php while($dados = mysqli_fetch_array($resultado)):?>
            <tr><!--Representa uma linha na tabela-->
                <th scope="row"><?php  $id=$dados[0]?></th>
                 
                <td><?php echo $dados['tipo']?></td><!--Representa o valor-->
                <td><?php echo $dados['nome']?></td><!--Representa o valor-->
                <td><a href="cadastro_video_exibir.php?cdvideo=<?php echo $id?>">Exibir</a></td>
                               
                <td><a href="video_excluir.php?cdvideo=<?php echo $id?>">Excluir</a></td>
                
                

            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
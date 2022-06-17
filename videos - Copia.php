<!DOCTYPE html>

    <head>
        <title>Training</title>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body class="bg-light">
 
        <?php
            // Inclui o arquivo de conexão com o banco de dados
            include "head.php";
            include_once "database.php";
            include('verifica_login.php');
           
            if(!isset($_SESSION)) { 
                session_start(); 
                $verifique_adm=$_SESSION['login_adm'];
            } 
           
            $sql = "SELECT tipo FROM plataforma_videos Group by tipo";
            $resultado = mysqli_query($conexao, $sql);?>
          
          <nav class="navbar navbar-expand-lg bg-secondary">
            <div class="container-fluid">
                <a class="navbar-brand" href="seleciona.php">Voltar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></button>  
            
                <a class="navbar-brand" href="painel.php">Painel</a>         
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></button>
            
                <a class="navbar-brand" href="logout.php">Sair</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></button>
            </div>
          </nav>
           

            <h3>Lista de Videos</h3>
           
     
            
            <div>
                <?php
                $valueSelect=$_POST["tipo"] ;
                $sql = "SELECT * FROM plataforma_videos where tipo='$valueSelect'" ;
                $resultado = mysqli_query($conexao, $sql);
                        
                while($dados = mysqli_fetch_array($resultado)):?>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <iframe src=<?php print($dados['link']);?> width='320' height='282' frameborder='0' allow='autoplay; fullscreen' allowfullscreen></iframe>
                                <p> <?php print($dados['nome']);?><p>
                            </div>
                            <div class="col">
                                <iframe src=<?php print($dados['link']);?> width='320' height='282' frameborder='0' allow='autoplay; fullscreen' allowfullscreen></iframe>
                                <p> <?php print($dados['nome']);?><p>
                            </div>
                        </div>                      
                        
                    </div>   

            
                <?php endwhile; ?>
            </div>
             

    </body>    
<html>
    
  
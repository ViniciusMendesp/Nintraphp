<!DOCTYPE html>

    <head>
        <title>Painel</title>
        <meta charset="utf-8">
            <!-- CSS only -->
            <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <body class="bg-light">
 
        <?php
            // Inclui o arquivo de conexão com o banco de dados
            include "head.php";
            include_once "database.php";
            include('verifica_login.php');
            
            if(!isset($_SESSION)) { 
                session_start(); 
               
            } 
             $verifique_adm=$_SESSION['login_adm'];

           
            $sql = "SELECT tipo FROM plataforma_videos Group by tipo";
            $resultado = mysqli_query($conexao, $sql);?>
          
            <nav class="navbar navbar-expand-lg bg-secondary">
                <div class="container-fluid">
                  <?php 
                         if ($verifique_adm=="on")
                          { echo ("<a class='navbar-brand' href='painel.php'>Painel</a>");
                            echo ("<button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'></button>");
                          } 
                  ?>

                   
                    <a class="navbar-brand" href="logout.php" >Sair</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></button>
                </div>
            </nav>
            <h3>Olá, <?php echo $_SESSION['usuario'];?> </h3>
           
            
        <!-- carregar sub titulo -->
        </div>
            <div>
                <br><br><br><br> <br><br><br><br>
                <div class="position-absolute top-50 start-50 translate-middle">
                    <h3>Selecione uma Categoria</h3>
                    <div class="border p-3">   <!-- formulario de login -->
                        
                    <div>
                        <form action="videos.php" method="post">
                    
                            <select class="form-select form-select-lg mb-2" aria-label=".form-select-lg example" name="tipo" id="tipo">
                                <?php while($dados = mysqli_fetch_array($resultado)):?>
                                    <option value="<?php print($dados['tipo']); ?>"><?php print($dados['tipo']); ?></option>
                                <?php endwhile; ?>       
                            </select>
                            <br><br><br>
                                <input type="submit" type="button" class="btn btn-success mb-2 container" value="Assistir">
                    
                        </form>
                </div>
            </div>
            </div>
              
            </div>
          
       <!-- carregar sub titulo fim-->
      
    </body>    
<html>
    
    
<?php 
        //Inclusão de página com o conteúdo do cabeçalho
        require_once "head.php"; 
        include('verifica_login.php');
        /*
            Forma de comentário em bloco
        */
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/login.css" />
    <title>Orçamento</title>
</head>
<body>

       
        <!-- Início do formulário de cadastro de usuario -->

        <fieldset>
                <legend>Cadastro de Usuario</legend> <br>
                <form action="user_novo.php" method="post">

                        <label for="user_nome">Nome:</label>
                        <input type="text" name="user_nome" id="user_nome" class="mytextbox"><br><br>

                        <label for="user_email">Email:</label>
                        <input type="email" name="user_email" id="user_email" class="mytextbox"><br><br>

                         <label for="user_senha">Senha:</label>
                        <input type="password" name="user_senha" id="user_senha" class="mytextbox"><br><br>

                          <div class="form-check form-switch">
                          <div class="switch">
                          <input id="user_admin" type="checkbox" name="user_admin" class="switch-input" />
                          <label for="user_admin" class="switch-label">Admin:</label>
                         
                          </div>
            
      </div>
      
                         <br><br>
                         <button><a href="listar_user.php" >Cancelar</a></button>
                        <input type="submit" value="Gravar" class="mysalvar">

                </form>
                <br><br><br><br>
        </fieldset>
        <!-- Fim do formulário de cadastro de usuario -->
        
  


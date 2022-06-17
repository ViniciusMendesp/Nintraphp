<?php include('head.php') ?>

<body class="fundo">
   

           
        <div class="container">  <!-- formulario de login -->
                <h3 class="h3 p-3">Seja Bem-vindo(a) Nitratus training.</h3>
                    <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="alert alert-success" role="alert">
                        ERRO: Usuário ou senha inválidos.
                    </div>
                        <?php
                        endif;
                        unset($_SESSION['nao_autenticado']);
                        ?>

                            <div class="container">
                                <form class="row justify-content-center" action="login.php" method="POST">
                                    <div class="input-group input-group-lg m-2" style="max-width:300px;">
                                         <input name="usuario" name="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Seu usuário" autofocus="">
                                    </div>
                                    
                                    <div class="input-group input-group-lg m-2" style="max-width:300px;">
                                         <input name="senha" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" type="password" placeholder="Sua senha">
                                    </div>
                                    <div align="center">
                                        <button type="submit" class="btn btn-primary cursor-pointer" style="min-width:300px;">Entrar</button>
                                    </div>
                                </form>
                                     <div>
                                         <img src="farma-01.jpg"  class="img-fluid p-4" alt="farmaceuticos">
                                     </div>
                            </div>
                            
                            
            

            </div>
                                   
    </body>
</html>
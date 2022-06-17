<?php 
        //Inclusão de página com o conteúdo do cabeçalho
        include_once "head.php";
        include('verifica_login.php');
        
        /*
            Forma de comentário em bloco
        */
        
?>
<body class="fundo">
<br>

<h3>Cadastro de video</h3>

<!-- Início do formulário de cadastro de usuario -->

<fieldset>
        <legend></legend> <br>
        <form action="video_novo.php" method="post" class="container border">
                <div class="mb-3">
                        <label for="video_name" class="col-sm-2 col-form-label">Nome:</label>
                        <input type="text" name="video_name" id="video_name" class="form-control m-3" placeholder="Nome do video" style="max-width:300px;">
                </div>           
                <div class="mb-3">
                        <label for="video_tipo" class="col-sm-2 col-form-label">Categoria</label>
                        <input type="text" name="video_tipo" id="video_tipo" class="form-control m-3" placeholder="Categoria" style="max-width:300px;">
                </div>
                <div class="mb-3">
                        <label for="link" class="col-sm-2 col-form-label ">link:</label>
                        <input type="link" name="video_link" id="video_link" class="form-control m-3" placeholder="Link do video" style="max-width:300px;">
                </div>          
                
                <button type="submit" value="Gravar" class="btn btn-success">Gravar</button> 
                
                <button class="btn btn-danger">Cancelar<a href="listar_video.php" ></a></button>
               <br><br>
        </form>

</fieldset>
<!-- Fim do formulário de cadastro de usuario -->



<?php include "footer.php" ?>
</body>


   
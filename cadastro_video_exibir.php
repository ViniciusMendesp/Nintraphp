<?php 
        //Inclusão de página com o conteúdo do cabeçalho
        include_once "head.php" ;
        include_once "database.php" ;
        include('verifica_login.php');
        /*
            Forma de comentário em bloco
        */
        $cdvideo=$_GET['cdvideo'];
        $sql = "SELECT * FROM plataforma_videos where cdvideo='$cdvideo'";
        // Realiza a conexão  com o banco de dados e executar o comando em SQL armazendano o resultado em uma variável
        $resultado = mysqli_query($conexao, $sql);
        $video=mysqli_fetch_assoc($resultado);
?>
<br>
<link rel="stylesheet" href="./css/login.css" />

        <h1>Cadastro de Video</h1>

        <!-- Início do formulário de cadastro de usuario -->

        <fieldset>
                <legend></legend> <br>
                <form action="video_edit.php" method="post">

                        <input type="hidden"; name="video_cdcli" id="video_cdcli" class="mytextbox"
                        value="<?php print($cdvideo);?>">
                                
                        
                        <label for="video_name">Nome:</label>
                        <input type="text" name="video_name" id="video_name" class="mytextbox" 
                        value="<?php print($video['nome']); ?>"><br><br>

                        
                        <label for="video_tipo">Sub Titulo:</Title></label>
                         <input type="text" name="video_tipo" id="video_tipo" class="mytextbox"
                        value="<?php print($video['tipo']); ?>"><br><br>

                        <label for="link">link:</label>
                        <input type="link" name="video_link" id="video_link" class="mytextbox"
                        value="<?php print($video['link']); ?>"><br><br>
 
                        <iframe src="<?php print($video['link']); ?>" width="640" height="564" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                                             
                       
                        <input type="submit" value="Gravar" class="mysalvar">
                        <button class="mycancelar"><a href="listar_video.php" >Cancelar</a> </button>


                       <br><br>
                </form>

        </fieldset>
        <!-- Fim do formulário de cadastro de usuario -->
        
        

<?php include "footer.php" ?>

   
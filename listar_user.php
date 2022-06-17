<?php
    // Inclui o arquivo de conexão com o banco de dados
    include_once "head.php";
    include_once "database.php";
    include('verifica_login.php');
    
    // Declarando uma variável para receber o comando em SQL
    $sql = "SELECT * FROM plataforma_user";
    // Realiza a conexão  com o banco de dados e executar o comando em SQL armazendano o resultado em uma variável
    $resultado = mysqli_query($conexao, $sql);
    // Criar uma variável para receber uma função que converte o valor do banco em um array
    

?>

<nav class="navbar navbar-expand-lg bg-secondary">
    <div class="container-fluid">
        <a class="navbar-brand" href="painel.php">Painel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></button>

        <a class="navbar-brand" href="cadastro_user.php">Novo Usuario</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></button>

        <a class="navbar-brand" href="logout.php">Sair</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></button>
    </div>

</nav>




    <h1>Lista de Usuarios</h1>
    <table class="table table-striped">
        <thead> <!--Cabeçalho da tabela-->
            <tr><!--Representa uma linha na tabela-->
                <th scope="col">Nome:</th><!--Indice da tabela-->
                <th scope="col">Email:</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody><!--Corpo da tabela-->
        <?php while($dados = mysqli_fetch_array($resultado)):?>
            <?php  $id=$dados[0]?>
            <tr><!--Representa uma linha na tabela-->
                <td><?php echo $dados['nome']?></td><!--Representa o valor-->
                <td><?php echo $dados['email']?></td>
                <td><a href="user_excluir.php?codigo=<?php echo $id?>">Excluir</a></td>
               
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
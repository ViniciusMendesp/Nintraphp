<?php
if(!isset($_SESSION)) { session_start(); } 
include('database.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "SELECT nome,adm from plataforma_user where nome = '{$usuario}' and senha = '{$senha}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

 while($dados = mysqli_fetch_array($result)):
	 $adm=$dados["adm"];
 endwhile;
if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	$_SESSION['login_adm'] = $adm;
	header('Location: seleciona.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}

?>
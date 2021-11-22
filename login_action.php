<?php
include("lib/conexao_mysqli.php");

$user = $_POST['user'];
$password = $_POST['password'];

$has_user = select_sql("SELECT * FROM usuarios WHERE Usuario='".$user."' AND Senha='".$password."'");

if($has_user) {
	// Possui usuário.
	// Faz o login 
	session_start();
	$_SESSION['user'] = $has_user;
	// Redireciona para a página interna do painel administrativo
	header("Location:verlivros.php");
} else {
	// O usuário não existe no banco.
	// Usuário ou senha inválidos.
	// Redireciona de volta para a página de login
	header("Location:login.php");
}
?>
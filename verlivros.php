<?php
include("lib/conexao_mysqli.php");
session_start();
if($_SESSION['user'][0]["Nivel"] == "administrador"){
	$livros = select_sql("SELECT * FROM `livros`");
} else {
	$livros = select_sql("SELECT * FROM `livros` WHERE Id_usuario='".$_SESSION['user'][0]["ID_Usuario"]."'");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<link href="CSS/cadastrar.css?" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
			
	<title>Livraria Recanto</title>
</head>
<body>
	<nav>
		<div class="nav-wrapper purple lighten-3">
			<a href="#" class="brand-logo black-text margin-left">LIVRARIA RECANTO -ola, <?php echo $_SESSION['user'][0]["Usuario"] ?></a>
			
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a href="verlivros.php" class="black-text margin-right">Ver Livros</a></li>
				<li><a href="login.html" class="black-text margin-right">Sair</a></li>
			</ul>
		</div>
	</nav>

	<div class="row">
		<div class="col s6 offset-s3 ">
			<div class="card">
				<div class="card-content">
					<a class="btn waves-effect waves-light purple lighten-3" href="cadastrar_livro.php">Cadastrar Livros</a>
					
					<table>
						<tr>
							<td>ID</td>
							<td>Nome</td>
							<td>Autor</td>
							<td>Editar</td>
							<td>Excluir</td>
						</tr>
						
						<?php
						 foreach($livros as $livro){
						?>
						
						<tr>
							<td><?php echo $livro["Id_livro"]?></td>
							<td><?php echo $livro["Nome"]?></td>
							<td><?php echo $livro["Autor"]?></td>
							<td><a href="editar_livro.php">Editar</a></td> 
							<td><a href="excluir_livro.php">Excluir</a></td>
						</tr>
						<?php
						}
						?>
						
					</table>
				</div>
			</div>

		</div>

	</div>

</body>
</html>

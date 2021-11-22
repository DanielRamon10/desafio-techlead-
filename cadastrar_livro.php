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
			<a href="#" class="brand-logo black-text margin-left">LIVRARIA RECANTO</a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a href="verlivros.php" class="black-text margin-right">Ver Livros</a></li>
			</ul>
		</div>
	</nav>

	<div class="row">
		<div class="col s6 offset-s3 ">
			<div class="card">
				<div class="card-content">
					<form action="cadastrar_livro_action.php" method="POST">
						<span>Cadastrar Livro</span>

						
						<!------------input titulo----->
						<div class="row">
							<div class="input-field col s12">
								<input id="nome" name="nome" type="text" class="validate" require /> 
								<label for="nome">Nome</label>
							</div>				 
						</div>

						<!---------input Autor----->			
						<div class="row">	   
							<div class="input-field col s12">
							    <input id="autor" name="autor" type="text" class="validate" require /> 
								<label for="autor">Autor</label>
							</div>
						</div>

						<div class="card-action">
							<a class="btn waves-effect waves-light grey" href="verlivros.php">Cancelar</a>
							<input value="Cadastrar" type="submit" class="waves-effect waves-light btn purple">
						</div>		
                    </form>
				</div>
			</div>

		</div>

	</div>

</body>
</html>

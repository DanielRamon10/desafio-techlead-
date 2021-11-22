<?php
include("lib/conexao_mysqli.php");

$nome = $_POST['nome'];
$autor = $_POST['autor'];
session_start();
insert_sql("INSERT INTO `livro_adm`.`livros` (`Id_livro`, `Id_usuario`, `Nome`, `Autor`, `Data_de_cadastro`) VALUES (NULL, '".$_SESSION['user'][0]["ID_Usuario"]."', '".$nome."', '".$autor."', now())");
header("Location:verlivros.php");

?>
<?php

$db_connection['hostname'] = "localhost";
$db_connection['database'] = "livro_adm";
$db_connection['username'] = "root";
$db_connection['password'] = "";





// Hostname é o nome do servidor;
//  - Pode ser servidor local = 'localhost'
//  - Ou servidor Online. Pode usar o endereço online do servidor ou o IP.
// Database é o nome do banco de dados que foi criado.
// Username é o nome do usuário para acessar o banco. Para servidor local o padrão é root
// Password é a senha do usuário.


/*
**
**
**        NÃO ALTERAR NADA DO CÓDIGO ABAIXO!!
**
**
*/





// Faz a conexão com o banco de dados
$mysqli = new mysqli($db_connection['hostname'],$db_connection['username'],$db_connection['password'],$db_connection['database']);
if (mysqli_connect_errno()) {
	echo utf8_decode("<p>Não foi possível conectar-se ao servidor MySQL.</p>\n") 
		 .
		 "<p><strong>Erro MySQL: "
		 .
		 trigger_error(mysqli_connect_error())
		 .
		 "</strong></p>\n";
		 exit();
}

// DELETE e UPDATE, etc..
// Função responsavel por executar o comando SQL no banco de dados.
// A função não retorna nada.
function executa_sql($query) {
	global $mysqli;
	$result_sql = $mysqli->query($query);
	if (!mysqli_error($mysqli)){
		return($result_sql);
	} else {
		echo utf8_decode("<p>Não foi possível executar o comando SQL.</p>\n")
			 .
			 "<p><strong>Erro MySQL: " . mysqli_error($mysqli) . "</strong></p>\n";
		exit;
	}
}

// SELECT
// Função responsável para fazer uma consulta no banco utilizando o comando "SELECT"
// A função retorna o resultado da busca.
function select_sql($query) {
	$result_sql = executa_sql($query);
	$count_result_sql = $result_sql->num_rows;
	$data = array();
	if ($result_sql){
		while($row = $result_sql->fetch_array()) {
			$data[] = $row;
		}
		//fecha a conexao e limpa o resultado
		mysqli_free_result($result_sql);
	}
	return $data;
}

// INSERT
// Função responsável para fazer uma inserção no banco utilizando o comando "INSERT"
// A função retorna o número do ID que acabou de ser criado.
function insert_sql($query) {
	global $mysqli;
	$result_sql = executa_sql($query);
	return $mysqli->insert_id;
}
?>
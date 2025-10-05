<?php
	// Configurações de conexão com o MySQL
	$servidor = "localhost";
	$usuario  = "root";      
	$senha    = "";           
	$banco    = "db_vivabr"; 

	// Criando a conexão
	$conexao = new mysqli($servidor, $usuario, $senha, $banco);

	// Verificando conexão
	if ($conexao->connect_error) {
		die("Erro na conexão: " . $conexao->connect_error);
	}
?>
<?php
	include("conexao.php");

	// Recebendo dados do formulário
	$user = $_POST['user'];
	$nome = $_POST['name'];
	$senha  = $_POST['password'];
	$email = $_POST['email'];
	$dt_nasc = $_POST['birthdate'];
	$cpf = $_POST['cpf'];
	$cep = $_POST['cep'];
	$rua = $_POST['rua'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$telefone = $_POST['telefone'];


	// Preparando comando SQL
	$sql = "INSERT INTO tb_usuarios (login, senha, nome, dt_nasc, email, cpf, telefone, cep, rua, bairro, cidade, estado)
			VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

	// Usando prepared statement para segurança
	$stmt = $conexao->prepare($sql);
	$stmt->bind_param("ssssssssssss", $user, $senha, $nome, $dt_nasc, $email, $cpf, $telefone, $cep, $rua, $bairro, $cidade, $estado);

	if ($stmt->execute()) {
		echo "✅ usuario cadastrado com sucesso!";
	} else {
		echo "❌ Erro: " . $stmt->error;
	}

	$stmt->close();
	$conexao->close();
?>
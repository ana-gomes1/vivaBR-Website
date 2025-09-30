<?php
    session_start();

	include("conexao.php");

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome = $_POST['name'];
    $login = $_POST['user'];
    $email = $_POST['email'];
    $nascimento = $_POST['birthdate'];
    $senha = $_POST['password'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO tb_usuarios (login, senha, nome, dt_nasc, email, cpf, telefone, cep, rua, bairro, cidade, estado)
            VALUES ( '$login', '$senhaHash', '$nome', '$nascimento', '$email', '$cpf', '$telefone', '$cep', '$rua', '$bairro', '$cidade', '$estado')";

    if ($conexao->query($sql) === TRUE) {
        $_SESSION['msg'] = "Tarefa adicionada com sucesso";
        header("Location: login.php");
    } else {
        echo "Erro ao cadastrar: " . $conexao->error;
    }

} else {
    http_response_code(405);
    echo "Método não permitido!";
}
/*

include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Captura e validação básica dos dados
    $nome       = $_POST['name'] ?? '';
    $login      = $_POST['user'] ?? '';
    $email      = $_POST['email'] ?? '';
    $nascimento = $_POST['birthdate'] ?? '';
    $senha      = $_POST['password'] ?? '';
    $telefone   = $_POST['telefone'] ?? '';
    $cpf        = $_POST['cpf'] ?? '';
    $cep        = $_POST['cep'] ?? '';
    $rua        = $_POST['rua'] ?? '';
    $bairro     = $_POST['bairro'] ?? '';
    $cidade     = $_POST['cidade'] ?? '';
    $estado     = $_POST['estado'] ?? '';

	$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    // Preparar e executar o INSERT usando Prepared Statement
    $stmt = $conexao->prepare("INSERT INTO tb_usuarios (nome, login, email, dt_nasc, senha, telefone, cpf, cep, rua, bairro, cidade, estado)
                               VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssssss", $nome, $login, $email, $nascimento, $senhaHash, $telefone, $cpf, $cep, $rua, $bairro, $cidade, $estado);

    if ($stmt->execute()) {
        header('Location: login.html');
		exit;
    } else {
        echo "Erro ao cadastrar: " . $stmt->error;
    }

    $stmt->close();
    $conexao->close();

} else {
    http_response_code(405); // Método não permitido
    echo "Método não permitido!";
}
*/
?>
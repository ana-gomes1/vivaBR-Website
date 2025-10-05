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

    $consulta = $conexao->query("SELECT email FROM tb_usuarios WHERE email='$email'");
    $exibe = $consulta->fetch_assoc();

    if($consulta->num_rows > 0){
        $_SESSION['msg'] = '<svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="#BB271A"><path d="m249-207-42-42 231-231-231-231 42-42 231 231 231-231 42 42-231 231 231 231-42 42-231-231-231 231Z"/></svg>';
        $_SESSION['msg'] .= "Já existe uma conta com este email. Tente outro email";
        header("Location: login.php");
    }else{

        if ($conexao->query($sql) === TRUE) {
            $_SESSION['msg'] = '<svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="48px" fill="#319631"><path d="M480-80q-85 0-158-30.5T195-195q-54-54-84.5-127T80-480q0-84 30.5-157T195-764q54-54 127-85t158-31q75 0 140 24t117 66l-43 43q-44-35-98-54t-116-19q-145 0-242.5 97.5T140-480q0 145 97.5 242.5T480-140q145 0 242.5-97.5T820-480q0-30-4.5-58.5T802-594l46-46q16 37 24 77t8 83q0 85-31 158t-85 127q-54 54-127 84.5T480-80Zm-59-218L256-464l45-45 120 120 414-414 46 45-460 460Z"/></svg>';
            $_SESSION['msg'] .= "Usuário cadastrado com sucesso";
            header("Location: login.php");
        } else {
            echo "Erro ao cadastrar: " . $conexao->error;
        }
    }

} else {
    http_response_code(405);
    echo "Método não permitido!";
}

?>
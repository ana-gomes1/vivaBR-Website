<?php
session_start();

include("conexao.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    $email = $_POST['email'];
    $senha = $_POST['password'];

    $sql = "SELECT * FROM tb_usuarios WHERE email = ? AND login = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("ss", $email, $login);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if (($email == 'adm@gmail.com') && ($senha == '87654321')) {
        $_SESSION['usuario'] = $login;
        $_SESSION['email'] = $email;
        header('Location: home_adm.php');
        exit;
    }
    else if ($resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();

        if (password_verify($senha, $usuario['senha'])) {
            $_SESSION['usuario'] = $usuario['login'];
            $_SESSION['id_usuario'] = $usuario['id_usuario'];
            header('Location: quiz.php');
            exit;
        } else {
            $_SESSION['msgErrorlogin'] = 'Nome/email ou senha incorretos. Digite novamente';
            header('Location: login.php');
        }
    } else {
        $_SESSION['msgErrorlogin'] = 'Nome/email ou senha incorretos. Digite novamente';
        header('Location: login.php');
    }

    $stmt->close();
} else {
    http_response_code(405);
    echo "Método não permitido!";
}


?>
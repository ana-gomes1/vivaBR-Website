<?php
/*
require 'conexao.php';

$login = $_POST['user'];
$email = $_POST['email'];
$senha = $_POST['password'];

$consulta = $conexao->query("SELECT email, senha, login, nome FROM tb_usuarios WHERE email='$email' AND senha='$senha' AND login='$login'");
    $exibe = $consulta->fetch_assoc();

    if($consulta->num_rows == 1){
        $_SESSION['msgProfile'] = 'Olá, {$nome}';
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
*/
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

    if ($resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();

        if (password_verify($senha, $usuario['senha'])) {
            $_SESSION['usuario'] = $usuario['login'];
            header('Location: quiz.php');
            exit;
        } else {
            header('Location: login.php');
        }
    } else {
        echo "<p>Usuário não encontrado.</p>";
        echo "<a href='login.html'>Voltar</a>";
    }

    $stmt->close();
} else {
    http_response_code(405);
    echo "Método não permitido!";
}


?>
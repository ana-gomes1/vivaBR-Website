<?php
session_start();

include("conexao.php");

if (!isset($_SESSION['usuario'])) {
    die("Erro: usuário não autenticado.");
}

$usuario = (int)$_SESSION['id_usuario'];
$acertos = (int)$_POST['acertos'];

$stmt = $conexao->prepare("INSERT INTO tb_quiz (usuario, acertos) VALUES (?, ?)");
$stmt->bind_param("ii", $usuario, $acertos);
$stmt->execute();

$consulta = $conexao->query("SELECT email FROM tb_usuarios WHERE email='$email'");
$exibe = $consulta->fetch_assoc();



$stmt->close();
$conexao->close();
?>

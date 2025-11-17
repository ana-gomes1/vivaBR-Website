<?php
include("conexao.php");

if (isset($_GET['tipo']) && ($_GET['tipo'] == 'cupom')){
    $codigoCupom = $_POST["id_cupom"];

    $sql = "DELETE FROM tb_cupons WHERE id_cupom = $codigoCupom";

        if ($conexao->query($sql) === TRUE) {
            echo "<script>
                alert('Cupom excluído com sucesso!');
                window.location.href = 'home_adm.php';
            </script>";
        } else {
            echo "<script>
                alert('Erro ao excluir Cupom: " . addslashes($conexao->error) . "');
                window.location.href = 'home_adm.php';
            </script>";
        }
} else{
    print_r($_POST);
    $codigo = $_POST["id_usuario"];
    $sql = "DELETE FROM tb_usuarios WHERE id_usuario = $codigo";

    if ($conexao->query($sql) === TRUE) {
        echo "<script>
            alert('Usuário excluído com sucesso!');
            window.location.href = 'home_adm.php';
        </script>";
    } else {
        echo "<script>
            alert('Erro ao excluir Usuário: " . addslashes($conexao->error) . "');
            window.location.href = 'home_adm.php';
        </script>";
    }
}

?>
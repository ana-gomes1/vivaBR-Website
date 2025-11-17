<?php
include("conexao.php");


if (isset($_GET['tipo']) && ($_GET['tipo'] == 'cliente')){

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id_usuario = $_POST["id_usuario"];
        $nome = $_POST["name"];
        $login = $_POST["user"];
        $data = $_POST["birthdate"];
        $email = $_POST["email"];
        $senha = $_POST["password"];
        $telefone = $_POST["telefone"];
        $cpf = $_POST["cpf"];
        $cep = $_POST["cep"];
        $rua = $_POST["rua"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $genero = $_POST["gender"];

        $sqlSenhaConsulta = "SELECT senha FROM tb_usuarios WHERE id_usuario = $id_usuario;";
        $result = $conexao->query($sqlSenhaConsulta);

        if ($result->num_rows > 0) {
            $linha = $result->fetch_assoc();
            $senhaAtualHash = $linha['senha'];
        }

        if (!empty($senha)) {
            $senha = password_hash($senha, PASSWORD_DEFAULT);
        } else {
            $senha = $senhaAtualHash;
        }

    
        $sql = "UPDATE tb_usuarios SET 
                    nome = '$nome',
                    dt_nasc = '$data',
                    login = '$login',
                    email = '$email',
                    telefone = '$telefone',
                    senha = '$senha',
                    cpf = '$cpf',
                    cep = '$cep',
                    rua = '$rua',
                    bairro = '$bairro',
                    cidade = '$cidade',
                    estado = '$estado',
                    genero = '$genero'
                WHERE id_usuario = $id_usuario";
    
        if ($conexao->query($sql) === TRUE) {
                echo "<script>
                    alert('Cliente atualizado com sucesso!');
                    window.location.href = 'home_adm.php';
                </script>";
        } else {
            echo "<script>
                alert('Erro no SQL: " . $conexao->error . "');
                window.history.back();
            </script>";
        }
    } else {
        echo "<script>
            alert('Requisição inválida.');
            window.location.href = 'home_adm.php';
        </script>";
    }
}

if (isset($_GET['tipo']) && ($_GET['tipo'] == 'cupom')){

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id_cupom = $_POST["id_cupom"];
        $tipo = $_POST["tipo"];
        $status = $_POST["status"];
        $data_fim = $_POST["data_fim"];
        $criado_em = $_POST["criado_em"];
        $descricao = $_POST["descricao"];
        $valor = $_POST["valor"];
    
        $sql = "UPDATE tb_cupons SET 
                    tipo = '$tipo',
                    ativo = '$status',
                    data_fim = '$data_fim',
                    criado_em = '$criado_em',
                    descricao = '$descricao',
                    valor = '$valor' WHERE id_cupom = $id_cupom";
    
        if ($conexao->query($sql) === TRUE) {
            echo "<script>
                alert('Cupom atualizado com sucesso!');
                window.location.href = 'home_adm.php';
            </script>";
        } else {
            echo "<script>
                alert('Erro no SQL: " . $conexao->error . "');
                window.history.back();
            </script>";
        }
    } else {
        echo "<script>
            alert('Requisição inválida.');
            window.location.href = 'home_adm.php';
        </script>";
    }
}

if (isset($_GET['tipo']) && ($_GET['tipo'] == 'usuario')){

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id_usuario = $_POST["id_usuario"];
        $nome = $_POST["name"];
        $data = $_POST["birthdate"];
        $email = $_POST["email"];
        $senha= $_POST["password"];
        $telefone = $_POST["telefone"];
        $cep = $_POST["cep"];
        $rua = $_POST["rua"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $genero = $_POST["gender"];

       $sqlSenhaConsulta = "SELECT senha FROM tb_usuarios WHERE id_usuario = $id_usuario;";
        $result = $conexao->query($sqlSenhaConsulta);

        if ($result->num_rows > 0) {
            $linha = $result->fetch_assoc();
            $senhaAtualHash = $linha['senha'];
        }

        if (!empty($senha)) {
            $senha = password_hash($senha, PASSWORD_DEFAULT);
        } else {
            $senha = $senhaAtualHash;
        }

    
        $sql = "UPDATE tb_usuarios SET 
                    nome = '$nome',
                    dt_nasc = '$data',
                    email = '$email',
                    senha = '$senha',
                    telefone = '$telefone',
                    cep = '$cep',
                    rua = '$rua',
                    bairro = '$bairro',
                    cidade = '$cidade',
                    estado = '$estado',
                    genero = '$genero'
                WHERE id_usuario = $id_usuario";
    
        if ($conexao->query($sql) === TRUE) {
                echo "<script>
                    alert('Usuario atualizado com sucesso!');
                    window.location.href = 'index.php';
                </script>";
        } else {
            echo "<script>
                alert('Erro no SQL: " . $conexao->error . "');
                window.history.back();
            </script>";
        }
    } else {
        echo "<script>
            alert('Requisição inválida.');
            window.location.href = 'index.php';
        </script>";
    }
}

?>  
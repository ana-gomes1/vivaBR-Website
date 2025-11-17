<?php 
include("conexao.php");


if (isset($_POST["id_usuario"])) {
    $id_usuario = $_POST["id_usuario"];
    $sql = "SELECT * FROM tb_usuarios WHERE id_usuario = $id_usuario";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0) {
        $usuario= $resultado->fetch_assoc();
    } else {
        echo "<script>
            alert('Usuário não encontrado.');
            window.location.href = 'home_adm.php';
        </script>";
        exit;
    }
} else {
    echo "<script>
        alert('Código do Usuário não informado.');
        window.location.href = 'home_adm.php';
    </script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>
    <link rel="stylesheet" href="./estilos/estilo-cadastro.css">
    <title>Cadastro</title>
</head>
<body>

<div class="container">

    <section class="conteudo">
    <main id="form_container">

    <div id="form_header">
        <h1 id="form_title">Atualizar Conta</h1>
		<?php if(!isset($_GET['tipo'])){?>
		<a href="home_adm.php">
			<button class="btn-default">
				<i class="fa-solid fa-reply"></i>
				Voltar
			</button>
		</a>
		<?php } else { ?>
			<a href="index.php">
			<button class="btn-default">
				<i class="fa-solid fa-reply"></i>
				Voltar
			</button>
		</a>
		<?php }?>
	</div>

	<div class="user-cadastrado">
		<p>Usuário Cadastrado com Sucesso!</p>
	</div>


	<form id="cadastroForm" method="post" action="atualizar.php<?=((isset($_GET['tipo'])) &&($_GET['tipo'] == 'usuario')) ? "?tipo=usuario" : "?tipo=cliente"?>"> 
		<div id="input_container">
			
			<input type="hidden" name="id_usuario" value="<?= $usuario['id_usuario'] ?>">
			<div class="input-box">
				<label for="name" class="form-label">Nome</label>
				<div class="input-field">
					<input type="text" name="name" id="nome" value="<?= $usuario['nome'] ?>"  class="form-control" placeholder="Fulano de Tal" required>
					<i class="fa-solid fa-user"></i>
				</div>
			</div>

			<?php if ((isset($_GET['tipo'])) && ($_GET['tipo'] == 'cliente')){?>
			<div class="input-box">
				<label for="user" class="form-label">Login</label>
				<div class="input-field">
					<input type="text" name="user" id="login" value="<?= $usuario['login'] ?>" class="form-control" placeholder="fulano123" required >
					<i class="fa-solid fa-user"></i>
				</div>
			</div>

			<?php } else {?>
				<input type="hidden" name="login" id="login" value="<?= $usuario['login'] ?>">
			<?php }?>

			<div class="input-box">
				<label for="birthdate" class="form-label">Nascimento</label>
				<div class="input-field">
					<input type="date" name="birthdate" id="birthdate" value="<?= $usuario['dt_nasc'] ?>" class="form-control" required>
				</div>
			</div>
			
			<?php if ((isset($_GET['tipo'])) && ($_GET['tipo'] == 'cliente')){?>
			<div class="input-box">
				<label for="email" class="form-label">E-mail</label>
				<div class="input-field">
					<input type="email" name="email" id="email" value="<?= $usuario['email'] ?>" class="form-control" placeholder="fulano123@gmail.com" required>
					<i class="fa-solid fa-envelope"></i>
				</div>
			</div>
			<?php } else {?>
				<input type="hidden" name="email" id="email" value="<?= $usuario['email'] ?>">
			<?php }?>
			
			<div class="input-box">
				<label for="password" class="form-label">Senha</label>
				<div class="input-field">
					<input type="password" name="password" id="senha" value="<?= $usuario['senha'] ?>" minlength="8" class="form-control" placeholder="********" required>
					<i class="fa-solid fa-eye-slash password-icon"></i>
				</div>
				<span class="error"></span>
			</div>


			<div class="input-box">
				<label for="confirm_password" class="form-label">Confirmar senha</label>
				<div class="input-field">
					<input type="password" id="confirm_password" value="<?= $usuario['senha'] ?>" minlength="8" class="form-control" placeholder="********" required>
					<i class="fa-solid fa-eye-slash password-icon"></i>
				</div>
				<span class="error"></span>
			</div>

			<div class="input-box">
				<label for="telefone" class="form-label">Telefone</label>
				<div class="input-field">
					<input type="text" name="telefone" id="telefone" value="<?= $usuario['telefone']?>" class="form-control"  title="O telefone precisa ter 11 dígitos" placeholder="(00)00000-0000" required>
					<i class="fa-solid fa-phone"></i>
				</div>
			</div>

			<?php if ((isset($_GET['tipo'])) && ($_GET['tipo'] == 'cliente')){?>
			<div class="input-box">
				<label for="cpf" class="form-label">CPF</label>
				<div class="input-field">
					<input type="text" name="cpf" id="cpf" class="form-control" value="<?= $usuario['cpf'] ?>"  title="O CPF precisa ter 11 dígitos" placeholder="000.000.000-00" required>
					<i class="fa-regular fa-id-card"></i>
				</div>
			</div>
			<?php } else{ ?>
				<input type="hidden" name="cpf" id="cpf" class="form-control" value="<?= $usuario['cpf'] ?>">
			<?php }?>
			<div class="input-box">
				<label for="cep" class="form-label">CEP</label>
				<div class="input-field">
					<input type="text" name="cep" id="cep" value="<?= $usuario['cep'] ?>" class="form-control"  title="Digite um CEP com 8 números" placeholder="00000-000" required>
					<i class="fa-solid fa-location-dot"></i>
				</div>
			</div>
			<div class="input-box">
				<label for="rua" class="form-label">Rua</label>
				<div class="input-field">
					<input type="text" name="rua" id="rua" value="<?= $usuario['rua'] ?>" class="form-control" placeholder="Rua dos Sonhos" required>
					<i class="fa-solid fa-location-dot"></i>
				</div>
			</div>
			<div class="input-box">
				<label for="bairro" class="form-label">Bairro</label>
				<div class="input-field">
					<input type="text" name="bairro" id="bairro" value="<?= $usuario['bairro'] ?>" class="form-control" placeholder="Campo Grande" required>
					<i class="fa-solid fa-location-dot"></i>
				</div>
			</div>
			<div class="input-box">
				<label for="cidade" class="form-label">Cidade</label>
				<div class="input-field">
					<input type="text" name="cidade" id="cidade" value="<?= $usuario['cidade'] ?>" class="form-control" placeholder="Rio de Janeiro" required>
					<i class="fa-solid fa-location-dot"></i>
				</div>
			</div>
			<div class="input-box">
				<label for="estado" class="form-label">Estado</label>
				<div class="input-field">
					<input type="text" name="estado" id="estado" value="<?= $usuario['estado'] ?>" class="form-control" placeholder="Rj" required>
					<i class="fa-solid fa-location-dot"></i>
				</div>
			</div>
			<div class="radio-container">
				<label class="form-label">Gênero</label>
				<div id="gender_inputs">
					<div class="radio-box">
						<input type="radio" name="gender" id="feminino" class="form-control" value="feminino" <?php if ($usuario['genero'] == 'feminino') echo 'checked'; ?> required>
						<label for="feminino" class="form-label">Feminino</label>
					</div>
					<div class="radio-box">
						<input type="radio" name="gender" id="masculino" class="form-control" value="masculino" <?php if ($usuario['genero'] == 'masculino') echo 'checked'; ?> required>
						<label for="masculino" class="form-label">Masculino</label>
					</div>
					<div class="radio-box">
						<input type="radio" name="gender" id="outros" class="form-control" value="outros" <?php if ($usuario['genero'] == 'outros') echo 'checked'; ?> required>
						<label for="outros" class="form-label">Outro</label>
					</div>
				</div>
			</div>

		</div>
		<button type="submit" id="atualizar" class="btn-default-cadastrar">
			<i class="fa-solid fa-check"></i>Salvar Atualizações
		</button>


	</form>
    </main>
    </section>

</div>
<script src="js/code.jquery.com_jquery-3.7.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
<script src="js/funcoes.js"></script>
<script src="js/darkMode.js"></script>
<script src="js/hamburguer.js"></script>
    
</body>
</html>
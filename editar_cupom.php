<?php 
include("conexao.php");

if (isset($_POST["id_cupom"])) {
    $id_cupom = $_POST["id_cupom"];
    $sql = "SELECT * FROM tb_cupons WHERE id_cupom = $id_cupom";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0) {
        $cupom = $resultado->fetch_assoc();
    } else {
        echo "<script>
            alert('Cupom não encontrado.');
            window.location.href = 'home_adm.php';
        </script>";
        exit;
    }
} else {
    echo "<script>
        alert('Código do Cupom não informado.');
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
		<a href="home_adm.php">
			<button class="btn-default">
				<i class="fa-solid fa-reply"></i>
				Voltar
			</button>
		</a>
	</div>

	<div class="user-cadastrado">
		<p>Usuário Cadastrado com Sucesso!</p>
	</div>


	<form id="cadastroCupom" method="post" action="atualizar.php?tipo=cupom"> 
		<div id="input_container">
			<input type="hidden" name="id_cupom" value="<?= $cupom['id_cupom'] ?>">
			<div class="input-box">
				<label for="name" class="form-label">Código</label>
				<div class="input-field">
					<input type="text" name="cod" id="codigo" class="form-control" value="<?= $cupom['codigo'] ?>" readonly>
					<i class="fa-solid fa-qrcode"></i>
				</div>
			</div>

			<div class="radio-container">
				<div>
					<label class="form-label">Tipo de desconto</label>
					<div id="gender_inputs">
						<div class="radio-box">
							<input type="radio" name="tipo" id="percentual" class="form-control" <?php if ($cupom['ativo'] == 1) echo 'checked'; ?> value="percentual" required>
							<label for="percentual" class="form-label">Percentual</label>
						</div>
						<div class="radio-box">
							<input type="radio" name="tipo" id="fixo" class="form-control" value="fixo" <?php if ($cupom['ativo'] == 0) echo 'checked'; ?> required>
							<label for="fixo" class="form-label">Fixo</label>
						</div>
					</div>
				</div>
				

				<div>
					<label class="form-label">Status</label>
					<div id="gender_inputs">
						<div class="radio-box">
							<input type="radio" name="status" id="percentual" class="form-control" <?php if ($cupom['ativo'] == 1) echo 'checked'; ?> value="1" required>
							<label for="percentual" class="form-label">Ativo</label>
						</div>
						<div class="radio-box">
							<input type="radio" name="status" id="fixo" class="form-control" value="0" <?php if ($cupom['ativo'] == 0) echo 'checked'; ?> required>
							<label for="fixo" class="form-label">Desativado</label>
						</div>
					</div>
				</div>

			</div>

			<div class="input-box">
				<label for="data_fim" class="form-label">Data de fim</label>
				<div class="input-field">
					<input type="date" name="data_fim" id="data_fim" class="form-control" required value="<?= $cupom['data_fim'] ?>">
				</div>
			</div>

			<div class="input-box">
				<label for="criado_em" class="form-label">Criado em</label>
				<div class="input-field">
					<input type="date" name="criado_em" id="criado_em" class="form-control" required value="<?= $cupom['criado_em'] ?>">
				</div>
			</div>
			
			<div class="input-box">
				<label for="descricao" class="form-label">Descrição</label>
				<div>
					<textarea id="descricao" style="width: 100%; border-radius: 10px; font-family: 'Arial'; padding: 5px;" name="descricao"><?= $cupom['descricao'] ?></textarea>
				</div>
			</div>
	

			
			<div class="input-box">
				<label for="password" class="form-label">Valor</label>
				<div class="input-field">
					<input type="text" name="valor" id="valor" class="form-control" placeholder="Ex.: R$ 5,00 ou 5%" required value="<?= $cupom['valor'] ?>">
					<i class="fa-solid fa-brazilian-real-sign"></i>
				</div>
				<p class="text-(--fnt-color) text-[0.8rem]">* Em relação ao tipo de desconto</p>
				<span class="error"></span>
			</div>

		</div>
		<button type="submit" id="criar" class="btn-default-cadastrar">
			<i class="fa-solid fa-check"></i>Editar cupom
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
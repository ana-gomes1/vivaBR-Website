<?php

require('FPDF-master/fpdf.php');
include("conexao.php");



if ($_GET['tipo'] == 'clientes'){
$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial', 'B', 10);
	$pdf->Cell(0, 10, utf8_decode('Usuários Cadastrados - VivaBR'), 0, 1, 'C');
	$pdf->Ln(10);

	// Cabeçalhos
	$pdf->SetFont('Arial', 'B', 6);
	$pdf->Cell(20, 10, utf8_decode('Nome'), 1);
	$pdf->Cell(17, 10, utf8_decode('CPF'), 1);
	$pdf->Cell(30, 10, 'E-mail', 1);
	$pdf->Cell(18, 10, utf8_decode('Telefone'), 1);
	$pdf->Cell(15, 10, 'Nascimento', 1);
	$pdf->Cell(13, 10, utf8_decode('CEP'), 1);
	$pdf->Cell(20, 10, utf8_decode('Rua'), 1);
	$pdf->Cell(15, 10, utf8_decode('Bairro'), 1);
	$pdf->Cell(20, 10, utf8_decode('Cidade'), 1);
	$pdf->Cell(10, 10, 'Estado', 1);
	$pdf->Cell(11, 10, utf8_decode('Gênero'), 1);
	$pdf->Ln();

	$sql = "SELECT * FROM tb_usuarios";
	$resultado = $conexao->query($sql);

	$pdf->SetFont('Arial', '', 6);
	while ($linha = $resultado->fetch_assoc()) {
		$pdf->Cell(20, 10, utf8_decode($linha['nome']), 1);
		$pdf->Cell(17, 10, utf8_decode($linha['cpf']), 1);
		$pdf->Cell(30, 10, utf8_decode($linha['email']), 1);
		$pdf->Cell(18, 10, utf8_decode($linha['telefone']), 1);
		$pdf->Cell(15, 10, $linha['dt_nasc'], 1);
		$pdf->Cell(13, 10, utf8_decode($linha['cep']), 1);
		$pdf->Cell(20, 10, utf8_decode($linha['rua']), 1);
		$pdf->Cell(15, 10, utf8_decode($linha['bairro']), 1);
		$pdf->Cell(20, 10, utf8_decode($linha['cidade']), 1);
		$pdf->Cell(10, 10, $linha['estado'], 1);
		$pdf->Cell(11, 10, utf8_decode($linha['genero']), 1);
		$pdf->Ln();
	}

$pdf->Output();
}

if ($_GET['tipo'] == 'quiz'){
$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial', 'B', 10);
	$pdf->Cell(0, 10, utf8_decode('Total de Jogadas(Quiz) - VivaBR'), 0, 1, 'C');
	$pdf->Ln(10);

	// Cabeçalhos
	$pdf->SetFont('Arial', 'B', 6);
	$pdf->Cell(20, 10, utf8_decode('Código do Quiz'), 1);
	$pdf->Cell(17, 10, utf8_decode('Jogador'), 1);
	$pdf->Cell(20, 10, 'Acertos', 1);
	$pdf->Cell(24, 10, utf8_decode('Data do jogo'), 1);

	$pdf->Ln();

	$sql = "SELECT * FROM tb_quiz";
	$resultado = $conexao->query($sql);

	$pdf->SetFont('Arial', '', 6);
	while ($linha = $resultado->fetch_assoc()) {
		$pdf->Cell(20, 10, utf8_decode($linha['id_quiz']), 1);
		$pdf->Cell(17, 10, utf8_decode($linha['usuario']), 1);
		$pdf->Cell(20, 10, utf8_decode($linha['acertos']), 1);
		$pdf->Cell(25, 10, utf8_decode($linha['data_jogo']), 1);
		$pdf->Ln();
	}

$pdf->Output();
}

if ($_GET['tipo'] == 'cupom'){
$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial', 'B', 12);
	$pdf->Cell(0, 10, utf8_decode('Cupons Cadastrados - VivaBR'), 0, 1, 'C');
	$pdf->Ln(10);

	// Cabeçalhos
	$pdf->SetFont('Arial', 'B', 6);
	$pdf->Cell(20, 10, utf8_decode('Id do Cupom'), 1);
	$pdf->Cell(17, 10, utf8_decode('Código'), 1);
	$pdf->Cell(30, 10, 'Tipo de desconto', 1);
	$pdf->Cell(18, 10, utf8_decode('Data de fim'), 1);
	$pdf->Cell(15, 10, 'Status', 1);
	$pdf->Cell(13, 10, utf8_decode('Criado em'), 1);
	$pdf->Cell(15, 10, utf8_decode('Valor'), 1);
	$pdf->Ln();

	$sql = "SELECT * FROM tb_cupons";
	$resultado = $conexao->query($sql);

	
	$pdf->SetFont('Arial', '', 6);
	while ($linha = $resultado->fetch_assoc()) {
		$pdf->Cell(20, 10, utf8_decode($linha['id_cupom']), 1);
		$pdf->Cell(17, 10, utf8_decode($linha['codigo']), 1);
		$pdf->Cell(30, 10, utf8_decode($linha['tipo']), 1);
		$pdf->Cell(18, 10, utf8_decode($linha['data_fim']), 1);
		$pdf->Cell(15, 10, ($linha['ativo'] == 1 ? 'Ativo' : 'Desativado'), 1);
		$pdf->Cell(13, 10, utf8_decode($linha['criado_em']), 1);
		$pdf->Cell(15, 10, utf8_decode($linha['valor']), 1);
		$pdf->Ln();
	}


$pdf->Output();
}


?>
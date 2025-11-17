<?php
session_start();

include ("sessao.php");

if (!isset($_SESSION['usuario'])) {
	header('Location: login.php');
	exit;
}

print_r($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/estilo-quiz.css">
	<link rel="stylesheet" href="estilos/componentMenuProfile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>
    <title>Quiz</title>
</head>
<body>
<div class="container">
    <header>
        <div class="gradiente">
        </div>

		<!--Hamburguer/menu-responsivo-->

		<button class="mobile-menu">
			<div class="line1" id="linha"></div>
			<div class="line2" id="linha"></div>
			<div class="line3" id="linha"></div>
		</button>

        
		<div class="logo">
			<a href="index.php" class="home">vivaBR - Home</a>
            <a href="index.php"><img src="imagens/logo/logo.png"></a>
		</div>
        
		<nav class="nav">
            <ul class="nav-list">
                <li><a href="regioes.php">Regiões</a></li>
				<li><a href="viagens.php">Viagens</a></li>
				<li><a href="quiz.php">Quiz</a></li>
				<li><a href="quem-somos.php">Quem somos</a></li>
			</ul>
		</nav>

		<?php exibirMenuProfile(); ?>
		
        <div class="dark-mode">
			<input type="checkbox" class="checkbox" id="chk">
			<label class="label" for="chk">
				<i class="fa-solid fa-moon"></i>
				<i class="fa-solid fa-sun"></i>
				<div class="ball"></div>
			</label>
		</div>
	</header>

<main>

    <div class="app">
        <h1>Quiz</h1>
        <div class="quiz">
            <h2 id="question">Pergunta</h2>
            <div id="answer-buttons">
                <button class="btn">Pergunta 1</button>
                <button class="btn">Pergunta 2</button>
                <button class="btn">Pergunta 3</button>
                <button class="btn">Pergunta 4</button>
            </div>

			<div class="cupom1 cupom">
				<img src="imagens/cupom/desconto5.png" alt="">
			</div>

			<div class="cupom2 cupom">
				<img src="imagens/cupom/desconto10.png" alt="">
			</div>

			<div class="cupom3 cupom">
				<img src="imagens/cupom/desconto25.png" alt="">
			</div>

			<div class="cupom4 cupom">
				<img src="imagens/cupom/desconto35.png" alt="">
			</div>

			<div class="cupom5 cupom">
				<img src="imagens/cupom/desconto40.png" alt="">
			</div>

            <button id="next-btn">Próximo</button>
        </div>
    </div>

	
</main>


	<!----Rodapé---->
	<footer>
		
		<div class="footer">
			<div class="logo-rodape">
				<a href="index.php"><img src="imagens/logo/logo.png"></a>
			</div>
			
			<div class="nav-list-footer">
				<ul>
					<li><a href="regioes.php">Regiões</a></li>
					<li><a href="viagens.php">Viagens</a></li>
					<li><a href="quiz.php">Quiz</a></li>
					<li><a href="quem-somos.php">Quem somos</a></li>
				</ul>
		
				<div class="contact">
					<div class="">
						<h1 class="">Contato</h1>
						<div class="icons-rodape">
							<a href="https://www.instagram.com/viva.br2025/" target="_blank"><i class="fa-brands fa-instagram text-3xl"></i></a>
							<a href="https://github.com/ana-gomes1/vivaBR-Website" target="_blank"><i class="fa-brands fa-github text-3xl"></i></a>
							<a href=""><i class="fa-brands fa-linkedin text-3xl"></i></a>
							<a href=""><i class="fa-brands fa-whatsapp text-3xl"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="txt-footer">
			<p>© vivaBR 2025</p>
		</div>
	</footer>
</div>
    <script src="js/script.js"></script>
    <script src="js/darkMode.js"></script>
	<script src="js/hamburguer.js"></script>

</body>
</html>
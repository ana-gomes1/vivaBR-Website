<?php
session_start();

include ("sessao.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>vivaBR - Seu site de viagem</title>
	<link rel="stylesheet" type="text/css" href="estilos/viagens.css">
	<link rel="stylesheet" href="estilos/componentMenuProfile.css">
	<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>
</head>

<body>
	<header>

		<!--Gradiente do cabeçalho-->
		<div class="gradiente">
		</div>

		<!--Hamburguer/menu-responsivo-->

		<button class="mobile-menu">
			<div class="line1" id="linha"></div>
			<div class="line2" id="linha"></div>
			<div class="line3" id="linha"></div>
		</button>

		<!--Logo do site-->

		<div class="logo">
			<a href="index.php"><img src="imagens/logo/logo.png"></a>
		</div>

		<div class="space"></div>

		<!--Barra de navegação-->
		<nav class="nav nav-mobile">
			<ul class="nav-list">
				<li><a href="regioes.php">Regiões</a></li>
				<li><a href="viagens.php">Viagens</a></li>
				<li><a href="quiz.php">Quiz</a></li>
				<li><a href="quem-somos.php">Quem somos</a></li>
			</ul>
		</nav>


		<!--Login/perfil-->
		<?php exibirMenuProfile(); ?>
		
		<!--------Botão do Dark mode--------->
		<div class="darkmode">
			<input type="checkbox" class="checkbox" id="chk">
			<label class="label" for="chk">
				<i class="fa-solid fa-moon"></i>
				<i class="fa-solid fa-sun"></i>
				<div class="ball"></div>
			</label>
		</div>

	</header>

	<!----- Banner principal    ---->
	<main>
		<div class="banner">
		</div>
		<div class="txt-banner"><p>Desperte seu espírito aventureiro.</p></div>
	</main>

	<!--Primeira seção-->
		


	<!---Segunda seção--->
	<section>
		<div class="secao2">
			<h1>Dicas de Viagens</h1>
        <p>Descubra segredos para viajar com inteligência e aproveitar cada momento!</p>
			<div class="imagem">
				
			</div>
			<p >Antes de viajar fique atento nessa dicas:</p>
		</div>

	</section>

	<main>
 <!-- Seção com as dicas -->
 <section class="dicas-content">
	<article class="dica-item">
	  <img src="imagens/dicas/planejamento.jpg" alt="Planejamento">
	  <div class="dica-texto">
		<h2>Planeje Seu Roteiro</h2>
		<p>Pesquise sobre o destino, crie um itinerário e programe suas atividades para ter o máximo aproveitamento.</p>
	  </div>
	</article>

	<article class="dica-item">
	  <img src="imagens/dicas/economize.jpg" alt="Economize">
	  <div class="dica-texto">
		<h2>Reserve com Antecedência</h2>
		<p>Compras antecipadas de passagens e hospedagens podem render descontos e deixar seu roteiro mais tranquilo.</p>
	  </div>
	</article>

	<article class="dica-item">
	  <img src="imagens/dicas/cultura.jpg" alt="Cultura Local">
	  <div class="dica-texto">
		<h2>Explore a Cultura Local</h2>
		<p>Experimente a culinária, visite feiras e troque experiências com os locais para viver o destino intensamente.</p>
	  </div>
	</article>

	<article class="dica-item">
	  <img src="imagens/dicas/seguranca.jpg" alt="Segurança">
	  <div class="dica-texto">
		<h2>Cuide da Sua Segurança</h2>
		<p>Mantenha seus documentos e pertences seguros e esteja atento às recomendações do destino para evitar imprevistos.</p>
	  </div>
	</article>
  </section>
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

	<!--Javascript-->
	<script src="js/darkMode.js"></script>
	<script src="js/hamburguer.js"></script>
</body>
</html>
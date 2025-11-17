<?php
session_start();

include ("sessao.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos/estado.css">
	<link rel="stylesheet" href="estilos/componentMenuProfile.css">
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>

</head>
<body>
<div class="container">
    <header>

		<!--Gradiente do cabeçalho-->
		<div class="gradiente">
		</div>

		<!--Hamburguer/menu-responsivo-->

		<div class="mobile-menu">
			<div class="line1"></div>
			<div class="line2"></div>
			<div class="line3"></div>
		</div>

		<!--Logo do site-->

		<div class="logo">
			<a href="index.php"><img src="imagens/logo/logo.png"></a>
		</div>

		<div class="space"></div>

		<!--Barra de navegação-->
		<nav class="nav">
			<ul class="nav-list">
				<li><a href="regioes.php">Regiões</a></li>
				<li><a href="viagens.php">Viagens</a></li>
				<li><a href="quiz.php">Quiz</a></li>
				<li><a href="quem-somos.php">Quem somos</a></li>
			</ul>
		</nav>

		<!--Login/cadastrO-->
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

    <main>
		<div class="banner">
		</div>
		<div class="txt-banner"><p>REGIÃO SUL DO BRASIL</p></div>
	</main>

    <section>
    <div class="conteudo">
        
        <div class="line-cont"></div>
        
        <div class="cont-all">
            <h1>Curitiba</h1>
        <h3>Capital ecológica do Brasil</h3>
        <div class="conteudo-img">
          <img src="imagens/pr/curitiba.jpg" alt="Curitiba - PR">
        </div>
        <h2 class="left">1. Origem</h2>
        <p>Curitiba é conhecida pelo seu planejamento urbano e sustentabilidade. É capital do Paraná.</p>
        <h2 class="right">2. Pontos Turísticos</h2>
        <p>Jardim Botânico, Ópera de Arame e o Museu Oscar Niemeyer são alguns destaques da cidade.</p>
      </div>

      <!-- Foz do Iguaçu -->
      <div class="conteudo-cidade">
        <h1>Foz do Iguaçu</h1>
        <h3>O poder das águas</h3>
        <div class="conteudo-img">
          <img src="imagens/pr/foz-do-iguacu.jpeg" alt="Foz do Iguaçu - PR">
        </div>
        <h2 class="left">1. Origem</h2>
        <p>Foz do Iguaçu é uma cidade de fronteira com Paraguai e Argentina, marcada pela diversidade cultural.</p>
        <h2 class="right">2. Pontos Turísticos</h2>
        <p>Cataratas do Iguaçu e Usina de Itaipu são atrações imperdíveis da região.</p>
      </div>

      <!-- Gramado -->
      <div class="conteudo-cidade">
        <h1>Gramado</h1>
        <h3>Charme da Serra Gaúcha</h3>
        <div class="conteudo-img">
          <img src="imagens/rs/gramado.jpeg" alt="Gramado - RS">
        </div>
        <h2 class="left">1. Origem</h2>
        <p>Gramado tem forte influência alemã e italiana, sendo um destino muito visitado no inverno.</p>
        <h2 class="right">2. Pontos Turísticos</h2>
        <p>Lago Negro, Rua Coberta e Mini Mundo são atrações conhecidas.</p>
      </div>

      <!-- Porto Alegre -->
      <div class="conteudo-cidade">
        <h1>Porto Alegre</h1>
        <h3>Coração do Rio Grande do Sul</h3>
        <div class="conteudo-img">
          <img src="imagens/rs/porto-alegre.jpeg" alt="Porto Alegre - RS">
        </div>
        <h2 class="left">1. Origem</h2>
        <p>Capital do RS, é uma cidade histórica, cultural e com forte identidade gaúcha.</p>
        <h2 class="right">2. Pontos Turísticos</h2>
        <p>Mercado Público, Usina do Gasômetro e o Parque da Redenção são locais famosos.</p>
      </div>
    </div>

    </section>

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

    <script src="js/darkMode.js"></script>
	<script src="js/hamburguer.js"></script>
</body>
</html>
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>
    <link rel="stylesheet" href="estilos/estilo-login.css">
    <title>Login</title>

</head>
<body>

	<?php 
    if (!empty($_SESSION['msg'])){
    ?>
    <div class="sucessMsg" id="msgSuccess">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="48px" fill="#319631"><path d="M480-80q-85 0-158-30.5T195-195q-54-54-84.5-127T80-480q0-84 30.5-157T195-764q54-54 127-85t158-31q75 0 140 24t117 66l-43 43q-44-35-98-54t-116-19q-145 0-242.5 97.5T140-480q0 145 97.5 242.5T480-140q145 0 242.5-97.5T820-480q0-30-4.5-58.5T802-594l46-46q16 37 24 77t8 83q0 85-31 158t-85 127q-54 54-127 84.5T480-80Zm-59-218L256-464l45-45 120 120 414-414 46 45-460 460Z"/></svg>
            <?= $_SESSION['msg']; ?>
        </div>
    </div>
        <?php unset($_SESSION['msg']); ?>
    <?php 
        }
    ?>
	
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
			<a href="index.html" class="home">vivaBR - Home</a>
			<a href="index.html"><img src="imagens/logo/logo.png"></a>
		</div>

		<nav class="nav">
			<ul class="nav-list">
				<li><a href="regioes.html">Regiões</a></li>
				<li><a href="viagens.html">Viagens</a></li>
				<li><a href="quiz.html">Quiz</a></li>
				<li><a href="quem-somos.html">Quem somos</a></li>
			</ul>
		</nav>

		<div class="login">
			<div class="image-links">
				<div class="display icons" id="profile-pic">
					<a href="login.html"><img src="imagens/login/profile.png"></a>
				</div>

				<div class="display icons text">
					<a href="login.html" id="texto-login">Login</a>
				</div>

				<div class="display line">
					<img src="imagens/login/line.png" class="line">
				</div>

				<div class="display icons">
					<a href="busca.html"><img src="imagens/login/lupa.png"></a>
				</div>
			</div>
		</div>

        <div class="dark-mode">
			<input type="checkbox" class="checkbox" id="chk">
			<label class="label" for="chk">
				<i class="fa-solid fa-moon"></i>
				<i class="fa-solid fa-sun"></i>
				<div class="ball"></div>
			</label>
		</div>
	</header>

    <section>

	<main class="principal_container"> 
	
		<div class="side-image">
			<h1>Ainda não tem uma conta?</h1>
			<p>Cadastre-se agora mesmo de forma rápida e prática!</p>
			<a><button><a href="cadastro.html">Criar conta</a></button>
		</div>

    <div id="form_container">
    <div id="form_header">
        <h1 id="form_title">Login</h1>
        <button class="btn-default">
            <i class="fa-solid fa-right-to-bracket"></i>
        </button>
    </div>

	<div class="erro">
		<p>Nome/email ou senha incorretos. Digite novamente</p>
	</div>

        <form id="loginForm">
            <div id="input_container">
                <div class="input-box">
                    <label for="login" class="form-label">Nome de login</label>
                    <div class="input-field">
                        <input type="text" name="login" id="login" class="form-control" placeholder="fulano123" required >
                        <i class="fa-solid fa-user"></i>
                    </div>
                </div>
                <div class="input-box">
                    <label for="email" class="form-label">E-mail</label>
                    <div class="input-field">
                        <input type="email" name="email" id="email" class="form-control" placeholder="fulano123@gmail.com" required>
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                </div>
                <div class="input-box">
                    <label for="password" class="form-label">Senha</label>
                    <div class="input-field">
                        <input type="password" name="password" id="password" minlength="8" class="form-control" placeholder="********" required>
                        <i class="fa-solid fa-eye-slash password-icon"></i>
                    </div>
                    <span class="error"></span>
                </div>
            </div>
            <button class="btn-default" onclick="logarUsuario(event)"><i class="fa-solid fa-check"></i>Logar</button>
			<div class="cadastrese">
				<p>Ainda não tem uma conta? Crie a sua agora mesmo. <a href="cadastro.html">Criar Conta</a></p>
			</div>
        </form>
    
	</main>
	 
    </section>

    <footer>
		<div class="logo-rodape">
			<a src="index.html"><img src="imagens/logo/logo.png"></a>
		</div>
		<div class="nav-list-footer">
			<ul>
				<li><a href="regioes.html">Regiões</a></li>
				<li><a href="viagens.html">Viagens</a></li>
				<li><a href="quiz.html">Quiz</a></li>
				<li><a href="quem-somos.html">Quem somos</a></li>
			</ul>
		</div>
		<div class="txt-footer">
			<p>© vivaBR 2025</p>
		</div>
	</footer>
</div>

    <script src="js/code.jquery.com_jquery-3.7.0.min.js"></script>
    <script src="js/funcoes.js"></script>
    <script src="js/darkMode.js"></script>
	<script src="js/hamburguer.js"></script>

</body>
</html>
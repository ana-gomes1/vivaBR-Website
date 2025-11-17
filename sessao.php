<?php

function exibirMenuProfile(){
    if ((isset($_SESSION['email'])) && (($_SESSION['email']) == 'adm@gmail.com')) {
        echo
		'<div id="btnProfile">
			<div class="btnProfile">
				  <button class="btnProfile">'.'Olá, '. ($_SESSION['usuario']) .'</button>
				  <i class="fa-solid fa-chevron-down"></i>
			</div>

			<div id="profileMenu">
				
				<a href="home_adm.php" style="color: #3179BE;">
					<i class="fa-solid fa-user-gear"></i>
					Administrador
				</a>

				<a href="logout.php">
					<i class="fa-solid fa-right-from-bracket"></i>
					Sair
				</a>
			</div>
		</div>';
    } else if ((isset($_SESSION['usuario']))){ 
		echo
		'<div id="btnProfile">
			<div class="btnProfile">
				  <button class="btnProfile">'.'Olá, '. ($_SESSION['usuario']) .'</button>
				  <i class="fa-solid fa-chevron-down"></i>
			</div>
			

			<div id="profileMenu">
				<form method="post" action="editar_usuario.php?tipo=usuario" style="width: 100%;">
				<input type="hidden" name="id_usuario" value="'. $_SESSION["id_usuario"] . '">
					<button class="linkBtnProfile" type="submit">
						<i class="fa-solid fa-pen"></i>
						Editar dados pessoais
					</button>				
				</form>

				<a href="logout.php">
					<i class="fa-solid fa-right-from-bracket"></i>
					Sair
				</a>
			</div>
		</div>';

	
	}else {
        echo
		
		'<div class="login">
            <div class="image-links">

				<div class="display icons">
					<a href="login.php"><img src="imagens/login/profile.png"></a>
				</div>
				
				<div class="display icons text">
					<a href="login.php">Login</a>
				</div>

			</div>
		</div>';
    }
}

?>
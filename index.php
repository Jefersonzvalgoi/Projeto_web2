<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Marido de Aluguel - Login</title>
<link rel="stylesheet" href="estilo-css/log_cad.css">
</head>
<body>
	<header>
		<div>
			<button onclick="menuShow()">
				<img class="bt_menu" alt="Menu do site" src="img/menu.png">
			</button>
			<img alt="Logo do site" src="img/logo.png"> 
		</div>
	</header>
	<main>
		<section>
			<img alt="Logo do Site" src="img/logo.png">
			<article>
				<form action="pages/home.php" method="post">
				<h1>Marido de Aluguel</h1>
				<span>Manutenções em geral</span>
					<div class="box-user">
						<span>Email</span> 
						<input type="email" name="user_email" id="user_email" required>
						<span>Senha</span> 
						<input type="password" name="user_password" id="user_password" required minlength="8"> 
						<a href="#">Esqueceu a senha?</a> 
						<a href="pages/cadastro.php">Cadastre-se aqui!</a>
					</div>
					<button type="submit" class="btn-site">Entrar</button>
				</form>
			</article>
		</section>
	</main>
	<footer>
		<p>&copy; Desenvolvido por Jeferson Valgoi - 2023</p>
	</footer>
<script type="text/javascript" src="js/site.js"></script>
</body>
</html>
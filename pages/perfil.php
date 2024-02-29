<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Marido de Aluguel - Empresa</title>
<link rel="stylesheet" href="../estilo-css/perfil.css">
</head>
<body>
	<header>
		<div>
			<button onclick="menuShow()">
				<img class="bt_menu" alt="Menu do site" src="../img/menu.png">
			</button>
			<img alt="Logo do site" src="../img/logo.png"> 
			<nav class="menu_web">
				<ul>
					<li>
						<a href="home.php">HOME</a>
					</li>
					<li>
						<a href="servicos.php">SERVIÇOS</a>
					</li>
					<li>
						<a href="empresa.php">EMPRESA</a>
					</li>
					<li>
						<a href="#">SOU PROFISSIONAL</a>
					</li>
					<li>
						<a href="perfil.php">PERFIL</a>
					</li>
					<li>
						<a href="#">SAIR</a>
					</li>
				</ul>
			</nav>
			<a href="solicitacao.php" class="btn-site">Solicite um orçamento</a>
		</div>
		<nav class="menu_mobile">
			<ul>
				<li>
					<a href="home.php">HOME</a>
				</li>
				<li>
					<a href="servicos.php">SERVIÇOS</a>
				</li>
				<li>
					<a href="empresa.php">EMPRESA</a>
				</li>
				<li>
					<a href="#">SOU PROFISSIONAL</a>
				</li>
				<li>
					<a href="perfil.php">PERFIL</a>
				</li>
				<li>
					<a href="#">SAIR</a>
				</li>
			</ul>
			</nav>
		
	</header>
	<nav>
		<span>
			<a href="home.php">Home</a>
		</span>
		<span>></span>
		<span>Perfil de Usuário</span>
	</nav>
	<main>
        <section>
			<img id="user_img" src="#">
            <h2>Nome do Usário</h2>
            <span id="user_email">emaildousuario@email.com</span>
            <span id="user_phone">Telefone:</span>
            <span id="user_password">Senha:********</span>
			<button id="btn_edit_perfil" class="btn-site">Editar Perfil</button>
		</section>
		<section>
			<h2>Minhas Solicitações</h2>
            <span>Troca de lãmpada</span>
			<span>Solicitação realizada na data xx/xx/xxxx</span>
            <span>A ser efetuada na data xx/xx/xxxx</span>
            <p>descrição da solicitação</p>
			<div>
            	<button class="btn-site">Editar</button>
            	<button class="btn-site">Excluir</button>
			</div>
		</section>
		
		
	</main>
	<footer>
		<a href="home.php">home</a> <a href="servicos.php">serviços</a> <a href="empresa.php">empresa</a>
		<a href="#">sou profissional</a> <a href="perfil.php">perfil</a> <a href="#">sair</a>
		<p>&copy; Desenvolvido por Jeferson Valgoi - 2023</p>
</footer>
</body>
<script type="text/javascript" src="../js/site.js"></script>
</html>
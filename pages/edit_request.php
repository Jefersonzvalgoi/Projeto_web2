<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Marido de Aluguel - Empresa</title>
<link rel="stylesheet" href="../estilo-css/solicitacao.css">
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
			<a href="login.php" class="btn-site">Solicite um orçamento</a>
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
		<span>Solicitações</span>
	</nav>
	<main>
		<section>
			<h1>Editar Solicitação</h1>
		</section>
		<section>
			<form action="" method="post">
				<div>
					<label for="request_title">Título da solicitação</label>
					<input type="text" name="request_title" id="request_title" required> 
					<label for="request_date">Data que deseja realizar o serviço</label>
					<input type="date" name="request_date" id="request_date" required> 
					<label for="request_description">Descrição do serviço desejado</label>
					<textarea rows="5" cols="25" name="request_description" id="request_description" placeholder="Descrição com no minimo 50 caractéres." required minlength="50"></textarea>
					<label>Classifique a sua solicitação</label>
				</div>
				<div>
					<div>
						<input type="radio" name="request_classification" id="request_electrician" value="eletricien">
						<label for="request_electrcian">Eletricista</label>
					</div> 
					<div>
						<input type="radio" name="request_classification" id="request_hydraulic" value="hydraulic">
						<label for="request_hydraulic">Encanador e Hidráulica</label>
					</div>
					<div>
						<input type="radio" name="request_classification" id="request_masonry" value="masonry">
						<label for="request_masonry">Pedreiro e Alvenaria</label>
					</div>
					<div>
						<input type="radio" name="request_classification" id="request_painter" value="painter">
						<label for="request_painter">Pintor residencial e empresarial</label>
					</div> 
				</div>
				<button type="submit" class="btn-site">Salvar Solicitação</button>
			</form>
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
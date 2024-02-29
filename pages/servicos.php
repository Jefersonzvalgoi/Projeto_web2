<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Marido de Aluguel - Serviços</title>
<link rel="stylesheet" href="../estilo-css/servicos.css">
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
		<span> <a href="home.php">Home</a>
		</span> <span>></span> <span>Serviços</span>
	</nav>
	<main>
		<section>
			<h1>Reformas & manutenções em geral</h1>
			<p>
				A <b>Marido de Aluguel</b> foi criada para oferecer agilidade,
				tranquilidade e qualidade aos clientes. Temos a certeza que você vai
				se surpreender com nossos serviços e atendimento. Deixamos aqui uma
				breve introdução dos serviços que prestamos:
			</p>
		</section>
		<section class="section_cards">
		<section class="card">
			<div id="img_pedreiro"></div>
			<h2>Pedreiro e Alvenaria</h2>
			<p>Saiba mais sobre os serviços de pedreiro Alvenaria e todo tipo
				de reformas.</p>
			<a href="solicitacao.php" class="btn-site"> Solicite um orçamento </a>
		</section>
		<section class="card">
			<div id="img_hidraulica"></div>
			<h2>Encanador e Hidráulica</h2>
			<p>Buscando encanador? Nós podemos te ajudar em qualquer serviço
				hidráulico.</p>
			<a href="solicitacao.php" class="btn-site"> Solicite um orçamento </a>
		</section>
		</section>
		<section class="section_cards">
		<section class="card">
			<div id="img_eletrica"></div>
			<h2>Eletricista</h2>
			<p>Buscando eletricista? Nós podemos te ajudar em qualquer
				serviço elétrico.</p>
			<a href="solicitacao.php" class="btn-site"> Solicite um orçamento </a>
		</section>
		<section class="card">
			<div id="img_pintor"></div>
			<h2>Pintor residencial e empresarial</h2>
			<p>Buscando encanador? Nós podemos te ajudar em qualquer serviço hidráulico.</p>
			<a href="solicitacao.php" class="btn-site"> Solicite um orçamento </a>
		</section>
		</section>
	</main>
	<footer>
		<a href="home.php">home</a> <a href="servicos.php">serviços</a> <a href="empresa.php">empresa</a>
		<a href="#">sou profissional</a> <a href="perfil.php">perfil</a> <a href="#">sair</a>
		<p>&copy; Desenvolvido por Jeferson Valgoi - 2023</p>
</footer>
	<script type="text/javascript" src="../js/site.js"></script>
</body>
</html>
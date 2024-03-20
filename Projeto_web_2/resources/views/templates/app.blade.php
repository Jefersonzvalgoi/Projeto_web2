<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'Marido de Aluguel')</title>
@yield('css', '')
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
						<a href="/home">HOME</a>
					</li>
					<li>
						<a href="/servicos">SERVIÇOS</a>
					</li>
					<li>
						<a href="/empresa">EMPRESA</a>
					</li>
					<li>
						<a href="">SOU PROFISSIONAL</a>
					</li>
					<li>
						<a href="{{route('solicitation.index')}}">PERFIL</a>
					</li>
					<li>
						<a href="{{route('logout')}}">SAIR</a>
					</li>
				</ul>
			</nav>
			<a href="{{route('solicitation.create')}}" class="btn-site">Solicite um orçamento</a>
		</div>
		<nav class="menu_mobile">
				<ul>
					<li>
						<a href="/home">HOME</a>
					</li>
					<li>
						<a href="/servicos">SERVIÇOS</a>
					</li>
					<li>
						<a href="/empresa">EMPRESA</a>
					</li>
					<li>
						<a href="#">SOU PROFISSIONAL</a>
					</li>
					<li>
						<a href="{{route('solicitation.index')}}">PERFIL</a>
					</li>
					<li>
						<a href="{{route('logout')}}">SAIR</a>
					</li>
				</ul>
			</nav>

	</header>
	<nav>
		@yield('nav', '')
	</nav>
	<main>
		@yield('content', '')
	</main>
	<footer>
		<a href="/home">home</a> <a href="/servicos">serviços</a> <a href="/empresa">empresa</a>
		<a href="#">sou profissional</a> <a href="{{route('solicitation.index')}}">perfil</a> <a href="{{route('logout')}}">sair</a>
		<p>&copy; Desenvolvido por Jeferson Valgoi - 2023</p>
	</footer>
</body>
<script type="text/javascript" src="../js/index.js"></script>
</html>

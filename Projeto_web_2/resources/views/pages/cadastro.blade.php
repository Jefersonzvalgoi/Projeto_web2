<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Marido de Aluguel - Cadastro</title>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
<link rel="stylesheet" href="../estilo-css/log_cad.css">
</head>
<body>
	<header>
		<div>
			<img alt="Logo do site" src="../img/logo.png">
		</div>
	</header>
	<main>
		<section>
			<img alt="Logo do Site" src="../img/logo.png">
			<article>
				<form action="{{route('user.register')}}" method="post">
				@csrf
                <h1>Marido de Aluguel</h1>
				<span>Manutenções em geral</span>
					<div class="box-user">
						<span>Email</span>
						<input type="email" name="email" id="email" value="{{old('email')}}" autofocus required>
						<span>Senha</span>
						<input type="password" name="password" id="password" required minlength="8">
						<span>Nome</span>
						<input type="text" name="name" id="name" value="{{old('name')}}" required>
						<span>Telefone</span>
						<input type="text" name="phone" id="phone" value="{{old('phone')}}" required class="phone">
					</div>
					<button type="submit" class="btn-site">Cadastrar</button>
				</form>
			</article>
		</section>
	</main>
	<footer>
		<p>&copy; Desenvolvido por Jeferson Valgoi - 2023</p>
	</footer>
	<script>
		$('.phone').mask('(00)00000-0000');
	</script>
	<script type="text/javascript" src="../js/site.js"></script>
</body>
</html>

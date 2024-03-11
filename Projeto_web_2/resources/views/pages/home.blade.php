@extends('../templates.app')

@section('title', 'Marido de Aluguel - Home')

@section('css')
    <link rel="stylesheet" href="../estilo-css/home.css">
@endsection

@section('nav')
		<span>Home</span>
@endsection

@section('content')
		<section>
			<h1>Reformas & manutenções em geral</h1>
			<p>
				Procurando um profissional para fazer aquela reforma desejada? Aqui
				na <b>Marido de Aluguel</b> você encontra os melhores profissionais
				para os mais variados serviços de manutenções e reformas, com <b>eficiência
					qualidade e economia.</b>
			</p>
		</section>
		<section>
			<div class="card_seta">
				<!-- card seta para baixo -->
				<div>
					<h2>Mural de Serviços</h2>
					<p>Veja em nosso mural as solicitações de serviços disponíveis!
					</p>
				</div>
				<div class="seta"></div>
			</div>
			<div>
				<h2>Mural de serviços</h2>
				<div>
					<table>
						<tr>
							<th>Solicitante</th>
							<th>Descrição</th>
						</tr>
					</table>
				</div>
			</div>
		</section>
		<section>
			<h2>Principais serviços de Reformas & Manutenções realizados</h2>
		</section>
		<section class="section_cards">
			<section class="card">
				<div id="img_pedreiro"></div>
				<h2>Pedreiro e Alvenaria</h2>
				<p>Saiba mais sobre os serviços de pedreiro Alvenaria e todo
					tipo de reformas.</p>
				<a href="/solicitacao" class="btn-site"> Solicite um orçamento </a>
			</section>
			<section class="card">
				<div id="img_hidraulica"></div>
				<h2>Encanador e Hidráulica</h2>
				<p>Buscando encanador? Nós podemos te ajudar em qualquer serviço
					hidráulico.</p>
				<a href="/solicitacao" class="btn-site"> Solicite um orçamento </a>
			</section>
			</section>
			<section class="section_cards">
			<section class="card">
				<div id="img_eletrica"></div>
				<h2>Eletricista</h2>
				<p>Buscando eletricista? Nós podemos te ajudar em qualquer
					serviço elétrico.</p>
				<a href="/solicitacao" class="btn-site"> Solicite um orçamento </a>
			</section>
		</section>
@endsection

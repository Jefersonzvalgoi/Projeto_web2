@extends('../templates.app')

@section('title', 'Marido de Aluguel - Serviços')

@section('css')
    <link rel="stylesheet" href="../estilo-css/servicos.css">
@endsection

@section('nav')
    <span>
        <a href="/home">Home</a>
    </span>
    <span>></span>
    <span>Serviços</span>
@endsection

@section('content')
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
@endsection


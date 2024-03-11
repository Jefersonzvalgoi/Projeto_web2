@extends('../templates.app')

@section('title', 'Marido de Aluguel - Solicitações')

@section('css')
    <link rel="stylesheet" href="../estilo-css/solicitacao.css">
@endsection

@section('nav')
    <span>
        <a href="/home">Home</a>
    </span>
    <span>></span>
    <span>Solicitações</span>
@endsection

@section('content')
    <section>
        <h1>Solicitações de Serviços</h1>
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
@endsection


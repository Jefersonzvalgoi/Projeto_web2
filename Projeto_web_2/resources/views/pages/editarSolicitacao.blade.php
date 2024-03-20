@extends('../templates.app')

@section('title', 'Marido de Aluguel - Editar Solicitação')

@section('css')
    <link  href="../estilo-css/solicitacaoPage.css" rel="stylesheet">
@endsection


@section('nav')
    <span>
        <a href="/home">Home</a>
    </span>
    <span>></span>
    <span>Editar Solicitações</span>
@endsection

@section('content')
    <section>
        <h1>Editar Solicitação</h1>
    </section>
    <section>
        <form action="{{route('solicitation.update', $solicitation->id)}}" method="post">
            @csrf
            @method('PUT')
            <div>
                <label for="solicitation_title">Título da solicitação</label>
                <input type="text" name="solicitation_title" id="solicitation_title" value="{{$solicitation->solicitation_title}}" required>
                <label for="solicitation_date">Data que deseja realizar o serviço</label>
                <input type="date" name="solicitation_date" id="solicitation_date" value="{{$solicitation->solicitation_date}}" required>
                <label for="solicitation_description">Descrição do serviço desejado</label>
                <textarea rows="5" cols="25" name="solicitation_description" id="solicitation_description" placeholder="Descrição com no minimo 50 caractéres e no máximo 200 caractéres." required minlength="50" maxlength="200">
                    {{$solicitation->solicitation_description}}
                </textarea>
                <label>Classifique a sua solicitação</label>
            </div>
            <div>
                <div>
                    <input type="radio" name="solicitation_classification" id="solicitation_electrician" value="Eletricista" required>
                    <label for="solicitation_electrician">Eletricista</label>
                </div>
                <div>
                    <input type="radio" name="solicitation_classification" id="solicitation_hydraulic" value="Encanador e Hidráulica">
                    <label for="solicitation_hydraulic">Encanador e Hidráulica</label>
                </div>
                <div>
                    <input type="radio" name="solicitation_classification" id="solicitation_masonry" value="Pedreiro e Alvenaria">
                    <label for="solicitation_masonry">Pedreiro e Alvenaria</label>
                </div>
                <div>
                    <input type="radio" name="solicitation_classification" id="solicitation_painter" value="Pintor residencial e empresarial">
                    <label for="solicitation_painter">Pintor residencial e empresarial</label>
                </div>
            </div>
            <button type="submit" class="btn-site">Salvar Solicitação</button>
        </form>
    </section>
@endsection



@extends('../templates.app')

@section('title', 'Marido de Aluguel - Perfil')

@section('css')
    <link rel="stylesheet" href="../estilo-css/perfil.css">
@endsection

@section('nav')
    <span>
        <a href="/home">Home</a>
    </span>
    <span>></span>
    <span>Perfil de Usuário</span>
@endsection

@section('content')
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
            <a href="/edit_request" class="btn-site">Editar</a>
            <button class="btn-site">Excluir</button>
        </div>
    </section>
    <section>
        <h2>Minhas Solicitações</h2>
        <span>Troca de lãmpada</span>
        <span>Solicitação realizada na data xx/xx/xxxx</span>
        <span>A ser efetuada na data xx/xx/xxxx</span>
        <p>descrição da solicitação</p>
        <div>
            <a href="/edit_request" class="btn-site">Editar</a>
            <button class="btn-site">Excluir</button>
        </div>
    </section>
@endsection


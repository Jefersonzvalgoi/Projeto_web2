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
        <h2>{{Auth::user()->name}}</h2>
        <span id="user_email">{{Auth::user()->email}}</span>
        <span id="user_phone">{{Auth::user()->phone}}</span>
        <span id="user_password">Senha:********</span>
        <button id="btn_edit_perfil" class="btn-site">Editar Perfil</button>
    </section>
    <section>
        <h2>Minhas Solicitações</h2>
        @if (@empty($solicitations->all()))
        <h3 style="color: red">Você não possui solicitações de serviço!!</h3>
        @else
        @foreach ($solicitations->all() as $solicitation)
            <span>{{ $solicitation->solicitation_title }}</span>
            <span>Solicitação realizada na data {{ $solicitation->created_at }}</span>
            <span>A ser efetuada na data {{ $solicitation->solicitation_date }}</span>
            <span>Descrição da solicitação:</span>
            <p>{{ $solicitation->solicitation_description }}</p>
            <span>Classificada como {{ $solicitation->solicitation_classification }}</span>
            <div>
                <a href = "{{route('solicitation.edit',$solicitation['id'])}}" class="btn-site">Editar</a>
                <a href = "{{route('solicitation.delete',$solicitation['id'])}}" class="btn-site">Excluir</a>
            </div>
        @endforeach
        @endif
    </section>

@endsection


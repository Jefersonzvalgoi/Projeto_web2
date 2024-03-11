@extends('../templates.app')

@section('title', 'Marido de Aluguel - Empresa')

@section('css')
    <link rel="stylesheet" href="../estilo-css/empresa.css">
@endsection

@section('nav')
    <span>
        <a href="/home">Inicio</a>
    </span>
    <span>></span>
    <span>Empresa</span>
@endsection

@section('content')
    <section>
        <h2>Nossa Empresa</h2>
        <p>Nossa empresa foi pensada pra você pois muitas pessoas hoje,
        por falta de tempo ou até mesmo por não saberem fazer determinada
        manutenção na sua casa, procuram profissionais para fazer serviços
        simples e rápidos.</p>
    </section>
    <section>
        <h2>Nosso Objetivo</h2>
        <p>Nossa objetivo é facilitar o seu contato com os mais variados
        profissionais para fazer desde aquela simples troca de lâmpada,
        ate uma reforma completa em sua casa.</p>
    </section>
@endsection


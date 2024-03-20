<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marido de Aluguel - Login</title>
    <link rel="stylesheet" href="estilo-css/log_cad.css">
</head>

<body>
    <header>
        <div>
            <img alt="Logo do site" src="img/logo.png">
        </div>
    </header>
    <main>
        <section>
            <img alt="Logo do Site" src="img/logo.png">
            <article>
                <form action="{{route('login')}}" method="post">
                    @csrf
                    <h1>Marido de Aluguel</h1>
                    <span>Manutenções em geral</span>

                    @if ($errors->any())
                         @foreach ($errors->all() as $error)
                            <h3 style="color: red">{{$error}}</h3>
                        @endforeach
                    @endif

                    <div class="box-user">
                        <span>Email</span>
                        <input type="email" name="email" id="email" required>
                        <span>Senha</span>
                        <input type="password" name="password" id="password" required minlength="8">
                        <a href="#">Esqueceu a senha?</a>
                        <a href="{{route('user.showRegister')}}">Cadastre-se aqui!</a>
                    </div>
                    <button type="submit" class="btn-site">Entrar</button>
                </form>
            </article>
        </section>
    </main>
    <footer>
        <p>&copy; Desenvolvido por Jeferson Valgoi - 2023</p>
    </footer>
    <script type="text/javascript" src="js/site.js"></script>
</body>

</html>

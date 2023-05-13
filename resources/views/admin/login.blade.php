<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('styles/home.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/fixes.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/login.css') }}">
    <link rel="shortcut icon" href="{{asset('img/Logo/black.svg')}}">
    <title>Entrar como Admnistrador</title>
</head>
<body>
    <div class="main2">
        <div class="card">
            <form action="{{ url('/eventos') }}" autocomplete="off">
                <div class="formheader">
                    <img src="{{ asset('img/Logo/white.svg') }}" alt="">
                    <h2>Login no Sistema</h2>
                </div>
                <div class="formsection">
                    <label for="user">Usuário</label>
                    <input type="text" name="user">
                </div>
                <div class="formsection">
                    <label for="pass">Senha</label>
                    <input type="password" name="pass">
                </div>
                <input type="submit" value="Entrar">
            </form>
    </div>
</div>
</body>
</html>

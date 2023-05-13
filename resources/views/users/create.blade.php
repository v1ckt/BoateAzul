<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('styles/home.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/fixes.css') }}">
    <link rel="shortcut icon" href="{{asset('img/Logo/black.svg')}}">
    <title>Cadastrar Usuário</title>
</head>
<body>

    <div class="main2">
    <form action="/usuarios/cadastrar-usuario" method="POST" autocomplete="off">
        <div class="formheader">
            <h2>Cadastrar Novo Usuário</h2>
            <a class="closebtn" href="{{ url('/usuarios') }}">
                <img src="{{ asset('svg/close.svg') }}" alt="">
            </a>
        </div>
        @csrf
        <div class="formsection">
            <label for="user_name">Nome</label>
            <input type="text" name="user_name" id="">
        </div>
        <div class="formsection">
            <label for="user_email">E-mail</label>
            <input type="text" name="user_email" id="">
        </div>
        <div class="formsection">
            <label for="user_phone">Telefone</label>
            <input type="text" name="user_phone" id="" maxlength="11">
        </div>
        <div class="formsection">
            <label for=user_cpf">CPF</label>
            <input type="text" name="user_cpf" id="" maxlength="11">
        </div>
        <div class="formsection">
            <label for="user_age">Idade</label>
            <input type="text" name="user_age" id="">
        </div>

        <input type="submit" value="Cadastrar">
    </form>
</div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('styles/home.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/fixes.css') }}">
    <link rel="shortcut icon" href="{{asset('img/Logo/black.svg')}}">
    <title>Atualizar Informações de Usuário</title>
</head>
<body>
    <header>
        <nav></nav>
    </header>

    <div class="main2">
    <form action="/usuarios/atualizar-usuario/{{ $user->id }}" method="POST" autocomplete="off">
    <div class="formheader">
        <h2>Editar Dados do Usuário</h2>
        <a class="closebtn" href="javascript:history.go(-1)">
            <img src="{{ asset('svg/close.svg') }}" alt="">
        </a>
    </div>
        @csrf
        @method('PUT')
        <div class="formsection">
            <label for="user_name">Nome</label>
            <input type="text" name="user_name" id="" value="{{ $user->name }}">
        </div>
        <div class="formsection">
            <label for="user_email">E-mail</label>
            <input type="text" name="user_email" id="" value="{{ $user->email }}">
        </div>
        <div class="formsection">
            <label for="user_phone">Telefone</label>
            <input type="text" name="user_phone" id="" value="{{ $user->phone }}" maxlength="11">
        </div>
        <div class="formsection">
            <label for=user_cpf">CPF</label>
            <input type="text" name="user_cpf" id="" value="{{ $user->cpf }}" maxlength="11">
        </div>
        <div class="formsection">
            <label for="user_age">Idade</label>
            <input type="text" name="user_age" id="" value="{{ $user->age }}">
        </div>

        <input type="submit" value="Atualizar">
    </form>

</div>

</body>
</html>
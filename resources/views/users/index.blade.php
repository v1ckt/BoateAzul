<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('styles/home.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/fixes.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/users.css') }}">
    <script src="{{ asset('script/script.js') }}"></script>
    <link rel="shortcut icon" href="{{asset('img/Logo/black.svg')}}">
    <title>Usuarios</title>
</head>
<body>
    <header>
        <nav>
            <div></div>
            <h1>Gerenciar Usuários</h1>
        <a href="{{ url('usuarios/cadastrar') }}" class="addbtn">
            <img src="{{ asset('svg/add.svg') }}" alt="">
                Cadastrar Usuário
        </a>
        <div></div>
        </nav>
    </header>
    <div class="menu">
        <ul> <a href="{{ url('/eventos') }}">
                <li class="opicon">
                    <img src="{{ asset('svg/events.svg') }}" alt="">
                </li>
            </a>
            <a href="{{ url('/usuarios') }}" style="background: rgba(255,255,255,.05); border-radius: .5rem; border: 1px solid rgba(255,255,255,.1)">
                <li  class="opicon">
                    <img src="{{ asset('svg/user.svg') }}" alt="">
                </li>
            </a>
            <a href="{{ url('/entradas') }}">
                <li class="opicon">
                    <img src="{{ asset('svg/ticket.svg') }}" alt="">
                </li>
            </a>
        </ul>
    </div>

    <div class="main">
        <ul>
            @foreach ($usuarios as $user)
            <li class="card" id="{{ $user->id }}" onmouseover="openuser('{{ $user->id }}')" onmouseout="openuser('{{ $user->id }}')">
                <div class="cardleft">
                    <h3>{{ $user->name }}</h3>
                    <div class="details">
                        <p>
                            E-mail: {{ $user->email }}
                        </p>
                        <p>
                            CPF: {{ $user->cpf }} • Idade: {{ $user->age }}
                        </p>
                        <p>
                            Telefone: {{ $user->phone }}
                        </p>
                    </div>
                </div>
                <div class="cardright">
                    <a href="{{ url('usuarios/excluir-usuario/'.$user->id) }}" class="delete">
                        Excluir
                    </a>
                    <a href="{{ url('usuarios/atualizar-usuario/'.$user->id) }}" class="edit">
                        Editar
                    </a>
                </div>
                </li>
                @endforeach
        </ul>

    </div>

    <a  href="{{ url('/') }}">
        <img src="{{ asset('svg/logout.svg') }}" alt="" class="logoutbtn">
    </a>
    <a href="{{ url('/relatorio') }}">
    <div class="total">
        <p>Total de {{ $usuarios->count() }} usuários cadastrados.</p>
        <img src="{{ asset('svg/done.svg') }}" alt="">
    </div>
    </a>
</body>
</html>
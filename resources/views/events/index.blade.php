<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('styles/home.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/fixes.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/events.css') }}">
    <link rel="shortcut icon" href="{{asset('img/Logo/black.svg')}}">
    <script src="{{ asset('script/script.js') }}"></script>
    <title>Eventos</title>
</head>
<body>
    <header>
        <nav>
            <div></div>
            <h1>Gerenciar Eventos</h1>
        <a href="{{ url('eventos/registrar') }}" class="addbtn">
            <img src="{{ asset('svg/add.svg') }}" alt="">
                Novo Evento
        </a>
        <div></div>
        </nav>
    </header>

<div class="menu">
    <ul> <a href="{{ url('/eventos') }}" style="background: rgba(255,255,255,.05); border-radius: .5rem; border: 1px solid rgba(255,255,255,.1)">
            <li class="opicon">
                <img src="{{ asset('svg/events.svg') }}" alt="">
            </li>
        </a>
        <a href="{{ url('/usuarios') }}">
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
            @foreach ($eventos as $evento)
            <li class="card" id="{{ $evento->id }}" onmouseover="opencard('{{ $evento->id }}')" onmouseout="opencard('{{ $evento->id }}')">
                <div class="cardtop">
                    <h2>{{ $evento->eventname }}</h2>
                    <p>{{ $evento->eventdescription }}</p>
                </div>
                <div class="cardbottom">
                    <p>Dia {{ date('d/m/Y', strtotime($evento->date)) }} às {{ date('H:m', strtotime($evento->time)) }}.</p>
                    @php
                        $usuario = $eventos->find($evento->id)->relUsers;
                    @endphp
                    <p>Evendo Gerenciado por: {{$usuario->name}}</p>
                </div>
                    <div id="opt">
                        <a href="{{ url('eventos/excluir-evento/'.$evento->id) }}" class="edit">
                            Excluir
                        </a>
                        <a href="{{ url('eventos/editar-evento/'.$evento->id) }}" class="delete">
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
        <p>Total de {{ $eventos->count() }} eventos registrados.</p>
        <img src="{{ asset('svg/done.svg') }}" alt="">
    </div>
</a>
</body>

</html>
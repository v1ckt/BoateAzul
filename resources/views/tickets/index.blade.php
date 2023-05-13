<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('styles/home.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/fixes.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/tickets.css') }}">
    <script src="{{ asset('script/script.js') }}"></script>
    <link rel="shortcut icon" href="{{asset('img/Logo/black.svg')}}">
    <title>Entradas</title>
</head>
<body>
    <header>
        <nav>
            <div></div>
            <h1>Gerenciar Entradas</h1>
        <div></div>
        </nav>
    </header>
    <div class="menu">
        <ul> <a href="{{ url('/eventos') }}">
                <li class="opicon">
                    <img src="{{ asset('svg/events.svg') }}" alt="">
                </li>
            </a>
            <a href="{{ url('/usuarios') }}">
                <li  class="opicon">
                    <img src="{{ asset('svg/user.svg') }}" alt="">
                </li>
            </a>
            <a href="{{ url('/entradas') }}" style="background: rgba(255,255,255,.05); border-radius: .5rem; border: 1px solid rgba(255,255,255,.1)">
                <li class="opicon">
                    <img src="{{ asset('svg/ticket.svg') }}" alt="">
                </li>
            </a>
        </ul>
    </div>

    <div class="main">
        <ul>
            @foreach ($tickets as $entrada)
                @php
                    $evento = $tickets->find($entrada->id)->relEvento;
                    $usuario = $evento->find($evento->id)->relUsers;
                @endphp
                <li class="card" id="{{ $entrada->id }}" onmouseover="openticket('{{ $entrada->id }}')" onmouseout="openticket('{{ $entrada->id }}')">
                    <div class="cardleft">
                        <h3>{{ $evento->eventname }}</h3>
                        <div class="details">
                            <p> Admnistrador do Evento: {{ $usuario->name }}</p>
                            <p> R$ {{ $entrada->price }},00 </p>
                        </div>
                    </div>
                    <div class="cardright">
                        <a href="{{ url('/eventos/editar-evento/'.$evento->id) }}" class="edit">
                            Editar Evento
                        </a>
                    </div>
                    {{-- <a href="{{ url('/entradas/excluir-entrada/'.$entrada->id) }}">
                        Exlcuir
                    </a> --}}
                </li>
                @endforeach
        </ul>

    </div>

    <a  href="{{ url('/') }}">
        <img src="{{ asset('svg/logout.svg') }}" alt="" class="logoutbtn">
    </a>
    <a href="{{ url('/relatorio') }}">
    <div class="total">
        <p>Total de {{ $tickets->count() }} entradas geradas.</p>
        <img src="{{ asset('svg/done.svg') }}" alt="">
    </div>
    </a>
</body>
</html>
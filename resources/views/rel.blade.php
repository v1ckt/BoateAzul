<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('styles/home.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/fixes.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/rel.css') }}">
    <link rel="shortcut icon" href="{{asset('img/Logo/black.svg')}}">
    <script src="{{ asset('script/script.js') }}"></script>
    <title>Relatório Geral</title>
</head>
<body>
    <header>
        <nav>
            <div></div>
            <h1>Relatório Geral</h1>
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
        <a href="{{ url('/entradas') }}">
            <li class="opicon">
                <img src="{{ asset('svg/ticket.svg') }}" alt="">
            </li>
        </a>
    </ul>
</div>

    <div class="main">
        {{-- tabela de relatorio --}}
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome do Evento</th>
                        <th>Data</th>
                        <th>Horário</th>
                        <th>Descrição do Evento</th>
                        <th>Responsável</th>
                        <th>Entrada</th>
                    </tr>
                </thead>
                <tbody>
                    @php $n = 0; @endphp
                    @foreach ($entradas as $entrada)
                    @php
                            $evento = $entradas->find($entrada->id)->relEvento;
                            $usuario = $evento->find($evento->id)->relUsers;
                            @endphp
                        <tr>
                            <td>{{ $n += 1 }}</td>
                            <td>{{ $evento->eventname }}</td>
                            <td>
                                {{ date('d/m/Y', strtotime($evento->date)) }}
                            </td>
                            <td>
                                {{ date('H:m', strtotime($evento->time)) }}
                            </td>
                            <td>{{ $evento->eventdescription }}</td>
                            <td>{{ $usuario->name }}</td>
                            <td>
                                R$ {{ $entrada->price }},00
                            </td>
                    @endforeach
                </tbody>
            </table>

    </div>

    <a  href="{{ url('/') }}">
        <img src="{{ asset('svg/logout.svg') }}" alt="" class="logoutbtn">
    </a>
</body>

</html>
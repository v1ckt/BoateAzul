<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('styles/home.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/fixes.css') }}">
    <link rel="shortcut icon" href="{{asset('img/Logo/black.svg')}}">
    <title>Editar Evento</title>
</head>
<body>
    <header>
        <nav></nav>
    </header>

    <div class="main2">
    <form action="/eventos/editar-evento/{{ $event->id }}" method="POST" autocomplete="off">
        <div class="formheader">
        <h2>Registrar Evento</h2>
        <a class="closebtn" href="javascript:history.go(-1)">
            <img src="{{ asset('svg/close.svg') }}" alt="">
        </a>
    </div>
        @csrf
        @method('PUT')
        <div class="formsection">
            <label for="events_eventname">Nome do Evento</label>
            <input type="text" name="events_eventname" id="" value="{{ $event->eventname }}">
        </div>
        <div id="datetime">
            <div class="formsection">
            <label for="events_date">Data</label>
            <input type="date" name="events_date" id="" value="{{ $event->date }}">
            </div>
            <div class="formsection">
            <label for="events_time">Hora</label>
            <input type="time" name="events_time" id="" value="{{ $event->time }}">
            </div>
        </div>
        <div class="formsection">
            <label for="events_eventdescription">Descrição</label>
            <input type="text" name="events_eventdescription" id="" value="{{ $event->eventdescription }}">
        </div>
        <div class="formsection">
            <select name="events_user_id" id="">
                <option value="events_user_id">Selecione o Admnistrador do Evento</option>
                @foreach ($usuarios as $usuario)
                    <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>                    
                @endforeach
            </select>
        </div>



        <input type="submit" value="Atualizar">
    </form>

</div>

</body>
</html>
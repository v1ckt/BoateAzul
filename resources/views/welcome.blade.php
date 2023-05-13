<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boate Azul</title>
    <link rel="stylesheet" href="{{ asset('styles/home.css') }}">
    <link rel="shortcut icon" href="{{asset('img/Logo/black.svg')}}">
</head>

<body>
    <header>
        <nav>
            <div class="left">
                <ul>
                    <li>
                        <a href="#home">Início</a>
                    </li>
                    <li>
                        <a href="#services">Serviços</a>
                    </li>
                    <li>
                        <a href="#events">Eventos</a>
                    </li>
                    <li>
                        <a href="#contact">Contato</a>
                    </li>
                </ul>
            </div>
            <a class="center" href="#home">
                <img src="{{asset('img/Logo/white.svg')}}" alt="LOGO" style="width: 90px;">
            </a>
            <div class="right">
                <ul>
                    <li>
                        <button class="registrar" href="">Registrar</button>
                    </li>
                    <li>
                        <a href="{{ url('/login') }}">
                            <button class="loginbutton">Login</button>
                        </a>
                    </li>
                </ul>
            </div>

        </nav>
    </header>

    <section id="home">
        <div class="textohome">
            <h1>ESTÁ DOENTE DE AMOR?</h1>
            <p> A vida noturna tem tudo o que você precisa!</p>
        </div>
        <a href="#services">
            <button class="homebtn">Saiba Mais!</button>
        </a>
        <div class="losangos">
            <div id="losango01"></div>
            <div id="losango02"></div>
        </div>
    </section>

    <section id="services">
        <h1 class="textoservices">Conheça Nossos Serviços</h1>
        <div class="cards">
            <ul>
                <li>
                    <div id='card1'>
                        <img src="{{asset('img/img/restaurant.png')}}" alt="restaurant">
                        <h2>Restaurante</h2>
                    </div>
                </li>
                <li>
                    <div id='card1'>
                        <img src="img/img/bar.png" alt="bar">
                        <h2>Bar</h2>
                    </div>
                </li>
                <li>
                    <div id='card1'>
                        <img src="img/img/dance.png" alt="dance">
                        <h2>Pista de Dança</h2>
                    </div>
                </li>
                <li>
                    <div id='card1'>
                        <img src="img/img/microphone.png" alt="show">
                        <h2>Show ao Vivo</h2>
                    </div>
                </li>
                <li>
                    <div id='card1'>
                        <img src="img/img/room.png" alt="room">
                        <h2>Sala Privada</h2>
                    </div>
                </li>
            </ul>
        </div>
        <p>Nosso estabelecimento conta com um restaurante, um bar temático, uma ampla pista de dança livre para todos,
            um palco com show ao vivo e, é claro, salas privadas com a garantia de privacidade para você
            e sua companhia.</p>
    </section>

    <section id="events">
        <h1 class="textoevents">Próximos Eventos</h1>
        <div id="cards2">
            <ul>
                <li>
                    <div id="cardleft">
                        <div id="carddate">
                            <h1 id="number">15</h1>
                            <h2 id="month">November</h2>
                        </div>
                        <img src="img/img/mnp.jpg" alt="event1">
                        <h2 id="eventname">Mulher Não Paga<br>
                        </h2>
                    </div>
                    <p id="eventdesc">Mas Também Não Entra!</p>
                    <div id="cardright">
                        <h3 id="geticket">Garantir<br>Entrada</h3>

                    </div>
                </li>
                <li>
                    <div id="cardleft">
                        <div id="carddate">
                            <h1 id="number">16</h1>
                            <h2 id="month">November</h2>
                        </div>
                        <img src="img/img/bgpt.jpg" alt="event2">
                        <h2 id="eventname">Bebida Grátis para Todos</h2>
                    </div>
                    <div id="cardright">
                        <h3 id="geticket">Garantir<br>Entrada</h3>
                    </div>
                </li>
                <li>
                    <div id="cardleft">
                        <div id="carddate">
                            <h1 id="number">17</h1>
                            <h2 id="month">November</h2>
                        </div>
                        <img src="img/img/silence.png" alt="event3">
                        <h2 id="eventname">Só Vale com Acompanhante!<br></h2>
                    </div>
                    <p id="eventdesc">Sozinho não Dá</p>
                    <div id="cardright">
                        <h3 id="geticket">Garantir<br>Entrada</h3>
                    </div>
                </li>
            </ul>
        </div>

    </section>

    <section id="contact">
        <h1 class="textocontact">Contato</h1>

        <div class="contactbase">
            <div class="contacttext">
                <h1>Para mais informações, entre em contato conosco.</h1>
                <p>Preencha o formulário ao lado para agendamento de shows, festas, comemorações e buffets e siga-nos
                    nas nossas redes sociais para ficar por dentro das novidades e futuros eventos.</p>
                <div class="footer">
                    <p id="nss">Nossas Redes Sociais</p>
                    <div class="icons">
                        <img id="f" src="img/socialmedia/fb.png" alt="fb">
                        <img id="i" src="img/socialmedia/inst.png" alt="inst">
                        <img id="l" src="img/socialmedia/ln.png" alt="linkedin">
                    </div>
                </div>
            </div>
            <form action="index.html">
                <div id="txtlbl">
                    <label for="Fname">Nome</label>
                    <div class="names">
                        <input type="text" required placeholder="Nome" id="Fname">
                        <input type="text" required placeholder="Sobrenome" id="Lname">
                    </div>
                </div>
                <div id="txtlbl">
                    <label for="Email">E-mail</label>
                    <input type="email" required id="Email">
                </div>

                <div id="txtlbl">
                    <label for="Phone">Telefone</label>
                    <input type="tel" required maxlength="11" id="Phone">
                </div>
                <div id="txtlbl">
                    <label id="obs" for="Message">Observações (opcional)</label>
                    <textarea type="text" id="Message"></textarea>
                </div>

                <div id="txtlbl">
                    <select name="eventtype" id="Eventtype">
                        <option>Selecione o tipo de evento</option>
                        <option value="">Festa</option>
                        <option value="">Show</option>
                        <option value="">Outro</option>
                    </select>
                </div>
                <div class="terms">
                    <input type="checkbox" name="Concordo" id="terms">
                    <label for="terms">&nbspLi e concordo com os termos e condições.</label>
                </div>
                <input type="submit" value="Submit" id="Sub">
            </form>
        </div>
    </section>

    <div class="fundohome">
        <div class="fundo">
            <mask class="maskara"></mask>
            <img src="img/img/fundo.jpg" alt="foto">
        </div>
        <div class="background"></div>
        <a class="botaotop" href="#home"></a>
        <div class="blur"></div>
    </div>

    <div id="deco">
        <img src="img/img/02.png" alt="" id="i01">
        <img src="img/img/02.png" alt="" id="i02">
        <img src="img/img/02.png" alt="" id="i03">
        <img src="img/img/02.png" alt="" id="i04">
        <img src="img/img/02.png" alt="" id="i05">
        <img src="img/img/02.png" alt="" id="i06">
    </div>

</body>

</html>

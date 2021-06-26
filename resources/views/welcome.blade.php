<head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style/home.css">
        <title>Auditorium</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Antic&family=Della+Respira&family=Maven+Pro&family=Nanum+Myeongjo&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="script/home.js" defer="true"></script>
</head>

@extends("layouts.app")
@section("cont")

<div id="descr">
        @if(isset($customer))
        <h1>Hello, {{$customer['name']}}! </h1>  
        @else 
        <h1>Il nuovo e-commerce <strong>prettamente musicale</strong> aspetta solo te!<h1>
        @endif

        <a class="button" id="prodotti" href="list">Scopri i nostri prodotti</a>

        </div>

        <section id="container">
            <div class="service">
                <h2> Filtra per categoria: </h2>
                <div class="cont">
                <div id = amplificazione class="categoria"><a>
                    <img src="images/amplifier.jpg">
                    <h3>Amplificazione</h3>
                </a></div>

                <div id = strumento class="categoria"> <a> 
                    <img src="images/instruments.jpg">
                    <h3>Strumentazione</h3>
                </a></div>

                <div id=accessorio class="categoria"><a>
                    <img src="images/accessories.jpg">
                    <h3>Accessori e altro</h3>
                </a></div>
                </div>
            </div>

            <div class="service">
                <h2>Scopri gli ultimi grandi successi</h2>
                <h5>Powered by <a href="https://www.spotify.com/">Spotify</a></h5>
                <div class="cont" id="uscite"></div>
            </div>
        </section>

        <div class="service" id="int">
            <h2>Sei un autodidatta? Impara con noi!</h2>
            <h5>Powered by <a href="https://www.songsterr.com/">Songsterr</a></h5>
            <form>
                <input type="text" id="barra" placeholder="Digita artista o titolo">
                <input type="submit" value="Cerca" class="button">
            </form>
            <section id = "tabs">

            </section>
        </div>
@endsection
<head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style/login.css">
        <title>Auditorium</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Antic&family=Della+Respira&family=Maven+Pro&family=Nanum+Myeongjo&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="script/signup.js" defer="true"></script>
</head>

@extends("layouts.app")
@section("cont")

<section id="log">  
        <form name="signup" method="post">
        @csrf
            <h2>Hello, passenger!</h2>
            <div>
            <input type="text" name="name" placeholder="Nome"> 
            <input type="text" name="surname" placeholder="Cognome">
            </div> 
            <div>
            <input type="text" name="mail" id="mail" placeholder="Email"></div>
            <div>
            <input type="text" name="phone" id="phone" placeholder="Numero di cellulare">
            </div>
            <div>
            <input type="password" name="psw" id="psw" placeholder="Password">
            <input type="password" name="psw_conf" id="psw_conf" placeholder="Conferma password">
            </div>
            
            <h6 id="password" class="hidden"> La password deve contenere dagli 8 ai 16 caratteri e almeno una maiuscola, una minuscola, un numero e un carattere speciale.</h6>
            <h6 id="email" class="hidden"> E-mail già utilizzata</h6>
            
            @if(isset($err))
            <h6 class='error'>Riempire correttamente tutti i campi</h6>
            @endif 
            <input type="submit" class="button" value="Registrati">
            
        <h5 class="signup">Hai già un account? Effettua il <a href="login">log-in</a>!</h5>
        </form> 
        </section>
@endsection
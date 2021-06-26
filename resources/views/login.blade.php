<head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style/login.css">
        <title>Auditorium</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Antic&family=Della+Respira&family=Maven+Pro&family=Nanum+Myeongjo&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

@extends("layouts.app")
@section("cont")

<section id="log">  
            <form name="login" method="post">
            @csrf
            <h2>Hello, passenger!</h2>
                <div>
                <input type="text" name="mail" placeholder="Email" value='{{ old('mail') }}'></div>
                <div>
                <input type="password" name="psw" placeholder="Password">
                </div>
                @if(isset($err))
                <h6 class='error'>Credenziali errate!</h6>
                @endif 
                @if(isset($err_p))
                <h6 class='error'>Password errata!</h6>
                @endif 
                <input type="submit" value="Accedi" class="button">
                
            <h5 class="signup">Non hai ancora un account? Che aspetti, <a href="signup">iscriviti qui</a>!</h5>
            </form> 
        </section>
@endsection
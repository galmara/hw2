<head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style/home.css">
        <title>Auditorium</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Antic&family=Della+Respira&family=Maven+Pro&family=Nanum+Myeongjo&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="script/shop.js" defer="true"></script>
</head>

@extends("layouts.app")
@section("cont")


<div>
            <h2>Il tuo carrello</h2>
            <div id="contenitore"> 
            <table></table>
            </div>
                <h3 class="hidden">Il carrello è vuoto</h3>
        </div>
        
@endsection
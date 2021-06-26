<head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style/home.css">
        <title>Auditorium</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Antic&family=Della+Respira&family=Maven+Pro&family=Nanum+Myeongjo&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="script/orders.js" defer="true"></script>
</head>

@extends("layouts.app")
@section("cont")

<div>
        <h2>I tuoi ordini</h2>
        <div id = "contenitore">
                <table>
                <tr><th>ID ordine</th><th>Data ordine</th><th>Totale ordine</th></tr></table>
            </div>
                <h3 class="hidden">Nessun ordine effettuato</h3>
        </div>
        
@endsection
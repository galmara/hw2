<head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style/list.css">
        <title>Auditorium</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Antic&family=Della+Respira&family=Maven+Pro&family=Nanum+Myeongjo&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="script/script.js" defer="true"></script>
</head>

@extends("layouts.app")
@section("cont")
<div id="ricerca">
            Cerca i prodotti:
            <form>
                <input type="text" id="barra">
            </form>
        </div>

        <article>
            <section id="lista_prodotti"></section>
        </article>
@endsection
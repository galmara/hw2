<head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style/home.css">
        <title>Auditorium</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Antic&family=Della+Respira&family=Maven+Pro&family=Nanum+Myeongjo&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="script/product.js" defer="true"></script>
</head>

@extends("layouts.app")
@section("cont")

<div id="product">
            <div>
                <h2></h2>
                <div class="details">
                    <img src="">
                    <div class="description">
                        <div>
                            <h6></h6>
                            <div class="pref">
                                <h5><h5>
                                @if(isset($customer))
                                <img id = 'agg' src='./images/add_pref.png'>
                                @endif
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block">
        <a class="button" id="indietro" href="list">Torna a tutti i prodotti</a> 
        </div>

@endsection
const parametro = new URLSearchParams(window.location.search);
const url = "list/details/" + parametro.get("q");

fetch(url).then(onResponse).then(mostraProdotti);

function onResponse(response){
    return response.json();
}

function mostraProdotti(json){
    let prodotto = json;
    const div = document.getElementById("product");
    const pic = div.querySelector("img");
    const nome = div.querySelector("h2");
    const descrizione = div.querySelector("h6");
    const prezzo = div.querySelector("h5");
    nome.textContent = prodotto.name;
    descrizione.textContent = prodotto.description;
    prezzo.textContent = "€" + prodotto.price;
    pic.src = "./images/" + prodotto.img_path + ".jpg";
}

const carrello = document.getElementById("agg");
carrello.addEventListener("click", aggiuntaCarrello);

function aggiuntaCarrello(event){
    const nome = parametro.get("q");
    const url = "product/add/" + nome;
    fetch(url).then(aggiuntaProdotto);
}

function aggiuntaProdotto(){
    alert("Prodotto aggiunto al carrello!");
}



fetch("orders/show").then(onResponse).then(mostraOrdini);

function onResponse(response){
    return response.json();
}

function mostraOrdini(json){
    if(json[0]){
        for(let ordine of json){
            const tabella = document.querySelector("table");
            const riga = document.createElement("tr");
            const cella_ID = document.createElement("td");
            cella_ID.textContent=ordine.ID_order;
            const cella_DATA = document.createElement("td");
            cella_DATA.textContent=ordine.date;
            const cella_TOT = document.createElement("td");
            cella_TOT.textContent="€" + ordine.amount;
            tabella.appendChild(riga);
            riga.appendChild(cella_ID);
            riga.appendChild(cella_DATA);
            riga.appendChild(cella_TOT);
        }
    }
    else{
        const hidden = document.querySelector("h3");
        hidden.classList.remove("hidden");
    }
    
}
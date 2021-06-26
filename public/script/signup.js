const mail = document.getElementById("mail");
const psw = document.getElementById("psw");
const cell = document.getElementById("phone");
const psw_conf = document.getElementById("psw_conf");
mail.addEventListener("keyup", checkMail);
psw.addEventListener("blur", checkPsw);
psw_conf.addEventListener("keyup", checkPsw);
cell.addEventListener("blur", checkNumber);

function onResponse(response){
    return response.json();
}

function checkMail(){
    const input = mail.value; 
    if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(input)){
        mail.classList.add("error_s");
    }
    else{
        mail.classList.remove("error_s");
        const url = "signup/mail/" + input;
        fetch(url).then(onResponse).then(onJsonMail);
    }
}

function onJsonMail(json){
    if(json){
        mex = document.getElementById("email");
        mex.classList.remove("hidden");
        mail.classList.add("error_s");
    }
    else {
        mex.classList.add("hidden");
        mail.classList.remove("error_s");
    }
}

function checkPsw(){
    const password = psw.value; 
    const password_conf = psw_conf.value; 
    if(/^[a-zA-Z0-9!£$%&@]{8,16}$/.test(password)){
        mex.classList.add("hidden");
        if(password!==password_conf){
            psw_conf.classList.add("error_s");
        }
        else {
            psw_conf.classList.remove("error_s");
            psw.classList.remove("error_s");
        }
    }
    else {
        mex = document.getElementById("password");
        mex.classList.remove("hidden");
        psw.classList.add("error_s");
    }
}

function checkNumber(){
    const cellulare = cell.value;
    if(!/^[0-9+]{10,}$/.test(cellulare)){
        cell.classList.add("error_s");
    }
    else{
        cell.classList.remove("error_s");
    }

}

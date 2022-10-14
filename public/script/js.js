window.addEventListener('load', ()=>{
    registerSW()
})


async function registerSW(){
    if('serviceWorker' in navigator){
        try{
            await navigator.serviceWorker.register('script/sw.js')
        } catch(e){
            console.log(`SW registration failed`);
        }
    }
}

//AJAX
const cep = document.querySelector("#cep")

const showData = (result)=>{
    for(const campo in result){
        if(document.querySelector("#"+campo)){
            document.querySelector("#"+campo).value = result[campo]
        }
    }
}
cep.addEventListener("blur",(e)=>{
    let search = cep.value.replace("-","")
    const options = {
        method: 'GET',
        mode: 'cors',
        cache: 'default'
    }

    fetch(`https://viacep.com.br/ws/${search}/json/`, options)
    .then(response =>{ response.json() 
        .then( data => showData(data))
    })
    .catch(e => console.log('Deu Erro: '+ e,message))
})

/*Validador de email(mascára de email)*/
    const email = document.querySelector(".email");
    const textValidate = document.querySelector("#textValidate");
    email.addEventListener("keyup", ()=>{
        const pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        
        if(email.value === ""){
            document.getElementById("textValidate").innerHTML ="</p>Seu email está vázio!</p>";
        }
        if(email.value.match(pattern)){
            email.classList.add("valid");
            email.classList.remove("invalid");
            document.getElementById("textValidate").innerHTML ="</p>Email válido</p>";
            textValidate.style.color= "green";
        }
        else{
            email.classList.add("invalid");
            email.classList.remove("valid");
            document.getElementById("textValidate").innerHTML ="</p>Email inválido</p>";
            textValidate.style.color= "#de0611";
        }
    })
/*FINAL Validador de email*/

/*Validador de telefone(mascára de telefone)*/
const number = document.querySelector(".number");
const numberValid = document.querySelector("#numberValid");
number.addEventListener("keyup", ()=>{
    const regex = /^[\d,\s,\+,\-]{5,20}/;
    
    if(number.value === ""){
        document.getElementById("textValidate").innerHTML ="</p>Digite no minímo um número de telefone</p>";
    }
    if(number.value.match(regex)){
        number.classList.add("telValid");
        number.classList.remove("telInvalid");
        document.getElementById("numberValid").innerHTML ="</p>Número de telefone válido</p>";
        numberValid.style.color= "green";
    }
    else{
        number.classList.add("telInvalid");
        number.classList.remove("telValid");
        document.getElementById("numberValid").innerHTML ="</p>Número de telefone inválido</p>";
        numberValid.style.color= "#de0611";
    }
})
/*FINAL Validador de telefone */

/*VALIDAÇÃO DE DATA DE NASCIMENTO*/

function pad(valor) { // completa com zeros à esquerda, caso necessário
    return valor.toString().padStart(2, '0');
}

function formata(data) {
    return `${data.getFullYear()}-${pad(data.getMonth() + 1)}-${pad(data.getDate())}`;
}

const campo = document.querySelector('#dataNasc');

window.addEventListener('DOMContentLoaded', function() {
    var data = new Date(); // data de hoje
    
    // 60 anos atrás
    data.setFullYear(data.getFullYear() - 60);
    campo.min = formata(data);

    // 18 anos atrás
    data.setFullYear(data.getFullYear() - 18);
    campo.max = formata(data);
});

// mensagens de validação
campo.addEventListener('input', () => {
  campo.setCustomValidity('');
  campo.checkValidity();
});

// se tentar submeter o form com data fora do intervalo, mostra o erro
campo.addEventListener('invalid', () => {
    campo.setCustomValidity('Você precisa ter mais de 18 anos de idade');
});

/*FINAL VALIDAÇÃO DE DATA DE NASCIMENTO*/
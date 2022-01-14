var btnLimpar = document.querySelector("#btnLimpar");

btnLimpar.addEventListener("click",limpar);

function limpar(event){
    event.preventDefault();
    let nome = document.querySelector("#nome");
    let antigo = document.querySelector("#preco-antigo");
    let desconto = document.querySelector("#desconto");
    let obs = document.querySelector("#obs");

    nome.value = ''; antigo.value = ''; desconto.value = ''; obs.value = '';
}
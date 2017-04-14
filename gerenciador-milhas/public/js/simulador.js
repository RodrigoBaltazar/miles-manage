var sifrao_string = "R$: ";
var sifrao_string_reais = " reais";
var pontos_string = " pontos";


//Funcao para iniciar o ponteiro no input pontos
window.onload = function(){

var pontos = document.getElementById('pontos');

pontos.focus();
pontos.select();


// Tranca os inputs para apenas visualização
document.getElementById("exibe_reais").disabled = true;
document.getElementById("exibe_pontos").disabled = true;
}

//Funcao que simula quantos pontos serão necessario para x dinheiros
function simulaPontos(){
  var pontos = document.getElementById('pontos').value;
  var exibe_reais = pontos * 0.025 + '';

  document.getElementById('exibe_reais').value = sifrao_string + exibe_reais + sifrao_string_reais;


}

//Funcao que simula quanto dinheiro é necessario para x pontos
function simulaDinheiro(){
  var reais = document.getElementById('reais').value;
  var exibe_pontos = reais * 40;
  document.getElementById('exibe_pontos').value = exibe_pontos + pontos_string;
}

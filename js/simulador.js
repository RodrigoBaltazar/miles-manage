var sifrao_string = "R$: ";
var sifrao_string_reais = " reais";
var pontos_string = " pontos";


window.onload = function(){

var pontos = document.getElementById('pontos');

pontos.focus();
pontos.select();
}

function simulaPontos(){
  var pontos = document.getElementById('pontos').value;
  var exibe_reais = pontos * 0.025 + '';

  document.getElementById('exibe_reais').value = sifrao_string + exibe_reais + sifrao_string_reais;


}

function simulaDinheiro(){
  var reais = document.getElementById('reais').value;
  var exibe_pontos = reais * 1.00;
  document.getElementById('exibe_pontos').value = exibe_pontos + pontos_string;
}

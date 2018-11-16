function MudaCodiExclusao(codi, nome, host, tela) {
  document.getElementById('selecionada').value=codi ;
  document.getElementById('form_exclusao').action=host ;
  document.getElementById("nomeExclusao").innerHTML=nome ;
  document.getElementById("tela").innerHTML=tela;
}

function mostraSenha() {
  var x = document.getElementById("usuario_senha");
  if (x.type === "password") {
      x.type = "text";
  } else {
      x.type = "password";
  }
} 

function MudaMensagem(mensagem) {
  document.getElementById("msgmodal").innerHTML=mensagem ;
  document.getElementById("msgInfo").innerHTML=mensagem;
}
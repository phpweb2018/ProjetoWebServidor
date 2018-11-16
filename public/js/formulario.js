function MudaCodiExclusao(codi, nome, host,) {
  document.getElementById('selecionada').value=codi ;
  document.getElementById('form_exclusao').action=host ;
  document.getElementById("nomeExclusao").innerHTML=nome ;
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
}
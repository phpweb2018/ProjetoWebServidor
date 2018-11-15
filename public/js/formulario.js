function MudaCodiExclusao(codi, nome) {
  document.getElementById('selecionada').value=codi ;
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
  document.getElementById("mensagemDoModal").innerHTML=mensagem ;
}
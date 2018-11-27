<?php

namespace App\Controllers;

use App\Lib\Sessao;

use App\Models\Entidades\Usuario;

use App\Models\DAO\UsuarioDAO;

use App\Models\Entidades\Email;

class EmailController extends Controller
{
  public function recuperarsenha()
  {
    $login  = $_POST['usua_login'];

    $Usuario = new Usuario();

    $Usuario->setUsua_login($login);
    
    $usuarioDAO = new UsuarioDAO();

    $Usuario = $usuarioDAO->consultaLogin($Usuario);

    if (!$Usuario){
      Sessao::gravaMensagem("Usuário não cadastrdo na base de dados!");
    } elseif ( empty($Usuario->getUsua_email()) && is_null($Usuario->getUsua_email()) ) {
      Sessao::gravaMensagem("O Usuário <h5>'{$Usuario->getUsua_nome()}'</h5> não possui email cadastrado, entre em contato com o admnistrador do sistema!");
    } else {
      $email = new Email();
      $email->setRemetente(TITLE);
      $email->setEmail_remetente(EMAIL_ADM);
      $email->setDestinatario($Usuario->getUsua_nome());
      $email->setEmail_destino($Usuario->getUsua_email());
      $email->setAssunto('Recuperação de Senha - '.TITLE);
      $email->setTitulo(' Referente ao usuário: '.$Usuario->getUsua_nome());
      $email->setConteudo(" 
          <h1 style='color: #5e9ca0;'>Olá <span style='color: #2b2301;'> '{$Usuario->getUsua_nome()}' </span> !</h1>
          <h2 style='color: #2e6c80;'>Recuperação de senha:</h2>
          <p>Login: <span style='color: #2e6c80;'> '{$Usuario->getUsua_login()}' </span> 
          <p>Login: <span style='color: #2e6c80;'> '{$Usuario->getUsua_password()}' </span> </p>
          <br/>
          <p>Att:. ".TITLE." </p>
          <p>Fone<span style='color: #2e6c80;'> ".FONE." </span> </p>
          <p>Email<span style='color: #2e6c80;'> ".EMAIL_ADM." </span> </p>
      ");
      if ($this->enviar($email)) {
        Sessao::gravaMensagem("Email enviado com sucesso!");
      }

    }

    $this->redirect('/Usuario/login');
  }

  public function enviar(Email $e_mail)
  {
    require ('vendor/autoload.php'); 

    $email = new \SendGrid\Mail\Mail(); 
    $email->setFrom($e_mail->getEmail_remetente(),$e_mail->getRemetente());
    $email->setSubject($e_mail->getAssunto());
    $email->addTo($e_mail->getEmail_destino(),$e_mail->getDestinatario());
    $email->addContent("text/plain",$e_mail->getTitulo());
    $email->addContent(
        "text/html", $e_mail->getConteudo()
    );
    $sendgrid = new \SendGrid('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');
    try {
        $response = $sendgrid->send($email);
        print $response->statusCode() . "\n";
        print_r($response->headers());
        print $response->body() . "\n";
        return true;

    } catch (Exception $e) {
      Sessao::gravaErro('Ocorreu um erro durante o envio: '.$e->getMessage());
      return false;
    }
    
  }

}

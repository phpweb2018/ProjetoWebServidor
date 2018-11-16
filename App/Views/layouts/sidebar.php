<div class="wrapper">
  <nav id="sidebar" class="active">
    <div class="sidebar-header" >
      <a href="http://<?php echo APP_HOST; ?>">
      <h3>Hass Soluções</h3>
      <strong><img src="http://<?php echo APP_HOST; ?>/public/img/hass/Logo.png" width="70" height="70" alt="Logo Hass" class="rounded"></strong>
      </a>
    </div>
    <ul class="list-unstyled components">
      <li>
        <a href="http://<?php echo APP_HOST; ?>/kanban">
          <i class="fas fa-columns"></i>Kanban
        </a>
        <a href="#pageCadastros" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
          <i class="fas fa-folder-plus"></i>Cadastros
        </a>
        <ul class="collapse list-unstyled" id="pageCadastros">
          <li>
            <a href="http://<?php echo APP_HOST; ?>/Cliente/cadastro" >Clientes</a>
          </li>
          <li>
            <a href="http://<?php echo APP_HOST; ?>/Usuario/cadastro">Usuários</a>
          </li>                    
          <li>
            <a href="http://<?php echo APP_HOST; ?>/ticket/cadastro">Ticket's</a>
          </li>
        </ul>
        <a href="#pageConsultas" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
          <i class="fas fa-file-alt"></i>Consultas
        </a>
        <ul class="collapse list-unstyled" id="pageConsultas">
          <li>
            <a href="http://<?php echo APP_HOST; ?>/Cliente" >Clientes</a>
          </li>
          <li>
            <a href="http://<?php echo APP_HOST; ?>/Usuario">Usuários</a>
          </li>                    
          <li>
            <a href="http://<?php echo APP_HOST; ?>/ticket">Ticket's</a>
          </li>
        </ul>
      </li>
        
      <li>
          <a href="#">
            <i class="fas fa-cog"></i>Configurações
          </a>
      </li>
      <li>
          <!-- mibew text link -->
          <a id="mibew-agent-button" href="/ProjetoWebServidor/mibew/chat?locale=pt-br" target="_blank" onclick="Mibew.Objects.ChatPopups['5bee1cfa185b1c43'].open();return false;">
              <i class="fas fa-headset"></i>Suporte
          </a>
          <script type="text/javascript" src="/ProjetoWebServidor/mibew/js/compiled/chat_popup.js"></script>
          <script type="text/javascript">Mibew.ChatPopup.init({"id":"5bee1cfa185b1c43","url":"\/ProjetoWebServidor\/mibew\/chat?locale=pt-br","preferIFrame":true,"modSecurity":false,"forceSecure":false,"width":640,"height":480,"resizable":true,"styleLoader":"\/ProjetoWebServidor\/mibew\/chat\/style\/popup"});</script>
          <!-- / mibew text link -->
            
      </li>
    </ul>
    
  </nav>
  
    <!-- Conteudo  -->
    <div id="content">
    <!-- o conteúdo apresentado será o que está dentro do index do Controler atual   -->
    <!-- o fechamento das tags esta antes do rodapé -->

    <!-- Rota -->
      <div class="container-full" >
        <div class="col-md-12 "  id="zera-MarginEpadding">
          <ul class="breadcrumb bg-light" id='Rota'>
            <?php
              if (count($rota) > 1) {
                foreach ($rota as $rt) {
            ?>
              <li class="breadcrumb-item <?php echo (isset($viewVar['nameAction']) && $rt != $viewVar['nameAction'])?'':'active'; ?> ">
                  <?php
                    if(isset($viewVar['nameAction']) && $rt != $viewVar['nameAction']){//Insere o link do primeiro ao penultimo item da rota
                  ?>
                    <a href="http://<?php echo APP_HOST.'/'.$rt; ?>">
                  <?php
                    }  
                  ?>
                    <?php echo ucfirst($rt); ?>
                  </a>
              </li>
            <?php
                }
              } else { 
            ?>
              <li class="breadcrumb-item active ">
                    <?php echo ucfirst($rota[0]); ?>
                  </a>
              </li>
            <?php
              }
            ?>
          </ul>
        </div>
      </div>






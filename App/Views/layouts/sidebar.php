<div class="wrapper">
  <nav id="sidebar" class="active">
    <div class="sidebar-header" >
      <a href="<?php echo SSL_OR_NOT.APP_HOST; ?>">
      <h3>Hass Soluções</h3>
      <strong><img src="<?php echo SSL_OR_NOT.APP_HOST; ?>/public/img/hass/Logo.png" width="70" height="70" alt="Logo Hass" class="rounded"></strong>
      </a>
    </div>
    <ul class="list-unstyled components">
      <li>
        <a href="<?php echo SSL_OR_NOT.APP_HOST; ?>/kanban">
          <i class="fas fa-columns"></i>Kanban
        </a>
        <a href="#pageCadastros" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
          <i class="fas fa-folder-plus"></i>Cadastros
        </a>
        <ul class="collapse list-unstyled" id="pageCadastros">
          <li>
            <a href="<?php echo SSL_OR_NOT.APP_HOST; ?>/Cliente/cadastro" >Clientes</a>
          </li>
          <li>
            <a href="<?php echo SSL_OR_NOT.APP_HOST; ?>/Usuario/cadastro">Usuários</a>
          </li>                    
          <li>
            <a href="<?php echo SSL_OR_NOT.APP_HOST; ?>/ticket/cadastro">Ticket's</a>
          </li>
        </ul>
        <a href="#pageConsultas" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
          <i class="fas fa-file-alt"></i>Consultas
        </a>
        <ul class="collapse list-unstyled" id="pageConsultas">
          <li>
            <a href="<?php echo SSL_OR_NOT.APP_HOST; ?>/Cliente" >Clientes</a>
          </li>
          <li>
            <a href="<?php echo SSL_OR_NOT.APP_HOST; ?>/Usuario">Usuários</a>
          </li>                    
          <li>
            <a href="<?php echo SSL_OR_NOT.APP_HOST; ?>/ticket">Ticket's</a>
          </li>
        </ul>
      </li>
        
      <!-- <li>
          <a href="#">
            <i class="fas fa-cog"></i>Configurações
          </a>
      </li> -->
      <li>
        <a href="https://dashboard.tawk.to/#/chat" target="_blank">
          <i class="fas fa-headset"></i>Suporte
        </a>
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






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
        <a href="#">
          <i class="fas fa-columns"></i>Kanban
        </a>
        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
          <i class="fas fa-folder-plus"></i>Cadastros
        </a>
        <ul class="collapse list-unstyled" id="pageSubmenu">
          <li>
            <a href="http://<?php echo APP_HOST; ?>/Cliente/cadastro" >Clientes</a>
          </li>
          <li>
            <a href="#">Usuários</a>
          </li>                    
          <li>
            <a href="#">Ticket's</a>
          </li>
          </ul>
          </li>
          <li>
          <a href="#">
            <i class="fas fa-cog"></i>Configurações
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
          <ul class="breadcrumb" id='Rota'>
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






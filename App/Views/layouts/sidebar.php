<div class="wrapper">
  <nav id="sidebar" class="active">
    <div class="sidebar-header">
      <a href="menu.php">
        <h3>Hass Soluções</h3>
        <strong><img src="public/img/hass/Logo.png" width="70" height="70" alt="Logo Hass" class="rounded"></strong>
        </a>
    </div>
    <ul class="list-unstyled components">
      <li>
        <a href="">
          <i class="fas fa-briefcase">
            <img src="public/img/kanban.png" width="23" height="23">
          </i>
          Kanban
        </a>
        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
          <i class="fas fa-copy">
            <img src="public/img/cad.png" width="23" height="23">
          </i>
          Cadastros
        </a>
        <ul class="collapse list-unstyled" id="pageSubmenu">
          <li>
            <a href="menu.php?tp_tela=cad_clientes">Clientes</a>
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
                    <i class="fas fa-image">
                        <img src="public/img/config.png" width="23" height="23">
                    </i>
                    Configurações
                </a>
            </li>
        </ul>

        <ul class="list-unstyled CTAs">
            <li>
                <form method="POST" action="log_out.php" >
                  <div class="col-12 text-center">
                    <button type="submit" class="btn btn-block btn-info btn-sm btn3d">
                      <img src="public/img/sair.png" width="23" height="23">
                      Sair
                    </button>
                  </div>
                </form>   
            </li>
        </ul>
    </nav>

    <!-- Conteudo  -->
   
    <div id="content">
    <?php
        // if(isset($_GET['tp_tela'])){
        //     if (substr($_GET['tp_tela'], 0, 3) == 'cad'){
        //         include 'tab_control.php';
        //     }
        // }
    ?>
    </div>
</div>





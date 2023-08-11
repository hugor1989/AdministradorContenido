<?php
@session_start();
require_once ('class/conexion.php');
$con=conexion();
?>
<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard" class="brand-link">
    
    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
  <span class="brand-text font-weight-light">THIRSTY</span>
  
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block"><font color="#FB7F03"><?php echo $usr_nombre; ?></font></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="dashboard" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                <b>DASHBOARD</b>
              </p>
            </a>
          </li>

        

        <?php if ($usr_idRol=='2') { ?>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Pedidos
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surtir</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Seguimiento</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Crear</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Usuarios
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="usuariosAlta" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Alta / Edición</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="usuariosActivar" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Terminar Registro</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="usuariosActivarFinal" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Activación Admin</p>
                </a>
              </li>
            </ul>
          </li>

        <?php } ?>
        
          <li class="nav-header"><b>- UTILIDADES -</b></li>
          <li class="nav-item">
            <a href="salir" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Salir</p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
 
 <?php 
$actual_link = "$_SERVER[REQUEST_URI]";
$parteslink = explode("/", $actual_link);
$nombredelarchivo = end($parteslink);

 ?>
 <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">


        <li class="nav-item ">
        <a class="nav-link <?php if (strtolower($nombredelarchivo) == 'nuevo.php') {echo $as='active';} else{ echo ''; $as='no active';} ?>" href="nuevo.php">
          <i class="bi bi-bookmark-plus-fill"></i>
          <span>Nuevo  </span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if (strtolower($nombredelarchivo) == 'registros.php') { echo $as='active';} else{ echo ''; $as='no active';} ?>" href="registros.php">
          <i class="bi bi-archive-fill"></i>
          <span>Registros  </span>
        </a>
      </li>
     
    
      <!-- End Dashboard Nav -->

      <!-- 
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Alerts</span>
            </a>
          </li>        
        </ul>
      </li> -->
      <!-- End Components Nav -->

     

      <!-- <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li> -->
      <!-- End Profile Page Nav -->


    </ul>

  </aside><!-- End Sidebar-->
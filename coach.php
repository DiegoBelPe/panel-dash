<?php

session_start();

if (!isset($_SESSION['id'])) {
  header("Location: index.php");
}

$nombre = $_SESSION['nombre'];
$tipo_usuario = $_SESSION['tipo_usuario'];


?>

<!DOCTYPE html>
<html lang="es">

<head>
  <?php include('layout/cabecera.php'); ?>
</head>

<body class="sb-nav-fixed">
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-secondary">
    <a class="navbar-brand" href="principal.html">BARRE MX</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button><!-- Navbar Search-->
    <!--<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
				<input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
				<div class="input-group-append">
				<button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
				</div>
                </div>
			</form>-->
    <!-- Navbar-->
    <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $nombre; ?><i class="fas fa-user fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Configuración</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php">Salir</a>
        </div>
      </li>
    </ul>
  </nav>
  <div id="layoutSidenav">
    <?php include('layout/sidebar.php'); ?>

    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid">
          <h1 class="mt-4">BARRE MX</h1>
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>


          <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>DataTable prueba</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Cargo</th>
                      <th>Sitio_clase</th>
                      <th>Edad</th>
                      <th>activo</th>
                      <!-- <th>Fotografia</th> -->
                    </tr>
                  </thead>
                  <tfoot>

                  </tfoot>
                  <tbody>
                    <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>61</td>
                      <td>
                        <div align="center" class="sb-nav-link-icon text-success"><i class="fas fa-circle"></i></div>
                      </td>

                    </tr>
                    <tr>
                      <td>Garrett Winters</td>
                      <td>Accountant</td>
                      <td>Tokyo</td>
                      <td>63</td>
                      <td>
                        <div align="center" class="sb-nav-link-icon text-success"><i class="fas fa-circle"></i></div>
                      </td>

                    </tr>
                    <tr>
                      <td>Ashton Cox</td>
                      <td>Junior Technical Author</td>
                      <td>San Francisco</td>
                      <td>66</td>
                      <td>
                        <div align="center" class="sb-nav-link-icon text-success"><i class="fas fa-circle"></i></div>
                      </td>

                    </tr>
                    <tr>
                      <td>Cedric Kelly</td>
                      <td>Senior Javascript Developer</td>
                      <td>Edinburgh</td>
                      <td>22</td>
                      <td>
                        <div align="center" class="sb-nav-link-icon text-success"><i class="fas fa-circle"></i></div>
                      </td>

                    </tr>
                    <tr>
                      <td>Airi Satou</td>
                      <td>Accountant</td>
                      <td>Tokyo</td>
                      <td>33</td>
                      <td>
                        <div align="center" class="sb-nav-link-icon text-success"><i class="fas fa-circle"></i></div>
                      </td>

                    </tr>
                    <tr>
                      <td>Brielle Williamson</td>
                      <td>Integration Specialist</td>
                      <td>New York</td>
                      <td>61</td>
                      <td>
                        <div align="center" class="sb-nav-link-icon text-success"><i class="fas fa-circle"></i></div>
                      </td>

                    </tr>
                    <tr>
                      <td>Herrod Chandler</td>
                      <td>Sales Assistant</td>
                      <td>San Francisco</td>
                      <td>59</td>
                      <td>
                        <div align="center" class="sb-nav-link-icon text-success"><i class="fas fa-circle"></i></div>
                      </td>

                    </tr>
                    <tr>
                      <td>Rhona Davidson</td>
                      <td>Integration Specialist</td>
                      <td>Tokyo</td>
                      <td>55</td>
                      <td>
                        <div align="center" class="sb-nav-link-icon text-success"><i class="fas fa-circle"></i></div>
                      </td>

                    </tr>
                    <tr>
                      <td>Colleen Hurst</td>
                      <td>Javascript Developer</td>
                      <td>San Francisco</td>
                      <td>39</td>
                      <td>
                        <div align="center" class="sb-nav-link-icon text-success"><i class="fas fa-circle"></i></div>
                      </td>

                    </tr>
                    <tr>
                      <td>Sonya Frost</td>
                      <td>Software Engineer</td>
                      <td>Edinburgh</td>
                      <td>23</td>
                      <td>
                        <div align="center" class="sb-nav-link-icon text-success"><i class="fas fa-circle"></i></div>
                      </td>

                    </tr>
                    <tr>
                      <td>Jena Gaines</td>
                      <td>Office Manager</td>
                      <td>London</td>
                      <td>30</td>
                      <td>
                        <div align="center" class="sb-nav-link-icon text-success"><i class="fas fa-circle"></i></div>
                      </td>

                    </tr>
                    <tr>
                      <td>Quinn Flynn</td>
                      <td>Support Lead</td>
                      <td>Edinburgh</td>
                      <td>22</td>
                      <td>
                        <div align="center" class="sb-nav-link-icon text-success"><i class="fas fa-circle"></i></div>
                      </td>

                    </tr>
                    <tr>
                      <td>Charde Marshall</td>
                      <td>Regional Director</td>
                      <td>San Francisco</td>
                      <td>36</td>
                      <td>
                        <div align="center" class="sb-nav-link-icon text-success"><i class="fas fa-circle"></i></div>
                      </td>

                    </tr>
                    <tr>
                      <td>Haley Kennedy</td>
                      <td>Senior Marketing Designer</td>
                      <td>London</td>
                      <td>43</td>
                      <td>
                        <div align="center" class="sb-nav-link-icon text-success"><i class="fas fa-circle"></i></div>
                      </td>

                    </tr>
                    <tr>
                      <td>Tatyana Fitzpatrick</td>
                      <td>Regional Director</td>
                      <td>London</td>
                      <td>19</td>
                      <td>
                        <div align="center" class="sb-nav-link-icon text-success"><i class="fas fa-circle"></i></div>
                      </td>

                    </tr>
                    <tr>
                      <td>Michael Silva</td>
                      <td>Marketing Designer</td>
                      <td>Bogota</td>
                      <td>66</td>
                      <td>
                        <div align="center" class="sb-nav-link-icon text-success"><i class="fas fa-circle"></i></div>
                      </td>

                    </tr>
                    <tr>
                      <td>Paul Byrd</td>
                      <td>Chief Financial Officer (CFO)</td>
                      <td>New York</td>
                      <td>64</td>
                      <td>
                        <div align="center" class="sb-nav-link-icon text-success"><i class="fas fa-circle"></i></div>
                      </td>

                    </tr>
                    <tr>
                      <td>Gloria Little</td>
                      <td>Systems Administrator</td>
                      <td>Bogota</td>
                      <td>59</td>
                      <td>
                        <div align="center" class="sb-nav-link-icon text-success"><i class="fas fa-circle"></i></div>
                      </td>

                    </tr>
                    <tr>
                      <td>Bradley Greer</td>
                      <td>Software Engineer</td>
                      <td>Bogota</td>
                      <td>41</td>
                      <td>
                        <div align="center" class="sb-nav-link-icon text-success"><i class="fas fa-circle"></i></div>
                      </td>

                    </tr>
                    <tr>
                      <td>Dai Rios</td>
                      <td>Personnel Lead</td>
                      <td>Bogota</td>
                      <td>35</td>
                      <td>
                        <div align="center" class="sb-nav-link-icon text-danger"><i class="fas fa-circle"></i></div>
                      </td>

                    </tr>
                    <tr>
                      <td>Jenette Caldwell</td>
                      <td>Development Lead</td>
                      <td>Bogota-sede</td>
                      <td>30</td>
                      <td>
                        <div align="center" class="sb-nav-link-icon text-danger"><i class="fas fa-circle"></i></div>
                      </td>

                    </tr>
                    <tr>
                      <td>Yuri Berry</td>
                      <td>Chief Marketing Officer (CMO)</td>
                      <td>Bogota-sede</td>
                      <td>40</td>
                      <td>
                        <div align="center" class="sb-nav-link-icon text-danger"><i class="fas fa-circle"></i></div>
                      </td>

                    </tr>
                    <tr>
                      <td>Caesar Vance</td>
                      <td>Pre-Sales Support</td>
                      <td>Bogota</td>
                      <td>21</td>
                      <td>
                        <div align="center" class="sb-nav-link-icon text-danger"><i class="fas fa-circle"></i></div>
                      </td>

                    </tr>

                    <tr>
                      <td>Brenden Wagner</td>
                      <td>Software Engineer</td>
                      <td>Bogota</td>
                      <td>28</td>
                      <td>
                        <div align="center" class="sb-nav-link-icon text-success"><i class="fas fa-circle"></i></div>
                      </td>
                      <!-- <td>
                        <div align="center" class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                      </td> -->
                    </tr>




                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </main>
      <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid">
          <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Barre MX 2021</div>
            <div>
              <a href="#">Privacy Policy</a>
              &middot;
              <a href="#">Terminos &amp; Condiciones</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <?php include('layout/script.php'); ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>OpiGamer - <?php echo $titulo ?></title>
  <?php include("incluidos/head.php"); ?>
</head>
<body>
  <div class="container-scroller">
    <!-- navbar -->
    <?php include("incluidos/navbar.php"); ?>
    <!-- end navbar -->
    <div class="container-fluid page-body-wrapper">
      <!-- sidebar.html -->
      <?php include("incluidos/sidebar.php"); ?>
      <!-- end sidebar -->
      <div class="main-panel">
        <div class="content-wrapper">
          
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="mr-md-3 mr-xl-5">
                    <h2><?php echo $modulo?></h2>
                    <p class="mb-md-0"><?php echo $descripcion?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body dashboard-tabs p-0">
                  <ul class="nav nav-tabs px-4" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Módulos</a>
                    </li>
                  </ul>
                  <div class="tab-content py-0 px-0">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between">
                        <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title">Juegos <span class="badge badge-pill badge-primary"><?php echo $cantjuegos ?></span></h5>
                              <div class="row">
                                <div class="col-sm-6">
                                  <i class="mdi mdi-gamepad icon-lg mr-3 text-primary"></i>
                                </div>
                                <div class="col-sm-6">
                                  <p class="card-text">En el módulo de juegos puedes ingresar, modificar, listar y eliminar registros.</p>
                                </div>
                              </div>
                              <a href="<?php echo site_url('juego');?>" class="btn btn-primary">Entrar</a>
                            </div>
                          </div>
                        </div>

                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title">Opiniones <span class="badge badge-pill badge-primary"><?php echo $cantopiniones ?></span></h5>
                              <div class="row">
                                <div class="col-sm-6">
                                  <i class="mdi mdi-message-text-outline icon-lg mr-3 text-primary"></i>
                                </div>
                                <div class="col-sm-6">
                                  <p class="card-text">En el módulo de opinionees puedes ingresar, modificar, listar y eliminar registros.</p>
                                </div>
                              </div>
                              <a href="<?php echo site_url('opinion');?>" class="btn btn-primary">Entrar</a>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- footer -->
        <?php include("incluidos/footer.php"); ?>
        <!-- end footer -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- js -->
  <?php include("incluidos/js.php"); ?>
  <!-- End js-->
</body>
</html>


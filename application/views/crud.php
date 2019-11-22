<!DOCTYPE html>
<html lang="es">

<head>
  <title>
OpiGamer - <?php echo $modulo?>
  </title>
  <?php include("incluidos/head.php"); ?>
  <?php
    foreach ($css_files as $css) {
    	?>
    	<link rel="stylesheet" type="text/css" href="<?php echo $css?>">
    	<?php
    }
    ?>
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
                    <h2>
                      <!-- Titulo principal -->
                      <?php echo $modulo?>
                    </h2>
                    <p class="mb-md-0">
                      <!-- subtitulo -->
                      <?php echo $descripcion?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body dashboard-tabs p-0">
                  <div class="tab-content py-0 px-0">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between">
                        <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                            <!-- Contenido principal -->
                            <?php echo $contenido;?>
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
  <?php 
    foreach ($js_files as $js) {
      ?>
      <script type="text/javascript" src="<?php echo $js?>"></script>
      <?php
    }
  ?>
  <!-- End js-->
</body>
</html>


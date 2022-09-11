<!DOCTYPE html>
<html lang="es">
  <?php
    include_once('php/functions/funciones.php');
    include_once('php/views/src/style.php');
  ?>
  <body>    
    <div class="hk-wrapper" data-layout="vertical" data-layout-style="default" data-menu="light" data-footer="simple">    
    <?php
      include_once('php/views/pages/navbar.php');
      include_once('php/views/pages/menu.php');
      
    ?>
      <div class="hk-pg-wrapper">
        <div class="container-xxl">
          <div class="hk-pg-header pg-header-wth-tab pt-7">
            <div class="d-flex">
              <div class="d-flex flex-wrap justify-content-between flex-1">
                <div class="mb-lg-0 mb-2 me-8">
                  <h1 class="pg-title">Bienvenido, {nombre_usuario}</h1>
                  <p>No hay cambios recientes en tu grupos y/o proyectos</p>
                  <?php echo actual_tab(); ?>
                </div>
              </div>
            </div>
          </div>
          <div class="hk-pg-body">
            <div class="tab-content">
              <div class="tab-pane fade show active" id="tab_block_1">
                <div class="row">
                  <div class="col-md-12 mb-md-4 mb-3">
                    <div class="card card-border mb-0 h-100">
                      <div class="card-header card-header-action">
                        <h6>Mis proyectos <span class="badge badge-sm badge-light ms-1">5</span>
                        </h6>
                        <div class="card-action-wrap">
                          <button class="btn btn-sm btn-outline-light">
                            <span>
                              <span class="icon">
                                <span class="feather-icon">
                                  <i data-feather="upload"></i>
                                </span>
                              </span>
                              <span class="btn-text">Importar</span>
                            </span>
                          </button>
                          <a class="btn btn-sm btn-primary ms-3" href="#agregar_proyecto" >
                            <span>
                              <span class="icon">
                                <span class="feather-icon">
                                  <i data-feather="plus"></i>
                                </span>
                              </span>
                              <span class="btn-text">Crear nuevo</span>
                            </span>
                          </a>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="contact-list-view">
                          <?php include_once('php/views/pages/tabla.php'); ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="hk-footer">
          <footer class="container-xxl footer">
            <div class="row">
              <div class="col-xl-8">
                <p class="footer-text">
                  <span class="copy-text">Jampack © 2022 All rights reserved.</span>
                  <a href="#" class="" target="_blank">Privacy Policy</a>
                  <span class="footer-link-sep">|</span>
                  <a href="#" class="" target="_blank">T&C</a>
                  <span class="footer-link-sep">|</span>
                  <a href="#" class="" target="_blank">System Status</a>
                </p>
              </div>
              <div class="col-xl-4">
                <a href="#" class="footer-extr-link link-default">
                  <span class="feather-icon">
                    <i data-feather="external-link"></i>
                  </span>
                  <u>Send feedback to our help forum</u>
                </a>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <script src="dist/js/dropdown-bootstrap-extended.js"></script>
    <script src="vendors/simplebar/dist/simplebar.min.js"></script>
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="vendors/datatables.net-select/js/dataTables.select.min.js"></script>
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/daterangepicker/daterangepicker.js"></script>
    <script src="dist/js/daterangepicker-data.js"></script>
    <script src="vendors/%40amcharts/amcharts4/core.js"></script>
    <script src="vendors/%40amcharts/amcharts4/maps.js"></script>
    <script src="vendors/%40amcharts/amcharts4-geodata/worldLow.js"></script>
    <script src="vendors/%40amcharts/amcharts4-geodata/worldHigh.js"></script>
    <script src="vendors/%40amcharts/amcharts4/themes/animated.js"></script>
    <script src="vendors/apexcharts/dist/apexcharts.min.js"></script>
    <script src="dist/js/init.js"></script>
    <script src="dist/js/chips-init.js"></script>
    <script src="dist/js/dashboard-data.js"></script>
	<script src="main.js"></script>
  </body>
</html>
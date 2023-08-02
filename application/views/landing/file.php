<!doctype html>
<html lang="en">

<head>

  <!-- TITLE -->
  <?php $this->load->view('partials/title.php'); ?>

  <!-- CSS FILES -->
  <?php $this->load->view('partials/vendor-css.php'); ?>

</head>

<body id="top">

  <main>
    <!-- NAVBAR -->
    <?php $this->load->view('partials/navbar.php'); ?>


    <section class="hero-section d-flex justify-content-center align-items-center" id="#">
      <div class="container">
        <div class="row">

          <div class="col-lg-12 col-12 mx-auto">
            <h1 class="text-white text-center">FILE</h1>

            <h6 class="text-center">Database maps and table</h6>
          </div>

        </div>
      </div>
    </section>

    <section class="explore-section section-padding" id="#">

      <div class="container-fluid">
        <div class="row">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="design-tab" data-bs-toggle="tab" data-bs-target="#design-tab-pane" type="button" role="tab" aria-controls="design-tab-pane" aria-selected="true">Maps</button>
            </li>

            <li class="nav-item" role="presentation">
              <button class="nav-link" id="marketing-tab" data-bs-toggle="tab" data-bs-target="#marketing-tab-pane" type="button" role="tab" aria-controls="marketing-tab-pane" aria-selected="false">Table</button>
            </li>
          </ul>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="design-tab-pane" role="tabpanel" aria-labelledby="design-tab" tabindex="0">
                <div class="row">
                  <div class="col-lg-3 col-md-6 col-12" style="margin-bottom: 30px;">
                    <div class="custom-block custom-block-overlay">
                      <div class="d-flex flex-column h-100">
                        <img src="images/businesswoman-using-tablet-analysis-graph-company-finance-strategy-statistics-success-concept-planning-future-office-room.jpg" class="custom-block-image img-fluid" alt="">

                        <div class="custom-block-overlay-text d-flex">
                          <div>
                            <h5 class="text-white mb-2">Depth to Water <br> Table</h5>
                            <a href="<?= base_url('field/water') ?>" class="btn custom-btn mt-2 mt-lg-3">Download</a>
                          </div>
                        </div>

                        <div class="section-overlay"></div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-12" style="margin-bottom: 30px;">
                    <div class="custom-block custom-block-overlay">
                      <div class="d-flex flex-column h-100">
                        <img src="images/businesswoman-using-tablet-analysis-graph-company-finance-strategy-statistics-success-concept-planning-future-office-room.jpg" class="custom-block-image img-fluid" alt="">

                        <div class="custom-block-overlay-text d-flex">
                          <div>
                            <h5 class="text-white mb-2">Recharge</h5>
                            <a href="<?= base_url('field/water') ?>" class="btn custom-btn mt-2 mt-lg-3">Download</a>
                          </div>
                        </div>

                        <div class="section-overlay"></div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-12" style="margin-bottom: 30px;">
                    <div class="custom-block custom-block-overlay">
                      <div class="d-flex flex-column h-100">
                        <img src="images/businesswoman-using-tablet-analysis-graph-company-finance-strategy-statistics-success-concept-planning-future-office-room.jpg" class="custom-block-image img-fluid" alt="">

                        <div class="custom-block-overlay-text d-flex">
                          <div>
                            <h5 class="text-white mb-2">Soil Media</h5>
                            <a href="<?= base_url('field/water') ?>" class="btn custom-btn mt-2 mt-lg-3">Download</a>
                          </div>
                        </div>

                        <div class="section-overlay"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-12" style="margin-bottom: 30px;">
                    <div class="custom-block custom-block-overlay">
                      <div class="d-flex flex-column h-100">
                        <img src="images/businesswoman-using-tablet-analysis-graph-company-finance-strategy-statistics-success-concept-planning-future-office-room.jpg" class="custom-block-image img-fluid" alt="">

                        <div class="custom-block-overlay-text d-flex">
                          <div>
                            <h5 class="text-white mb-2">Topography</h5>
                            <a href="<?= base_url('field/water') ?>" class="btn custom-btn mt-2 mt-lg-3">Download</a>
                          </div>
                        </div>

                        <div class="section-overlay"></div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-12" style="margin-bottom: 30px;">
                    <div class="custom-block custom-block-overlay">
                      <div class="d-flex flex-column h-100">
                        <img src="images/businesswoman-using-tablet-analysis-graph-company-finance-strategy-statistics-success-concept-planning-future-office-room.jpg" class="custom-block-image img-fluid" alt="">

                        <div class="custom-block-overlay-text d-flex">
                          <div>
                            <h5 class="text-white mb-2">Impact of Vadose <br> Zone Media</h5>
                            <a href="<?= base_url('field/water') ?>" class="btn custom-btn mt-2 mt-lg-3">Download</a>
                          </div>
                        </div>

                        <div class="section-overlay"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-12" style="margin-bottom: 30px;">
                    <div class="custom-block custom-block-overlay">
                      <div class="d-flex flex-column h-100">
                        <img src="images/businesswoman-using-tablet-analysis-graph-company-finance-strategy-statistics-success-concept-planning-future-office-room.jpg" class="custom-block-image img-fluid" alt="">

                        <div class="custom-block-overlay-text d-flex">
                          <div>
                            <h5 class="text-white mb-2">Conductivity <br> Hydraulic</h5>
                            <a href="<?= base_url('field/water') ?>" class="btn custom-btn mt-2 mt-lg-3">Download</a>
                          </div>
                        </div>

                        <div class="section-overlay"></div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-12" style="margin-bottom: 30px;">
                    <div class="custom-block custom-block-overlay">
                      <div class="d-flex flex-column h-100">
                        <img src="images/businesswoman-using-tablet-analysis-graph-company-finance-strategy-statistics-success-concept-planning-future-office-room.jpg" class="custom-block-image img-fluid" alt="">

                        <div class="custom-block-overlay-text d-flex">
                          <div>
                            <h5 class="text-white mb-2">Administration</h5>
                            <a href="<?= base_url('field/water') ?>" class="btn custom-btn mt-2 mt-lg-3">Download</a>
                          </div>
                        </div>

                        <div class="section-overlay"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- TABLE -->

              <div class="tab-pane fade" id="marketing-tab-pane" role="tabpanel" aria-labelledby="marketing-tab" tabindex="0">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0" style="padding-bottom: 30px;">
                    <div class="custom-block bg-white shadow-lg">
                      <a href="<?= base_url('data/water') ?>">
                        <div class="d-flex">
                          <div>
                            <h5 class="mb-2">Score & Class</h5>
                          </div>
                        </div>

                        <img src="<?= base_url(); ?>assets/vendor/images/topics/data.png" class="img-fluid" alt="">
                      </a>
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0" style="padding-bottom: 30px;">
                    <div class="custom-block bg-white shadow-lg">
                      <a href="<?= base_url('data/water') ?>">
                        <div class="d-flex">
                          <div>
                            <h5 class="mb-2">Score & Class</h5>
                          </div>
                        </div>

                        <img src="<?= base_url(); ?>assets/vendor/images/topics/data.png" class="img-fluid" alt="">
                      </a>
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0" style="padding-bottom: 30px;">
                    <div class="custom-block bg-white shadow-lg">
                      <a href="<?= base_url('data/water') ?>">
                        <div class="d-flex">
                          <div>
                            <h5 class="mb-2">Score & Class</h5>
                          </div>
                        </div>

                        <img src="<?= base_url(); ?>assets/vendor/images/topics/data.png" class="img-fluid" alt="">
                      </a>
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0" style="padding-bottom: 30px;">
                    <div class="custom-block bg-white shadow-lg">
                      <a href="<?= base_url('data/water') ?>">
                        <div class="d-flex">
                          <div>
                            <h5 class="mb-2">Score & Class</h5>
                          </div>
                        </div>

                        <img src="<?= base_url(); ?>assets/vendor/images/topics/data.png" class="img-fluid" alt="">
                      </a>
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0" style="padding-bottom: 30px;">
                    <div class="custom-block bg-white shadow-lg">
                      <a href="<?= base_url('data/water') ?>">
                        <div class="d-flex">
                          <div>
                            <h5 class="mb-2">Score & Class</h5>
                          </div>
                        </div>

                        <img src="<?= base_url(); ?>assets/vendor/images/topics/data.png" class="img-fluid" alt="">
                      </a>
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0" style="padding-bottom: 30px;">
                    <div class="custom-block bg-white shadow-lg">
                      <a href="<?= base_url('data/water') ?>">
                        <div class="d-flex">
                          <div>
                            <h5 class="mb-2">Score & Class</h5>
                          </div>
                        </div>

                        <img src="<?= base_url(); ?>assets/vendor/images/topics/data.png" class="img-fluid" alt="">
                      </a>
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0" style="padding-bottom: 30px;">
                    <div class="custom-block bg-white shadow-lg">
                      <a href="<?= base_url('data/water') ?>">
                        <div class="d-flex">
                          <div>
                            <h5 class="mb-2">Score & Class</h5>
                          </div>
                        </div>

                        <img src="<?= base_url(); ?>assets/vendor/images/topics/data.png" class="img-fluid" alt="">
                      </a>
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0" style="padding-bottom: 30px;">
                    <div class="custom-block bg-white shadow-lg">
                      <a href="<?= base_url('data/water') ?>">
                        <div class="d-flex">
                          <div>
                            <h5 class="mb-2">Score & Class</h5>
                          </div>
                        </div>

                        <img src="<?= base_url(); ?>assets/vendor/images/topics/data.png" class="img-fluid" alt="">
                      </a>
                    </div>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>
    </section>
  </main>


  <!-- JAVASCRIPT FILES -->
  <?php $this->load->view('partials/vendor-js.php'); ?>

  <footer class="footer">
    <div class="container" style="padding-bottom: 25px;">
      <div class="row">

        <div class="col-lg-12 col-12">
          <p class="copyright-text text-center">Copyright &copy; <?= date('Y'); ?> WebGIS Potential for Groundwater Contamination with DRASTIC</p>
        </div>

      </div>
    </div>
  </footer>
</body>

</html>
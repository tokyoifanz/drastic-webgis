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
                        <h1 class="text-white text-center">DATA</h1>

                        <h6 class="text-center">Classification from DRASTIC Approach</h6>
                    </div>

                </div>
            </div>
        </section>

        <section class="explore-section section-padding" id="#">
            <div class="container">

                <div class="col-12 text-center">
                    <h2 class="mb-4">Indeks DRASTIC for Groundwater</h1>
                </div>

            </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="design-tab" data-bs-toggle="tab" data-bs-target="#design-tab-pane" type="button" role="tab" aria-controls="design-tab-pane" aria-selected="true">Depth to Water <br> Table</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="marketing-tab" data-bs-toggle="tab" data-bs-target="#marketing-tab-pane" type="button" role="tab" aria-controls="marketing-tab-pane" aria-selected="false">Recharge</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="finance-tab" data-bs-toggle="tab" data-bs-target="#finance-tab-pane" type="button" role="tab" aria-controls="finance-tab-pane" aria-selected="false">Aquifer Media</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="music-tab" data-bs-toggle="tab" data-bs-target="#music-tab-pane" type="button" role="tab" aria-controls="music-tab-pane" aria-selected="false">Soil Media</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="education-tab" data-bs-toggle="tab" data-bs-target="#education-tab-pane" type="button" role="tab" aria-controls="education-tab-pane" aria-selected="false">Topography</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="music-tab" data-bs-toggle="tab" data-bs-target="#impact" type="button" role="tab" aria-controls="music-tab-pane" aria-selected="false">Impact of Vadose <br> Zone Media</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="education-tab" data-bs-toggle="tab" data-bs-target="#conductivity" type="button" role="tab" aria-controls="education-tab-pane" aria-selected="false">Conductivity <br> Hydraulic</button>
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
                                    <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
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

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="custom-block custom-block-overlay">
                                            <div class="d-flex flex-column h-100">
                                                <img src="images/businesswoman-using-tablet-analysis-graph-company-finance-strategy-statistics-success-concept-planning-future-office-room.jpg" class="custom-block-image img-fluid" alt="">

                                                <div class="custom-block-overlay-text d-flex">
                                                    <div>
                                                        <h5 class="text-white mb-2">Maps</h5>
                                                        <a href="<?= base_url('field/water') ?>" class="btn custom-btn mt-2 mt-lg-3">Access</a>
                                                    </div>
                                                </div>

                                                <div class="section-overlay"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="marketing-tab-pane" role="tabpanel" aria-labelledby="marketing-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="<?= base_url('data/recharge') ?>">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Score & Class</h5>
                                                    </div>
                                                </div>

                                                <img src="<?= base_url(); ?>assets/vendor/images/topics/data.png" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="custom-block custom-block-overlay">
                                            <div class="d-flex flex-column h-100">
                                                <img src="images/businesswoman-using-tablet-analysis-graph-company-finance-strategy-statistics-success-concept-planning-future-office-room.jpg" class="custom-block-image img-fluid" alt="">

                                                <div class="custom-block-overlay-text d-flex">
                                                    <div>
                                                        <h5 class="text-white mb-2">Maps</h5>
                                                        <a href="<?= base_url('field/recharge') ?>" class="btn custom-btn mt-2 mt-lg-3">Access</a>
                                                    </div>
                                                </div>

                                                <div class="section-overlay"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="finance-tab-pane" role="tabpanel" aria-labelledby="finance-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="<?= base_url('data/aquifer') ?>">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Score & Class</h5>
                                                    </div>
                                                </div>

                                                <img src="<?= base_url(); ?>assets/vendor/images/topics/data.png" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="custom-block custom-block-overlay">
                                            <div class="d-flex flex-column h-100">
                                                <img src="images/businesswoman-using-tablet-analysis-graph-company-finance-strategy-statistics-success-concept-planning-future-office-room.jpg" class="custom-block-image img-fluid" alt="">

                                                <div class="custom-block-overlay-text d-flex">
                                                    <div>
                                                        <h5 class="text-white mb-2">Maps</h5>
                                                        <a href="<?= base_url('field/aquifer') ?>" class="btn custom-btn mt-2 mt-lg-3">Access</a>
                                                    </div>
                                                </div>

                                                <div class="section-overlay"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="music-tab-pane" role="tabpanel" aria-labelledby="music-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="<?= base_url('data/soil') ?>">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Score & Class</h5>
                                                    </div>
                                                </div>

                                                <img src="<?= base_url(); ?>assets/vendor/images/topics/data.png" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="custom-block custom-block-overlay">
                                            <div class="d-flex flex-column h-100">
                                                <img src="images/businesswoman-using-tablet-analysis-graph-company-finance-strategy-statistics-success-concept-planning-future-office-room.jpg" class="custom-block-image img-fluid" alt="">

                                                <div class="custom-block-overlay-text d-flex">
                                                    <div>
                                                        <h5 class="text-white mb-2">Maps</h5>
                                                        <a href="<?= base_url('field/soil') ?>" class="btn custom-btn mt-2 mt-lg-3">Access</a>
                                                    </div>
                                                </div>

                                                <div class="section-overlay"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="education-tab-pane" role="tabpanel" aria-labelledby="education-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="<?= base_url('data/topography') ?>">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Score & Class</h5>
                                                    </div>
                                                </div>

                                                <img src="<?= base_url(); ?>assets/vendor/images/topics/data.png" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="custom-block custom-block-overlay">
                                            <div class="d-flex flex-column h-100">
                                                <img src="images/businesswoman-using-tablet-analysis-graph-company-finance-strategy-statistics-success-concept-planning-future-office-room.jpg" class="custom-block-image img-fluid" alt="">

                                                <div class="custom-block-overlay-text d-flex">
                                                    <div>
                                                        <h5 class="text-white mb-2">Maps</h5>
                                                        <a href="<?= base_url('field/topography') ?>" class="btn custom-btn mt-2 mt-lg-3">Access</a>
                                                    </div>
                                                </div>

                                                <div class="section-overlay"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="impact" role="tabpanel" aria-labelledby="music-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="<?= base_url('data/impact') ?>">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Score & Class</h5>
                                                    </div>
                                                </div>

                                                <img src="<?= base_url(); ?>assets/vendor/images/topics/data.png" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="custom-block custom-block-overlay">
                                            <div class="d-flex flex-column h-100">
                                                <img src="images/businesswoman-using-tablet-analysis-graph-company-finance-strategy-statistics-success-concept-planning-future-office-room.jpg" class="custom-block-image img-fluid" alt="">

                                                <div class="custom-block-overlay-text d-flex">
                                                    <div>
                                                        <h5 class="text-white mb-2">Maps</h5>
                                                        <a href="<?= base_url('field/impact') ?>" class="btn custom-btn mt-2 mt-lg-3">Access</a>
                                                    </div>
                                                </div>

                                                <div class="section-overlay"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="conductivity" role="tabpanel" aria-labelledby="education-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="<?= base_url('data/hydraulic') ?>">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Score & Class</h5>
                                                    </div>
                                                </div>

                                                <img src="<?= base_url(); ?>assets/vendor/images/topics/data.png" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="custom-block custom-block-overlay">
                                            <div class="d-flex flex-column h-100">
                                                <img src="images/businesswoman-using-tablet-analysis-graph-company-finance-strategy-statistics-success-concept-planning-future-office-room.jpg" class="custom-block-image img-fluid" alt="">

                                                <div class="custom-block-overlay-text d-flex">
                                                    <div>
                                                        <h5 class="text-white mb-2">Maps</h5>
                                                        <a href="<?= base_url('field/hydraulic') ?>" class="btn custom-btn mt-2 mt-lg-3">Access</a>
                                                    </div>
                                                </div>

                                                <div class="section-overlay"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </section>

        <section class="timeline-section section-padding" id="#">
            <div class="section-overlay"></div>

            <div class="container">
                <div class="row">

                    <div class="col-12 text-center">
                        <h2 class="text-white mb-4">How does it work?</h1>
                    </div>

                    <div class="col-lg-10 col-12 mx-auto">
                        <div class="timeline-container">
                            <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                                <div class="list-progress">
                                    <div class="inner"></div>
                                </div>

                                <li>
                                    <h4 class="text-white mb-3">Data Processing</h4>

                                    <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, cumque magnam? Sequi, cupiditate quibusdam alias illum sed esse ad dignissimos libero sunt, quisquam numquam aliquam? Voluptas, accusamus omnis?</p>
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Geographical
                                                </button>
                                            </h2>

                                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    Topic Listing is free Bootstrap 5 CSS template. <strong>You are not allowed to redistribute this template</strong> on any other template collection website without our permission. Please contact TemplateMo for more detail. Thank you.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="icon-holder">
                                        <i class="bi-info-circle"></i>
                                    </div>
                                </li>

                                <li>
                                    <h4 class="text-white mb-3">Scoring Every Parameters</h4>

                                    <p class="text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint animi necessitatibus aperiam repudiandae nam omnis est vel quo, nihil repellat quia velit error modi earum similique odit labore. Doloremque, repudiandae?</p>

                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="true" aria-controls="collapseOne">
                                                    Geographical
                                                </button>
                                            </h2>

                                            <div id="collapsetwo" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    Topic Listing is free Bootstrap 5 CSS template. <strong>You are not allowed to redistribute this template</strong> on any other template collection website without our permission. Please contact TemplateMo for more detail. Thank you.
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="icon-holder">
                                        <i class="bi-pencil"></i>
                                    </div>
                                </li>

                                <li>
                                    <h4 class="text-white mb-3">Overlay &amp; Analysis</h4>

                                    <p class="text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi vero quisquam, rem assumenda similique voluptas distinctio, iste est hic eveniet debitis ut ducimus beatae id? Quam culpa deleniti officiis autem?</p>

                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsethree" aria-expanded="true" aria-controls="collapseOne">
                                                    Geographical
                                                </button>
                                            </h2>

                                            <div id="collapsethree" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    Topic Listing is free Bootstrap 5 CSS template. <strong>You are not allowed to redistribute this template</strong> on any other template collection website without our permission. Please contact TemplateMo for more detail. Thank you.
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="icon-holder">
                                        <i class="bi-layers"></i>
                                    </div>
                                </li>

                                <li>
                                    <h4 class="text-white mb-3">Result</h4>

                                    <p class="text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi vero quisquam, rem assumenda similique voluptas distinctio, iste est hic eveniet debitis ut ducimus beatae id? Quam culpa deleniti officiis autem?</p>

                                    <a href="<?= base_url('landing/map'); ?>" class="btn custom-btn custom-border-btn ms-3">Map</a>
                                    <a href="<?= base_url('landing/map'); ?>" class="btn custom-btn custom-border-btn ms-3">WebGIS</a>

                                    <div class="icon-holder">
                                        <i class="bi-globe"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <!-- JAVASCRIPT FILES -->
    <?php $this->load->view('partials/vendor-js.php'); ?>

</body>

</html>
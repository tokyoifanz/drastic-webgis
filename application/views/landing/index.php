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
            <?php $this->load->view('partials/navbar.php');?>
            

            <section class="hero-section d-flex justify-content-center align-items-center" id="#" style="padding-bottom: 200px;">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-4 mx-auto">
                            <img src="<?= base_url();?>assets/images/index/top-index.png" alt="WebGIS">
                        </div>
                        <div class="col-lg-8 col-8 mx-auto" style="padding-left: 200px; margin-top: 40px;">
                            <h1 class="text-white text-left">WebGIS Potential for Groundwater Contamination with DRASTIC</h1>

                            <h6 class="text-left">Kabupaten Wonosobo, Jawa Tengah. Indonesia</h6>
                        </div>

                    </div>
                </div>
            </section>


            <section class="featured-section">
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                            <div class="custom-block bg-white shadow-lg">
                                <a href="topics-detail.html">
                                    <div class="d-flex">
                                        <div>
                                            <h5 class="mb-2">What is WebGIS?</h5>

                                            <p class="mb-0" style="font-size: 15px;">WebGIS is employ the World Wide Web to facilitate the storage, visualization, analysis, and distribution of spatial information over the Internet</p>
                                        </div>
                                    </div>

                                    <img src="<?= base_url();?>assets/images/index/webgis-index.png" alt="What is WebGIS?">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="custom-block custom-block-overlay">
                                <div class="d-flex flex-column h-100">
                                    <img src="<?= base_url();?>assets/images/index/DRASTIC-index.jpg" class="custom-block-image img-fluid" alt="">

                                    <div class="custom-block-overlay-text d-flex">
                                        <div>
                                            <h5 class="text-white mb-2">What about DRASTIC?</h5>

                                            <p class="text-white">The 
                                                DRASTIC approach produces information on vulnerability zones based on the hydrogeological properties of 
                                                limestone. A parameter with a high weight index reflects a dominant or the most influencing factor in these 
                                                zones and its score was obtained from linear multiplication.</p>

                                            <a href="<?= base_url('landing/drastic');?>" class="btn custom-btn mt-2 mt-lg-3">Learn More</a>
                                        </div>
                                    </div>

                                    <div class="section-overlay"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="faq-section section-padding" id="#">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <h2 class="mb-4">Administration Profile</h2>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-lg-5 col-12" style="height: 600px;">
                            <?php $this->load->view('landing/map.php'); ?>
                        </div>

                        <div class="col-lg-6 col-12 m-auto">
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

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Distric
                                        </button>
                                    </h2>

                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            You can search on Google with <strong>keywords</strong> such as templatemo portfolio, templatemo one-page layouts, photography, digital marketing, etc.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Resident
                                        </button>
                                    </h2>

                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
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

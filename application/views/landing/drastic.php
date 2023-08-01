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
            

            <header class="site-header d-flex flex-column justify-content-center align-items-center">
                <div class="container">
                    <div class="row justify-content-center align-items-center">

                        <div class="col-lg-5 col-12 mb-5">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url('landing/index')?>">Home</a></li>

                                    <li class="breadcrumb-item active" aria-current="page">DRASTIC</li>
                                </ol>
                            </nav>

                            <h2 class="text-white">Introduction to <br> DRASTIC</h2>

                            <div class="d-flex align-items-center mt-5">
                                <a href="#topics-detail" class="btn custom-btn custom-border-btn smoothscroll me-4">Read More</a>
                            </div>
                        </div>

                        <div class="col-lg-5 col-12">
                            <div class="topics-detail-block bg-white shadow-lg">
                                <img src="images/topics/undraw_Remote_design_team_re_urdx.png" class="topics-detail-block-image img-fluid">
                            </div>
                        </div>

                    </div>
                </div>
            </header>


            <section class="topics-detail-section section-padding" id="topics-detail">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 m-auto">
                            <h3 class="mb-4">Introduction to Web Design</h3>

                            <p>So how can you stand out, do something unique and interesting, build an online business, and get paid enough to change life. Please visit TemplateMo website to download free website templates.</p>

                            <p><strong>There are so many ways to make money online</strong>. Below are several platforms you can use to find success. Keep in mind that there is no one path everyone can take. If that were the case, everyone would have a million dollars.</p>

                            <blockquote>
                                Freelancing your skills isn’t going to make you a millionaire overnight.
                            </blockquote>

                            <div class="row my-4">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <img src="images/businesswoman-using-tablet-analysis.jpg" class="topics-detail-block-image img-fluid">
                                </div>

                                <div class="col-lg-6 col-md-6 col-12 mt-4 mt-lg-0 mt-md-0">
                                    <img src="images/colleagues-working-cozy-office-medium-shot.jpg" class="topics-detail-block-image img-fluid">
                                </div>
                            </div>

                            <p>Most people start with freelancing skills they already have as a side hustle to build up income. This extra cash can be used for a vacation, to boost up savings, investing, build business.</p>
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

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


        <header class="site-header d-flex flex-column justify-content-center align-items-center">
            <div class="container">
                <div class="row justify-content-center align-items-center">

                    <div class="col-lg-5 col-12 mb-5">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('landing/index') ?>">Home</a></li>

                                <li class="breadcrumb-item"><a href="<?= base_url('landing/data') ?>">Data</a></li>

                                <li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
                            </ol>
                        </nav>

                        <h2 class="text-white">Data <br> <?= $title ?></h2>

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
                        <h3 class="mb-4">What is <?= $title ?>?</h3>

                        <p><strong><?= $title ?></strong> is ...</p>

                        <p><?= $title ?> has a class and score for groundwater vulnerability, there are...</p>

                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 col-12 m-auto">
                        <table>
                            <tr>
                                <th>Class</th>
                                <th>Score</th>
                            </tr>
                            <tr>
                                <td>200 - 300</td>
                                <td>9</td>
                            </tr>
                            <tr>
                                <td>150 - 200</td>
                                <td>8</td>
                            </tr>
                            <tr>
                                <td>120 - 150</td>
                                <td>6</td>
                            </tr>
                            <tr>
                                <td>100 -120</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>80 - 100</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>60 - 80</td>
                                <td>2</td>
                            </tr>
                        </table>
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
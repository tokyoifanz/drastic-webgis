<!DOCTYPE html>
<html>

<head>
	<!-- TITLE -->
	<?php $this->load->view('partials/title.php'); ?>

	<!-- CSS FILES -->
	<?php $this->load->view('partials/vendor-css.php'); ?>

	<!-- MAP CSS -->
	<?php $this->load->view('partials/map-css.php'); ?>


</head>

<body>

	<!-- CONTENT -->
	<div id="map"></div>

	<!-- SIDEBAR-->
	<div id="sidebar" class="leaflet-sidebar collapsed">
    <!-- Nav tabs -->
		<div class="leaflet-sidebar-tabs">
			<ul role="tablist"> <!-- top aligned tabs -->
				<li><a href="#basemap" role="tab"><i class="fa-solid fa-map"></i></a></li>
				<li><a href="#layers" role="tab"><i class="fa-solid fa-layer-group"></i></a></li>
				<li><a href="#sidebyside" role="tab"><i class="fa fa-user"></i></a></li>
			</ul>

			<ul role="tablist"> <!-- bottom aligned tabs -->
				<li><a href="#settings" role="tab"><i class="fa fa-gear"></i></a></li>
			</ul>
		</div>

		<!-- Tab panes -->
		<div class="leaflet-sidebar-content" style="background-color: white;">
			<div class="leaflet-sidebar-pane" id="basemap">
				<h1 class="leaflet-sidebar-header" style="background-color: #9FE2BF; color: #00518C">
					Basemaps
					<div class="leaflet-sidebar-close"><i class="fa fa-caret-left"></i></div>
				</h1>
				<div class="collapse show" id="basemap-collapse">
                        <div class="card-group">
                            <ul class="list-group list-group-flush" id="basemaps-list">
                                <li class="list-group-item">
                                    <button class="border-0 basemaps" role="button" id="basemaps-esri" style="background-color: white;">
                                        <div class="card text-white">
                                            <img src="<?= base_url(); ?>assets/map/images/ESRI.png" class="card-img" alt="">
                                            <div class="card-img-overlay">
                                                <h5 class="card-title float-end">ESRI</h5>
                                            </div>
                                        </div>
                                    </button>
                                </li>
                                <li class="list-group-item">
                                    <button class="border-0 basemaps" role="button" id="basemaps-light" style="background-color: white;">
                                        <div class="card text-white">
                                            <img src="<?= base_url(); ?>assets/map/images/Light.png" class="card-img" alt="">
                                            <div class="card-img-overlay">
                                                <h5 class="card-title float-end">CartoDB Light</h5>
                                            </div>
                                        </div>
                                    </button>
                                </li>
                                <li class="list-group-item">
                                    <button class="border-0 basemaps" role="button" id="basemaps-dark" style="background-color: white;">
                                        <div class="card text-white">
                                            <img src="<?= base_url(); ?>assets/map/images/Dark.png" class="card-img" alt="">
                                            <div class="card-img-overlay">
                                                <h5 class="card-title float-end">CartoDB Dark</h5>
                                            </div>
                                        </div>
                                    </button>
                                </li>
                                <li class="list-group-item">
                                    <button class="border-0 basemaps" role="button" id="OpenStreet-Map" style="background-color: white;">
                                        <div class="card text-white">
                                            <img src="<?= base_url(); ?>assets/map/images/OSM.png" class="card-img" alt="">
                                            <div class="card-img-overlay">
                                                <h5 class="card-title float-end">OpenStreet Map</h5>
                                            </div>
                                        </div>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
			</div>

			<div class="leaflet-sidebar-pane" id="layers">
				<h1 class="leaflet-sidebar-header" style="background-color: #9FE2BF; color: #00518C">Layers<div class="leaflet-sidebar-close"><i class="fa fa-caret-left"></i></div></h1>
			</div>

			<div class="leaflet-sidebar-pane" id="sidebyside">
				<h1 class="leaflet-sidebar-header" style="background-color: #9FE2BF; color: #00518C">Profile<div class="leaflet-sidebar-close"><i class="fa fa-caret-left"></i></div></h1>
			</div>
		</div>
	</div>

	<!-- JAVASCRIPT FILES -->
	<?php $this->load->view('partials/vendor-js.php'); ?>

	<!-- JS MAP-->
	<?php $this->load->view('partials/map-js.php'); ?>

</body>

</html>

<!-- JSON -->
<script src="<?= base_url() ?>assets/map/layers/kecamatan-wsb.js"></script>
<script src="<?= base_url() ?>assets/map/layers/PL-wonosobo.js"></script>
<script src="<?= base_url() ?>assets/map/js/map.js"></script>
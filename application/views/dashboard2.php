<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>SPK MOORA</title>
	<!-- core:css -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/core/core.css">
	<!-- endinject -->
  <!-- plugin css for this page -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
	<!-- end plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/flag-icon-css/css/flag-icon.min.css">
	<!-- endinject -->
  <!-- Layout styles -->  
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/demo_2/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.png" />
</head>
<body class="sidebar-dark">
	<div class="main-wrapper">

		<!-- partial:partials/_sidebar.html -->
        <nav class="sidebar">
      <div class="sidebar-header">
        <a href="<?php echo base_url() ?>welcome/dashboard" class="sidebar-brand">
          Dashboard<span></span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Menu Dashboard</li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
              <i class="link-icon" data-feather="inbox"></i>
              <span class="link-title">Data Kriteria</span>
            </a>           
         
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#forms" role="button" aria-expanded="false" aria-controls="forms">
              <i class="link-icon" data-feather="inbox"></i>
              <span class="link-title">Data Alternatif</span>           
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" role="button" aria-expanded="false" aria-controls="tables">
              <i class="link-icon" data-feather="layout"></i>
              <span class="link-title">Hasil Perhitungan</span>  
            </a>           
          </li>         
        </ul>
      </div>
    </nav>

    <nav class="settings-sidebar">
      <div class="sidebar-body">
        <a href="#" class="settings-sidebar-toggler">
          <i data-feather="settings"></i>
        </a>
        <div class="theme-wrapper">
          <h6 class="text-muted mb-2">Light Theme:</h6>
          <a class="theme-item" href="<?php echo base_url() ?>welcome/dashboard">
            <img src="../assets/images/screenshots/light.jpg" alt="light theme">
          </a>
          <h6 class="text-muted mb-2">Dark Theme:</h6>
          <a class="theme-item active" href="<?php echo base_url() ?>welcome/dashboard2">
            <img src="../assets/images/screenshots/dark.jpg" alt="light theme">
          </a>
        </div>
      </div>
    </nav>
		<!-- partial -->
	
		<div class="page-wrapper">	
			<!-- partial:partials/_navbar.html -->

			<!-- partial -->

			<div class="page-content">

        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
          <div>
            <h4 class="mb-3 mb-md-0">Welcome to Dashboard Sistem Pendukung Keputusan</h4>
          </div>
          <div class="d-flex align-items-center flex-wrap text-nowrap">
            <div class="input-group date datepicker dashboard-date mr-2 mb-2 mb-md-0 d-md-none d-xl-flex" id="dashboardDate">
              <span class="input-group-addon bg-transparent"><i data-feather="calendar" class=" text-primary"></i></span>
              <input type="text" class="form-control">
            </div>
            <button type="button" class="btn btn-outline-info btn-icon-text mr-2 d-none d-md-block">
              <i class="btn-icon-prepend" data-feather="download"></i>
              Import
            </button>
            <button type="button" class="btn btn-outline-primary btn-icon-text mr-2 mb-2 mb-md-0">
              <i class="btn-icon-prepend" data-feather="printer"></i>
              Print
            </button>
            <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
              <i class="btn-icon-prepend" data-feather="download-cloud"></i>
              Download Report
            </button>
          </div>
        </div>





			</div>

			<!-- partial:partials/_footer.html -->

			<!-- partial -->		
		</div>
	</div>

	<!-- core:js -->
	<script src="<?php echo base_url() ?>assets/vendors/core/core.js"></script>
	<!-- endinject -->
  <!-- plugin js for this page -->
  <script src="<?php echo base_url() ?>assets/vendors/chartjs/Chart.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendors/jquery.flot/jquery.flot.js"></script>
  <script src="<?php echo base_url() ?>assets/vendors/jquery.flot/jquery.flot.resize.js"></script>
  <script src="<?php echo base_url() ?>assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendors/apexcharts/apexcharts.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendors/progressbar.js/progressbar.min.js"></script>
	<!-- end plugin js for this page -->
	<!-- inject:js -->
	<script src="<?php echo base_url() ?>assets/vendors/feather-icons/feather.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/template.js"></script>
	<!-- endinject -->
  <!-- custom js for this page -->
  <script src="<?php echo base_url() ?>assets/js/dashboard.js"></script>
  <script src="<?php echo base_url() ?>assets/js/datepicker.js"></script>
	<!-- end custom js for this page -->
</body>
</html>    
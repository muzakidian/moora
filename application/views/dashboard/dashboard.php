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
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/demo_1/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.png" />


  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="author" content="Brex-Thee" />
  <!-- description -->
  <meta name="description" content="Brex is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and portfolio HTML5 template." />
  <!-- keywords -->
  <meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal" />
  <!-- favicon -->

  <!-- animation -->
  <link rel="stylesheet" href="assets/assets1/css/plugins/animate.css" />
  <!-- Animated Headlines -->
  <link rel="stylesheet" href="assets/assets1/css/plugins/animated-headlines.css">
  <!-- bootstrap -->
  <link rel="stylesheet" href="assets/assets1/css/bootstrap.min.css" />
  <!-- font-awesome icon -->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- Dosis Font -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
  <!-- magnific popup -->
  <link rel="stylesheet" href="assets/assets1/css/plugins/magnific-popup.css" />
  <!-- Main Style -->
  <link rel="stylesheet" href="assets/assets1/css/cssnew.css" />
</head>

<body class="sidebar-dark">
  <div class="main-wrapper">

    <!-- partial:partials/_sidebar.html -->

    <!-- partial -->

    <div class="page-wrapper">
      <!-- partial:partials/_navbar.html -->

      <!-- partial -->

      <div class="page-content">

        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
          <div>
            <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
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
        <br />

        <div class="card">
          <div class="card-body ">

            <body>
              <!-- ======== start header ======== -->
              <header>

              </header>
              <!-- ======== End header ======== -->

              <!-- ======== Start Slider ======== -->
              <section class="slider" id="slider">
                <div class="slider-content text-left">

                  <h3 class="cd-headline clip is-full-width">
                    <span class="cd-words-wrapper">
                      <b class="is-visible">Sistem Pendukung Keputusan</b><br />
                      Metode Multi Objective Optimization by Ratio Analysis

                    </span>
                  </h3>
                  <br />
                  <p> Pada Website Sistem Pendukung Keputusan ini menggunakan metode Multi-Objective Optimization On The Basis Of Ratio Analysis (MOORA) yang akan menghasilkan rekomendasi berdasarkan nilai alternatif yang terbesar hingga terkecil, dengan Framework PHP Codeigniter 3 dan database MySQL.
                    Metode MOORA memiliki tingkat selektifitas yang baik karena dapat
                    menentukan tujuan dari kriteria yang bertentangan.

                    Dimana kriteria dapat bernilai menguntungkan (benefit) atau yang tidak
                    menguntungkan (cost).
                  </p>


                </div>
              </section>
              <br /><br />
              
              <div class="row">&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="card bg-light">
                  <div class="card-body">
                    <h5 class="card-title">KRITERIA</h5>
                    <p class="card-text">Menambahkan Data Kriteria MOORA.        </p>
                    <a href="<?php echo base_url() ?>Kriteria/kriteria" class="btn btn-primary">+ Data Kriteria</a>
                  </div>
                </div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="card bg-light">
                  <div class="card-body">
                    <h5 class="card-title">ALTERNATIF</h5>
                    <p class="card-text">Menambahkan Data Alternatif MOORA.</p>
                    <a href="<?php echo base_url() ?>Alternatif/alternatif" class="btn btn-success">+ Data Alternatif</a>
                  </div>
                </div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="card bg-light">
                  <div class="card-body">
                    <h5 class="card-title">TABEL POIN</h5>
                    <p class="card-text">Menambahkan Data Tabel Poin MOORA.</p>
                    <a href="<?php echo base_url() ?>Poin/Poin" class="btn btn-warning">+ Tabel Poin</a>
                  </div>
                
              </div>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <div class="card bg-light">
                    <div class="card-body">
                      <h5 class="card-title">PERHITUNGAN</h5>
                      <p class="card-text">Hasil dari Perhitungan Metode MOORA.</p>
                      <a href="<?php echo base_url() ?>metode/metode" class="btn btn-danger">= Perhitungan</a>
                    </div>
                </div>
          </div>
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


  <script src="assets/assets1/js/plugins/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap 4.1.3 -->
  <script src="assets/assets1/js/bootstrap.min.js"></script>
  <script src="js/plugins/popper.min.js"></script>
  <!-- Animated Headlines -->
  <script src="assets/assets1/js/plugins/animated-headlines.js"></script>
  <!-- Nav jQuery-->
  <script src="assets/assets1/js/plugins/nav.jquery.js"></script>
  <!-- Nav jQuery-->
  <script src="assets/assets1/js/plugins/jquery.stellar.js"></script>
  <!-- Isotope -->
  <script src="assets/assets1/js/plugins/isotope.pkgd.min.js"></script>
  <!-- Image Loaded -->
  <script src="assets/assets1/js/plugins/imagesloaded.pkgd.min.js"></script>
  <!-- Magnific Popup -->
  <script src="assets/assets1/js/plugins/magnific-popup.min.js"></script>
  <!-- Smooth-Scroll -->
  <script src="assets/assets1/js/smooth-scroll.js"></script>
  <!-- Counter Up -->
  <script src="assets/assets1/js/plugins/jquery.waypoints.min.js"></script>
  <script src="assets/assets1/js/plugins/jquery.counterup.min.js"></script>
  <!-- Main JS -->
  <script src="assets/assets1/js/main.js"></script>
</body>

</html>
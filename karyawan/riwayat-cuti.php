<?php
$backurl = '../';
require_once($backurl . 'config/conn.php');
require_once($backurl . 'config/function.php');
$jh = 'Riwayat Cuti';
kicked("karyawan");


?>
<!DOCTYPE html>
<html lang="en">
<!--================================================================================
  Item Name: Materialize - Material Design Admin Template
  Version: 4.0
  Author: PIXINVENT
  Author URL: https://themeforest.net/user/pixinvent/portfolio
  ================================================================================ -->

<head>
  <?php include $backurl . 'config/head.php'; ?>
</head>

<body>
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->
  <!-- //////////////////////////////////////////////////////////////////////////// -->
  <!-- START HEADER -->
  <?php include $backurl . 'karyawan/config/header.php'; ?>
  <!-- END HEADER -->
  <!-- //////////////////////////////////////////////////////////////////////////// -->
  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">
      <!-- START LEFT SIDEBAR NAV-->
      <?php include $backurl . 'karyawan/config/sidebar.php'; ?>
      <!-- END LEFT SIDEBAR NAV-->
      <!-- //////////////////////////////////////////////////////////////////////////// -->
      <!-- START CONTENT -->
      <section id="content">
        <!--start container-->
        <div class="container">
          <!-- breadcrumbs start -->
          <div id="breadcrumbs-wrapper">
            <!-- Search for small screen -->
            <div class="header-search-wrapper grey lighten-2 hide-on-large-only">
              <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
            </div>
            <div class="container">
              <div class="row">
                <div class="col s10 m6 l6">
                  <h5 class="breadcrumbs-title">Riwayat Cuti</h5>
                  <ol class="breadcrumbs">
                    <li><a href="<?= $df['host'] . 'karyawan/'; ?>">Dashboard</a></li>
                    <!-- <li><a href="#">Tables</a></li> -->
                    <li class="active">Riwayat Cuti</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!--breadcrumbs end-->
        </div>
        <!--end container-->
        <!--start container-->
        <div class="container">
          <!--Responsive Table-->
          <div class="divider"></div>
          <div id="responsive-table">
            <div class="row">
              <div class="col s12">
                <table class="responsive-table highlight centered">
                  <thead>
                    <tr>
                      <th data-field="nik">NIK</th>
                      <th data-field="nama">Nama lengkap</th>
                      <th data-field="tgl-pengajuan">Tanggal Pengajuan</th>
                      <th data-field="tgl-cuti">Mulai cuti</th>
                      <th data-field="Lama-cuti">Lama cuti</th>
                      <th data-field="jenis-cuti">Jenis cuti</th>
                      <th data-field="ket-cuti">Keterangan cuti</th>
                      <th data-field="Stat-cuti">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql = mysqli_query($conn, "SELECT * FROM cuti WHERE NIK='$_SESSION[NIK]'");
                    for ($i = 1; $Data = mysqli_fetch_array($sql); $i++) { ?>
                      <tr>
                        <td><?= $Data['NIK']; ?></td>
                        <td><?= $Data['nm_karyawan']; ?></td>
                        <td><?= $Data['tgl_pengajuan']; ?></td>
                        <td><?= $Data['tgl_mulai']; ?></td>
                        <td><?= $Data['lama_cuti']; ?></td>
                        <td><?= $Data['nm_jc']; ?></td>
                        <td><?= $Data['ket']; ?></td>
                        <td>
                          <?php if ($Data['stt_cuti'] == 'terima') { ?>
                            <a class="waves-effect waves-light btn green lighten-1">Terima</a>
                          <?php } else if ($Data['stt_cuti'] == 'tolak') { ?>
                            <a class="waves-effect waves-light btn red darken-1">Tolak</a>
                          <?php } else { ?>
                            <a class="waves-effect waves-light btn amber lighten-1">Proses</a>
                          <?php } ?>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- //////////////////////////////////////////////////////////////////////////// -->
        </div>
        <!--end container-->
      </section>
      <!-- END CONTENT -->
    </div>
    <!-- END WRAPPER -->
  </div>
  <!-- END MAIN -->
  <!-- //////////////////////////////////////////////////////////////////////////// -->
  <!-- START FOOTER -->
  <?php include_once($backurl . 'config/footer.php'); ?>
  <!-- END FOOTER -->
  <!-- ================================================
    Scripts
    ================================================ -->
  <!-- jQuery Library -->
  <script type="text/javascript" src="../assets/vendors/jquery-3.2.1.min.js"></script>
  <!--materialize js-->
  <script type="text/javascript" src="../assets/js/materialize.min.js"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="../assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <!--plugins.js - Some Specific JS codes for Plugin Settings-->
  <script type="text/javascript" src="../assets/js/plugins.js"></script>
  <!--custom-script.js - Add your own theme custom JS-->
  <script type="text/javascript" src="../assets/js/custom-script.js"></script>
</body>

</html>
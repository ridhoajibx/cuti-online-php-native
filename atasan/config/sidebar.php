<aside id="left-sidebar-nav">
  <ul id="slide-out" class="side-nav fixed leftside-navigation">
    <li class="user-details cyan darken-2">
      <div class="row">
        <div class="col col s4 m4 l4">
          <img src="../assets/images/avatar/avatar-7.png" alt="" class="circle responsive-img valign profile-image cyan">
        </div>
        <div class="col col s8 m8 l8">
          <ul id="profile-dropdown-nav" class="dropdown-content">
            <li>
              <a href="<?= $df['host'] . 'logout.php'; ?>" class="grey-text text-darken-1">
                <i class="material-icons">keyboard_tab</i> Logout</a>
            </li>
          </ul>
          <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown-nav"><?= $_SESSION["Nama"]; ?><i class="mdi-navigation-arrow-drop-down right"></i></a>
          <p class="user-roal"><?= $_SESSION["Posisi"]; ?></p>
        </div>
      </div>
    </li>
    <li class="no-padding">
      <ul class="collapsible" data-collapsible="accordion">
        <li class="bold <?= cekActive($df['host'] . 'atasan/'); ?>">
          <a href="<?= $df['host'] . 'atasan/'; ?>" class="waves-effect waves-cyan">
            <i class="material-icons">home</i>
            <span class="nav-text">Dashboard</span>
          </a>
        </li>

        <li class="bold <?= cekActive($df['host'] . 'atasan/data-karyawan.php'); ?>">
          <a href="<?= $df['host'] . 'atasan/data-karyawan.php'; ?>" class="waves-effect waves-cyan">
            <i class="material-icons">accessibility</i>
            <span class="nav-text">Data Karyawan</span>
          </a>
        </li>

        <li class="bold <?= cekActive($df['host'] . 'atasan/data-pengajuan-cuti.php'); ?>">
          <a href="<?= $df['host'] . 'atasan/data-pengajuan-cuti.php'; ?>" class="waves-effect waves-cyan">
            <i class="material-icons">card_travel</i>
            <span class="nav-text">Data Pengajuan Cuti</span>
          </a>
        </li>

        <li class="bold <?= cekActive($df['host'] . 'atasan/status-cuti-karyawan.php'); ?>">
          <a href="<?= $df['host'] . 'atasan/status-cuti-karyawan.php'; ?>" class="waves-effect waves-cyan">
            <i class="material-icons">library_books</i>
            <span class="nav-text">Status Cuti Karyawan</span>
          </a>
        </li>

        <li class="bold <?= cekActive($df['host'] . 'atasan/laporan-cuti.php'); ?>">
          <a href="<?= $df['host'] . 'atasan/laporan-cuti.php'; ?>" class="waves-effect waves-cyan">
            <i class="material-icons">content_paste</i>
            <span class="nav-text">Laporan cuti</span>
          </a>
        </li>

      </ul>
    </li>
  </ul>
  <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only">
    <i class="material-icons">menu</i>
  </a>
</aside>
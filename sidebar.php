<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title> Sistem Kehadiran Tadika</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!--Script-->
    <script type="text/javascript" src="js/adapter.min.js"></script>
    <script type="text/javascript" src="js/vue.min.js"></script>
    <script type="text/javascript" src="js/instascan.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="sidebar close" style="opacity: 1.2;">
      <ul class="nav-links">
        <li>
          <i class='bx bx-menu'></i>
        </li>
        <li>
          <a href="home.php">
            <i class='bx bx-compass'></i>
            <span class="link_name">HALAMAN UTAMA</span>
          </a>
          <ul class="sub-menu blank">
            <li>
              <a class="link_name" href="home.php">HALAMAN UTAMA</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="changePass.php">
            <i class='bx bx-cog'></i>
            <span class="link_name">TUKAR KATA LALUAN</span>
          </a>
          <ul class="sub-menu blank">
            <li>
              <a class="link_name" href="changePass.php">TUKAR KATA LALUAN</a>
            </li>
          </ul>
        </li>
        <li>
          <div class="iocn-link">
            <a href="#">
              <i class='bx bx-grid-alt'></i>
              <span class="link_name">URUS PENGGUNA</span>
            </a>
            <i class='bx bxs-chevron-down arrow'></i>
          </div>
          <ul class="sub-menu">
            <li>
              <a class="link_name" href="#">URUS PENGGUNA</a>
            </li>
            <li>
              <a href="RegisterGuru.php">DAFTAR GURU</a>
            </li>
            <li>
              <a href="RegisterPelajar.php">DAFTAR PELAJAR</a>
            </li>
            <li>
              <a href="view.php">PAPARAN GURU & PELAJAR</a>
            </li>
            <li>
              <a href="studentdetails.php">PAPARAN PENDAFTARAN PELAJAR</a>
            </li>
          </ul>
        </li>
        <li>
          <div class="iocn-link">
            <a href="#">
              <i class='bx bx-book-alt'></i>
              <span class="link_name">PENGURUSAN KEHADIRAN</span>
            </a>
            <i class='bx bxs-chevron-down arrow'></i>
          </div>
          <ul class="sub-menu">
            <li>
              <a class="link_name" href="#">PENGURUSAN KEHADIRAN</a>
            </li>
            <li>
              <a href="scan.php">IMBAS KEHADIRAN PELAJAR</a>
            </li>
          </ul>
        </li>
        <li>
          <div class="iocn-link">
            <a href="#">
              <i class='bx bx-pie-chart-alt-2'></i>
              <span class="link_name">LAPORAN</span>
            </a>
            <i class='bx bxs-chevron-down arrow'></i>
          </div>
          <ul class="sub-menu">
            <li>
              <a class="link_name" href="#">LAPORAN</a>
            </li>
            <li>
              <a href="report.php">LAPORAN KEHADIRAN PELAJAR</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="index.php">
            <i class='bx bx-log-out'></i>
            <span class="link_name">LOG KELUAR</span>
          </a>
        <li>
      </ul>
    </div>
    </body>
</html>
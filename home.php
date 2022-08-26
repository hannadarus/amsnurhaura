<?php
session_start();
require 'config.php';

if ($_SESSION['usertype'] == 'Guru') {
  include('sidebar.php');
} else {
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      nav {
        background-color: #11101d;
        height: 75px;
        width: 100%;
        line-height: 70px;
      }

      label.logo {
        line-height: 90%;
        padding: 0 90px;
      }

      .text {
        color: white;
        font-size: 15px;
      }
    </style>
  </head>
  <body>
    <nav>
      <label class="logo">
        <img src="images/logo.png" width="50" height="40">&nbsp;&nbsp;&nbsp; <span class="text"> Selamat Datang <?= $_SESSION['nama']; ?> </span>
      </label>
    </nav>
    <section class="home-section">
      <div class="home-content">
        <div class="container mt-5 ml-sm-20">
          <div class="row">
            <div class="col-md-12">
              <div class="container mt-4"> 
                 <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <h4>JADUAL KELAS</h4>
                        <br>
                        <form action="" method="GET">
                          <button type="submit" name="submit" class="btn btn-primary float-end">
                            <a href="addSchedule.php" style="color: white; text-decoration: none;">Tambah </button>
                          <br>
                        </form>
                      </div>
                      <div class="card-body" style="" responsive true;>
                        <table class="table table-bordered table-striped" id="export">
                          <thead>
                            <tr>
                              <th>MASA</th>
                              <th>RUTIN HARIAH</th>
                              <th>MAKLUMAT</th>
                            </tr>
                          </thead>
                          <tbody> 
                                <?php 
                                    $query = "SELECT * FROM schedule";
                                    $query_run = mysqli_query($conn, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $schedule)
                                    {
                                ?> 
                            <tr>
                              <td> <?= $schedule['masaJadual']; ?> </td>
                              <td> <?= $schedule['RutinHarian']; ?> </td>
                              <td> <?= $schedule['maklumatRutin']; ?> </td>
                              <td width="130px">
                                <a href="scheduleEdit.php?id=<?= $schedule['id']; ?>" class="btn btn-success btn-sm">Kemaskini </a>
                                <form action="ScheduleCode.php" method="POST" class="d-inline" autocomplete="off" onsubmit="return confirm('Anda mahu data ini dipadam?')">
                                  <button type="submit" name="delete_schedule" value="<?=$schedule['id'];?>" class="btn btn-danger btn-sm">Padam </button>
                                </form>
                              </td>
                            </tr> 
                                <?php
                                }
                                   }
                                    else
                                    {
                                        echo "
                                        <h5> No Record Found </h5>";
                                    }
                                ?> 
                            </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="js/script.js"></script>
  </body>
</html>
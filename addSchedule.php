<?php
session_start();

require 'config.php';

  if ($_SESSION['usertype'] == 'Guru') {
     include('sidebar.php');
} else {
  
}

    if(isset($_POST['submit']))
    {
    $Masa = mysqli_real_escape_string($conn, $_POST['masa']);
    $Rutin = mysqli_real_escape_string($conn, $_POST['rutin']);
    $Info = mysqli_real_escape_string($conn, $_POST['info']);

    $query = "INSERT INTO schedule (masaJadual,RutinHarian,maklumatRutin) VALUES ('$Masa','$Rutin ','$Info')";

    $query_run = mysqli_query($conn, $query);
        if($query_run)
        {
            
            header("Location: home.php");
            
        }
        else
        {
           
            header("Location: home.php");
           
       }
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
    <title>Schedule</title>
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
      a {
        text-decoration: none;
        color: white;
      }
    </style>
  </head>
  <nav>
    <label class="logo">
      <img src="images/logo.png" width="50" height="40">&nbsp;&nbsp;&nbsp; <span class="text"> Selamat Datang <?= $_SESSION['nama']; ?> </span>
    </label>
  </nav>
  <body>
    <section class="home-section">
      <div class="home-content">
        <div class="container mt-5">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4>TAMBAH JADUAL KELAS</h4>
                </div>
                <div class="card-body">
                  <form action="" method="POST">
                    <div class="mb-3">
                      <label>Masa</label>
                      <input type="time" name="masa" placeholder="Masukkan masa" class="form-control " required>
                    </div>
                    <br>
                    <div class="mb-3">
                      <label>Rutin Harian</label>
                      <input type="text" name="rutin" placeholder="Masukkan rutin harian" class="form-control " required>
                    </div>
                    <br>
                    <div class="mb-3">
                      <label>Maklumat Rutin</label>
                      <input type="text" name="info" placeholder="Masukkan maklumat rutin" class="form-control" required>
                    </div>
                    <br>
                    <div class="mb-3">
                      <button type="submit" class="btn btn-primary">
                        <a href="home.php">Kembali</a>
                      </button>&nbsp; &nbsp; &nbsp; <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
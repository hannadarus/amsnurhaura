<?php
session_start();

if ($_SESSION['usertype'] == 'Guru') {
  include('sidebar.php');
} else {
  include('sidebar2.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Tukar Kata Laluan </title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      .error {
        color: #ff0000;
      }

      a {
        color: white;
        text-decoration: none;
      }

      nav {
        background-color: #11101d;
        height: 75px;
        width: 100%;
        line-height: 80px;
      }

      label.logo {
        line-height: 80%;
        padding: 0 90px;
      }

      .text {
        color: white;
        font-size: 15px;
      }
    </style>
  </head>
  <body> 
    <?php include_once('config.php');

      if(isset($_POST['submit'])){

        $email = $_POST['email'];
        $password = $_POST['password'];
        $npassword = $_POST['npassword'];
        $cpassword = $_POST['cpassword'];

        $password = sha1($password);
        $npassword = sha1($npassword);

        $query = mysqli_query($conn, "SELECT email,password from users where email ='$email' AND password = '$password'");

        $num = mysqli_fetch_array($query);

        if($num>0){

          $conn = mysqli_query($conn,"UPDATE users set password = '$npassword' where email = '$email'");
           echo "
            <script>alert('Kata laluan berjaya ditukar...');</script>";
        }else{

         echo "
            <script>alert('Maaf Kata laluan anda tidak tepat...');</script>";

        }
      }
    ?>  
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
              <div class="card">
                <div class="card-header">
                  <h4>
                    <center>TUKAR KATA LALUAN</center>
                  </h4>
                </div>
                <div class="card-body">
                  <form action="#" method="POST">
                    <input type="hidden" name="action" value="changePass">
                    <label>EMEL <span class="error"> * </span>
                    </label>
                    <input type="email" name="email" placeholder="Contoh: Sofea123@gmail.com" class="form-control" pattern="+@gmail.com" required>
                    <br>
                    <div class="mb-3">
                      <label>KATA LALUAN SEMASA <span class="error"> * </span>
                      </label>
                      <input type="password" name="password" placeholder="Kata Laluan Semasa" class="form-control" required>
                    </div>
                    <br>
                    <div class="mb-3">
                      <label>KATA LALUAN BARU <span class="error"> * </span>
                      </label>
                      <input type="password" name="npassword" placeholder="Kata Laluan Semasa" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter and special character, and at least 8 or more characters" class="form-control" required>
                    </div>
                    <br>
                    <div class="mb-3">
                      <label>SAHKAN KATA LALUAN BARU <span class="error"> * </span>
                      </label>
                      <input type="password" name="cpassword" placeholder="Sahkan Kata Laluan" class="form-control" required>
                    </div>
                    <br>
                    <div class="mb-3">
                      <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </form>
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
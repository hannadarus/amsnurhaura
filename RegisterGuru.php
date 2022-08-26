<?php
session_start();
if ($_SESSION['usertype'] == 'Guru') {
  include('sidebar.php');
} else {
  include('registration_form.php');
}

$db = mysqli_connect("localhost","root","","dbnurhaura");

$name_error = "Maaf no MyKad yang dimasukkan telah berdaftar!";

if(isset($_POST['register'])){
    $nama = $_POST['nama'];
    $noMyKad = $_POST['noMyKad'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user_type = $_POST['user_type'];

    $password = sha1($password);

    $sql_noMyKad = "SELECT * FROM users WHERE noMyKad='$noMyKad'";
    $res_noMyKad = mysqli_query($db, $sql_noMyKad) or die(mysqli_error($db));

    if (mysqli_num_rows($res_noMyKad) > 0) {
      echo '
         <script>alert("Maaf no MyKad sudah berdaftar..")</script>';
      
    }else{
      $query = "INSERT INTO users (nama, noMyKad, phone, gender, email, password, user_type)VALUES('$nama','$noMyKad','$phone','$gender','$email','$password','$user_type')";

      $result = mysqli_query($db,$query) or die(mysqli_error($db));
      echo '
        <script>alert("Pendaftaran guru berjaya!")</script>';
    }
}
?> 

<style>
  .error {
    color: #ff0000;
  }
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
                <center>DAFTAR GURU</center>
              </h4>
            </div>
            <div class="card-body">
              <form action="" method="POST">
                <div class="mb-3">
                  <label>NAMA <span class="error"> * </span>
                  </label>
                  <input type="text" name="nama" placeholder="Nama Penuh" class="form-control" required>
                </div>
                <br>
                <div class="mb-3">
                  <label>NO MYKAD <span class="error"> * </span>
                  </label>
                  <input type="text" name="noMyKad" placeholder="No MyKad" class="form-control" required>
                </div>
                <br>
                <div class="mb-3">
                  <label>NO TELEFON <span class="error">* </span>
                  </label>
                  <input type="text" name="phone" placeholder="No Telefon contoh: 012-3456789" class="form-control" required>
                </div>
                <br>
                <div class="mb-3">
                  <label> JANTINA <span class="error"> * </span>
                  </label>
                  <br>
                  <select name="gender" class="form-control">
                    <option>Sila Nyatakan Jantina...</option>
                    <option value="Lelaki">Lelaki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
                <br>
                <div class="mb-3">
                  <label>EMAIL <span class="error"> * </span>
                  </label>
                  <input type="email" name="email" placeholder="Contoh: Sofea123@gmail.com" class="form-control" pattern="+@gmail.com" required>
                </div>
                <br>
                <div class="mb-3">
                  <label>KATA LALUAN <span class="error"> * </span>
                  </label>
                  <input type="password" name="password" placeholder="Kata Laluan/No MyKad" class="form-control" required>
                </div>
                <br>
                <div class="mb-3">
                  <label>JENIS PENGGUNA <span class="error"></span>
                  </label>
                  <input type="text" name="user_type" value="Guru" class="form-control" readonly>
                </div>
                <br>
                <div class="mb-3">
                  <button type="submit" name="register" class="btn btn-primary">Simpan</button>
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
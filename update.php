<?php 

session_start();
include_once('config.php');

if ($_SESSION['usertype'] == 'Guru') {
  include('sidebar.php');
} else {
}

if(isset($_POST['update_users'])){

  $userID= mysqli_real_escape_string($conn, $_POST['user_id']);
  
  $namaU = $_POST['namaUsers'];
  $icU = $_POST['icUsers'];
  $phoneU = $_POST['noTelUsers'];
  $jantinaU = $_POST['jantinaUsers'];
  $emailU = $_POST['emailUsers'];
  

  $query = "UPDATE users SET nama='$namaU', noMyKad='$icU', phone='$phoneU' , gender='$jantinaU' , email='$emailU' WHERE id='$userID' ";

  $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: view.php");
        
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: index.php");
        exit(0);
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
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
    <title>Student Edit</title>
  </head>
  <body>
    <nav>
      <label class="logo">
        <img src="images/logo.png" width="50" height="40">&nbsp;&nbsp;&nbsp; <span class="text"> Selamat Datang <?= $_SESSION['nama']; ?> </span>
      </label>
    </nav>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>KEMASKINI AKAUN PENGGUNA </h4>
            </div>
            <div class="card-body"> <?php
                if(isset($_GET['id']))
                   {
                    $users_id = mysqli_real_escape_string($conn, $_GET['id']);
                    $query = "SELECT * FROM users WHERE id='$users_id' ";
                    $query_run = mysqli_query($conn, $query);

                    if(mysqli_num_rows($query_run) > 0)
                                
                    {
                    $usersRow = mysqli_fetch_array($query_run);

                    ?>
              <form action="" method="POST">
                <input type="hidden" name="user_id" value="<?= $usersRow['id']; ?>">
                <div class="mb-3">
                  <label>NAMA PENUH </label>
                  <input type="text" name="namaUsers" value="<?=$usersRow['nama'];?>" class="form-control">
                </div>
                <div class="mb-3">
                  <label>NO MYKAD</label>
                  <input type="text" name="icUsers" value="<?=$usersRow['noMyKad'];?>" class="form-control">
                </div>
                <div class="mb-3">
                  <label>NO TELEFON </label>
                  <input type="text" name="noTelUsers" value="<?=$usersRow['phone'];?>" class="form-control">
                </div>
                <div class="mb-3">
                  <label>JANTINA</label>
                  <input type="text" name="jantinaUsers" value="<?=$usersRow['gender'];?>" class="form-control">
                </div>
                <div class="mb-3">
                  <label>EMAIL</label>
                  <input type="text" name="emailUsers" value="<?=$usersRow['email'];?>" class="form-control">
                </div>
                <div class="mb-3">
                  <button type="submit" name="update_users" class="btn btn-primary"> Simpan </button>
                </div>
              </form> 
                <?php
                    }
                    else
                    {
                        echo "
                            <h4>No Such Id Found</h4>";

                   }
                   }
                ?> </div>
          </div>
        </div>
      </div>
  </body>
</html>
<?php

session_start();

$host="localhost";
$user="root";
$password="";
$db="dbnurhaura";

$data=mysqli_connect($host,$user,$password,$db);

if($data==false)
{
   die("Connection error..");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
   $noMyKad = $_POST["noMyKad"];
   $password = $_POST["password"];
   $password = sha1($password);
   ini_set('display_errors','Off');
   $sql="select * from users where noMyKad= '$noMyKad' AND password='$password'";

   $result=mysqli_query($data,$sql);

   $row=mysqli_fetch_array($result);

   $_SESSION['icMurid'] = $row["noMyKad"];
   $_SESSION['nama'] = $row["nama"];
   $_SESSION['usertype'] = $row["user_type"];

   
   if (mysqli_num_rows($result) > 0) 
   {

    if ($row["user_type"]=="Guru") {
        header("location:home.php");
    }
    else
    {
        header("location:registration_form.php");
    }
      
   }
   else
   {
  
    echo'
     <script>alert("Maaf No MyKad dan KataLaluan anda tidak tepat...")</script>';
   }

}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap2.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="css/styleLogin.css">
    <title>Sistem Tadika Nur Haura</title>
  </head>
  <body>
    <form action="#" method="post">
      <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('images/logo.png');"></div>
        <div class="contents order-2 order-md-1">
          <div class="container">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-7">
                <h3>
                  <strong>SISTEM TADIKA NUR HAURA</strong>
                </h3>
                <br>
                <br>
                <div class="form-group first">
                  <label for="text"> NO MYKAD</label>
                  <input type="text" name="noMyKad" class="form-control" placeholder="990719-07-9098" id="username">
                </div>
                <br>
                <div class="form-group last mb-3">
                  <label for="password">KATA LALUAN</label>
                  <input type="password" class="form-control" placeholder="No MyKad / Kata Laluan" name="password" id="password">
                </div>
                <br>
                <br>
                <input type="submit" value="LOGIN" name="submit" class="btn btn-block btn-primary">
      
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
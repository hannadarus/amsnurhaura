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
    <script type="text/javascript" src="barqrcode/jquery.js"></script>
    <script type="text/javascript" src="barqrcode/jsbarcode.all.min.js"></script>
    <script type="text/javascript" src="barqrcode/jquery.qrcode.js"></script>
    <script type="text/javascript" src="barqrcode/qrcode.js"></script>

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
           .text{
            color: white; 
            font-size: 15px;
             
           }    
   </style>  
    <title>Maklumat Pelajar</title>
</head>
<body >

<nav>
  <label class="logo"> <img src="images/logo.png" width="50" height="40">&nbsp;&nbsp;&nbsp;
      <span class="text"> Selamat Datang <?= $_SESSION['nama']; ?> </span>
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
                        <h4>MAKLUMAT PELAJAR</h4><br>
                        <form action="" method="GET">
                           <input type="text" name="cariPengguna" placeholder="Cari Pengguna" size="40"  style="border-radius: 3px;"  >&nbsp;&nbsp;&nbsp;&nbsp;
                          <button type="submit" name="submit" class="btn btn-primary">Cari</button>&nbsp;&nbsp;
                           <button type="submit" name="submit" class="btn btn-primary"><a href="studentdetails.php" style="color: white; text-decoration: none;">Set Semula Carian</button>
                         </form>
                          <div class="mb-3">
                           <a href="exportTable.php" class="btn btn-info float-right">Cetak PDF</a>
                         </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NO MYKAD</th>
                                    <th>NAMA</th>
                                    <th>QR KOD</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                if (isset($_GET['cariPengguna']))
                                    {
                                        $filtervalues = $_GET['cariPengguna'];
                                        $query = "SELECT * FROM register_form WHERE namaMurid = '$filtervalues'";
                                        $query_run = mysqli_query($conn,$query);
                                    }else{

                                    $query = "SELECT * FROM register_form";
                                    $query_run = mysqli_query($conn, $query);
                                }

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $student)
                                        {
                                            ?>
                                            <tr>
                                                <td width="30"><?= $student['id']; ?></td>
                                                <td width="90"><?= $student['icMurid']; ?></td>
                                                <td width="130"><?= $student['namaMurid']; ?></td>
                                                <td width="120">     
                                                    <div id="qrCode2<?= $student['icMurid']?>" style="height: 85px; width: 70px; margin:0 auto;"></div>
                                                    <script type="text/javascript">
                                                        $('#qrCode2<?= $student['icMurid']?>').qrcode({
                                                            text: '<?php echo $student['icMurid']; ?>',
                                                            width: 80,
                                                            height: 80
                                                        })
                                                    </script>
                                                </td>
                                                <td width="100">
                                                    <a href="student_edit.php?id=<?= $student['id']; ?>" class="btn btn-success btn-sm">Kemaskini</a>
                                                    
                                                    <form action="studentCode.php" method="POST" class="d-inline"  onsubmit="return confirm('Anda mahu data ini dipadam?')" >
                                                        <button type="submit" name="delete_student" value="<?=$student['id'];?>" class="btn btn-danger btn-sm">Padam</button>

                                                    </form>
                                                </td>
                                            </tr>
                                    <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
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
<?php
session_start();


if ($_SESSION['usertype'] == 'Guru') {
  include('sidebar.php');
} else {
  include('sidebar2.php');
}


?>
 <style >
    
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

                    <div class="container">
                    <nav class="navbar navbar-inverse">
                    <div class="container-fluid">
                        <div class="navbar-header">
                        <a class="navbar-brand" href="#">TADIKA NUR HAURA: PENGIMBAS KEHADIRAN  </a>
                        </div>
                    </div>
                    </nav>
                        <div class="row">
                            <div class="col-md-6">
                                <video id="preview" width="100%"></video>

                                <?php
                                if (isset($_SESSION["error"])) {
                                    echo "
                                    <div class ='alert alert-danger'>
                                    <h4>ERROR</h4>
                                    " .
                                        $_SESSION["error"] .
                                        "
                                    </div>
                                    ";
                                }
                                unset($_SESSION["error"]);
                                ?>

                                <?php
                                if (isset($_SESSION["success"])) {
                                    echo "
                                    <div class ='alert alert-success' style='background:#143053; color:white'>
                                    <h4>SUCCESS</h4>
                                    " .
                                        $_SESSION["success"] .
                                        "
                                    </div>
                                    ";
                                }
                                unset($_SESSION["success"]);
                                ?>
                                
                            </div>
                            
                            <div class="col-md-6">
                            <form action="insert1.php" method="post" class="form-horizontal">
                                 <label>IMBAS QR KOD</label>
                                <input type="text" name="text" id="text" readonly placeholder="Butiran QR Kod" class="form-control">
                            </form>
                              <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>NO MYKAD PELAJAR</td>
                                        <td>MASA MASUK</td>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $server = "localhost";
                                    $username="root";
                                    $password="";
                                    $dbname="dbnurhaura";
                                
                                    $conn = new mysqli($server,$username,$password,$dbname);
                                
                                    if($conn->connect_error){
                                        die("Connection failed" .$conn->connect_error);
                                    }
                                       $sql ="SELECT id,studentic,timein FROM table_attendance WHERE DATE(TIMEIN)=CURDATE()";
                                       $query = $conn->query($sql);
                                       while ($row = $query->fetch_assoc()){
                                    ?>
                                        <tr>
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['studentic'];?></td>
                                            <td><?php echo $row['timein'];?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                              </table>
                            </div>
                        </div>
                    </div>

                    <script>
                       let scanner = new Instascan.Scanner({ video: document.getElementById('preview')});
                       Instascan.Camera.getCameras().then(function(cameras){
                           if(cameras.length > 0 ){
                               scanner.start(cameras[0]);
                           } else{
                               alert('No cameras found');
                           }

                       }).catch(function(e) {
                           console.error(e);
                       });

                       scanner.addListener('scan',function(c){
                           document.getElementById('text').value=c;
                           document.forms[0].submit();
                       });
                    </script>
                               
                                </div>
                                <div class="card-body">

                                    

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
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
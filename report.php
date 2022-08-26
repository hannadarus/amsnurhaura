<?php
session_start();
require 'config.php';

if ($_SESSION['usertype'] == 'Guru') {
  include('sidebar.php');
} else {
  include('sidebar2.php');
}

function count_week_days(
    $date_from,
    $date_to,
    $__holidays_between = [],
    $__weekend_days = [5, 6]
) {
    if ($date_to >= $date_from) {
        //date_diff syntax
        //value date_diff
        //cari perbezaan hari

        $__date_from = date_create($date_from);
        $__date_to = date_create($date_to);
        $diff = date_diff($__date_to, $__date_from);
        $total_days_count = $diff->format("%a");
    } else {
        $total_days_count = 0;
    }

    $date_from = date("d.m.Y", strtotime($date_from));
    $__date_from = strtotime($date_from);

    //cari total weekdays dalam seminggu

    $full_weeks_count = floor($total_days_count / 7);

    $weekend_days_count = $full_weeks_count * count($__weekend_days);

    $days_left_uncovered = $total_days_count - $full_weeks_count * 7;
    for ($i = 0; $i < $days_left_uncovered; $i++) {
        $date_to_check = $i ? strtotime("+{$i} day", $__date_from) : $__date_from;
        if (in_array(date("N", $date_to_check), $__weekend_days)) {
            $weekend_days_count++;
        }
    }

    // calculation untuk cari total weekdays count
    $week_days_count = $total_days_count - $weekend_days_count - count($__holidays_between);
    return $week_days_count;
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

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
                        <h4>TADIKA NUR HAURA: LAPORAN KEHADIRAN PELAJAR</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>TARIKH MULA</label>
                                        <input type="date" name="from_date" value="<?php if(isset($_GET['from_date'])){ echo $_GET['from_date']; } ?>" class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>TARIKH AKHIR</label>
                                        <input type="date" name="to_date" value="<?php if(isset($_GET['to_date'])){ echo $_GET['to_date']; } ?>" class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                       <br>
                                      
                                      <button type="submit" class="btn btn-info float-right">Cari</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card mt-2">
                    <div class="card-body">
                        <table class="table table-borderd">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NAMA</th>
                                    <th>NO MYKAD</th>
                                    <th>JUMLAH (%)</th>
                                </tr>
                            </thead>
                            <tbody>

                            <div class="col-md-3">
                                <a href="export.php"><button type="button" class="btn btn-primary">Hantar laporan</button></a>
                            </div>
                            <br>
                                                     
                           <?php
                            $conn = mysqli_connect(
                                "localhost",
                                "root",
                                "",
                                "dbnurhaura"
                            );

                            if (
                                isset($_GET["from_date"]) &&
                                isset($_GET["to_date"])
                            ) {
                                $from_date = $_GET["from_date"];
                                $to_date = $_GET["to_date"];

                                // this if statement akan membuatkan the calculation lebih tepat kerana
                                // cikgu hanya boleh pilih tarikh report sehingga ke today's date sahaja
                                // kalau pilih lebih daripada tu, calculation masih tetap sama
                                // sebab kita allow untuk pilih sehingga current days shj
                                if ($to_date > date("Y-m-d")) {
                                    $to_date = date("Y-m-d");
                                }
                                $_SESSION["to_date"] = $to_date;
                                $_SESSION["from_date"] = $from_date;
                                // tukar format dari d-m-Y ke Y-m-d sebab from date & to date menggunakan
                                // format Y-m-d
                                $date1 = date("Y-m-d", strtotime($from_date));
                                $date2 = date("Y-m-d", strtotime($to_date));
                                $total_days = count_week_days($date1, $date2);
                                $total_week = $total_days + 1;

                                $query = "SELECT register_form.*, COUNT(table_attendance.studentic) as total FROM register_form LEFT JOIN table_attendance ON register_form.icMurid = table_attendance.studentic AND DATE(table_attendance.timein) BETWEEN '$from_date' AND '$to_date' GROUP BY register_form.icMurid";
                                $query_run = mysqli_query($conn, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $row) { ?>
                                            <tr>
                                                <td><?= $row["id"] ?></td>
                                                <td><?= $row[
                                                    "namaMurid"
                                                ] ?></td>
                                                <td><?= $row["icMurid"] ?></td>
                                                <?php //hadir/total_week*100
                                                $percent =
                                                    ($row["total"] /
                                                        $total_week) *
                                                    100;
                                        //calculation to get the total percentage for number of days present
                                        ?>
                                                <td><?= floor($percent) .
                                                    "%" ?></td>
                                            </tr>
                                            <?php }
                                } else {
                                    echo "No Record Found";
                                }
                            }
                            ?>          
           
                            </tbody>
                        </table>

                        
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
<?php
    session_start();
    require 'config.php';
    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script type="text/javascript" src="barqrcode/jquery.js"></script>
    <script type="text/javascript" src="barqrcode/jsbarcode.all.min.js"></script>
    <script type="text/javascript" src="barqrcode/jquery.qrcode.js"></script>
    <script type="text/javascript" src="barqrcode/qrcode.js"></script>
    <title>MAKLUMAT PELAJAR</title>

</head>
<body>
    <!-- tengok mt4 -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                        <h4>MAKLUMAT PELAJAR</h4>
					<table class="table table-bordered table-striped" id="export" width="100%" cellspacing="0">
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
                                    $query = "SELECT * FROM register_form";
                                    $query_run = mysqli_query($conn, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $student)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $student['id']; ?></td>
                                                <td><?= $student['icMurid']; ?></td>
                                                <td><?= $student['namaMurid']; ?></td>
                                                <td>
                                                    <div id="qrCode2<?= $student['icMurid']?>" style="height: 150px; width: 150px; margin:0 auto;"></div>
                                                    <script type="text/javascript">
                                                        $('#qrCode2<?= $student['icMurid']?>').qrcode({
                                                            text: '<?php echo $student['icMurid']; ?>',
                                                            width: 150,
                                                            height: 150
                                                        })
                                                    </script>
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

                    <div class="text-center">
					   <a href="studentDetails_print.php" class="btn btn-primary ">CETAK</a>
				    </div>
             </div>
        </div>
    </div>	
</body>
</html>
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Schedule</title>
        <style type="text/css">
        .error {
            color: #ff0000;
        }
        </style>
    </head>

    <body>
        <div class="container mt-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>JADUAL</h4> 
                            </div>
                            <div class="card-body">
                                  <?php
                                    if(isset($_GET['id']))
                                    {
                                        $schedule_id = mysqli_real_escape_string($conn, $_GET['id']);
                                        $query = "SELECT * FROM schedule WHERE id='$schedule_id' ";
                                        $query_run = mysqli_query($conn, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                            
                                    {
                                        $schedule = mysqli_fetch_array($query_run);

                                ?>
                                <form action="ScheduleCode.php" method="POST">
                                    <input type="hidden" name="schedule_id" value="<?= $schedule['id']; ?>">
                                    <div class="mb-3">
                                        <label>Masa</label>
                                        <input type="time" name="masa" placeholder="Masukkan masa" value="<?=$schedule['masaJadual'];?>"class="form-control">
                                    </div><br>
                                    <div class="mb-3">
                                        <label>Rutin Harian</label>
                                        <input type="text" name="rutin" placeholder="Masukkan rutin harian" value="<?=$schedule['RutinHarian'];?>"class="form-control" >
                                    </div><br>
                                    <div class="mb-3">
                                        <label>Maklumat Rutin</label>
                                        <input type="text" name="info" placeholder="Masukkan maklumat rutin" value="<?=$schedule['maklumatRutin'];?>"class="form-control"> 
                                    </div><br>
                                    <div class="mb-3">
                                         <button type="submit" name="update_schedule" class="btn btn-primary">Simpan</button>
                                    </div>

                               </form>
                                <?php
                                }
                                else
                                 {
                                    echo "<h4>No Such Id Found</h4>";
                                 }
                                }
                                ?> 
                           </div>
                     </div>
                </div>
            </div>
         </div>
    </body>
</html>
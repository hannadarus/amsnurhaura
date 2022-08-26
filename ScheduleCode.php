<?php
session_start();
require 'config.php';

if(isset($_POST['update_schedule']))
    {

    $schedule_id = mysqli_real_escape_string($conn, $_POST['schedule_id']);
    $Masa = mysqli_real_escape_string($conn, $_POST['masa']);
    $Rutin = mysqli_real_escape_string($conn, $_POST['rutin']);
    $Info = mysqli_real_escape_string($conn, $_POST['info']);

    $query = "UPDATE schedule SET masaJadual='$Masa', RutinHarian='$Rutin', maklumatRutin='$Info' WHERE id='$schedule_id'";

    $query_run = mysqli_query($conn, $query);
        if($query_run)
        {
            $_SESSION['message'] = "Maklumat jadual berjaya ditukar";
            header("Location: home.php");
        }
        else
        {
            $_SESSION['message'] = "Maklumat jadual tidak berjaya ditukar";
            header("Location: home.php");
       }
}


if(isset($_POST['delete_schedule']))
{
    $schedule_id = mysqli_real_escape_string($conn, $_POST['delete_schedule']);

    $query = "DELETE FROM schedule WHERE id='$schedule_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Jadual berjaya dipadam";
        header("Location: home.php");
    
    }
    else
    {
        $_SESSION['message'] = "Tidak berjaya dipadam";
        header("Location: home.php");
        
    }
}
?> 

<?php
session_start();
require 'config.php';

if(isset($_POST['delete_schedule']))
{
    $user_id = mysqli_real_escape_string($conn, $_POST['delete_schedule']);

    $query = "DELETE FROM schedule WHERE id='$schedule_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Jadual berjaya dipadam";
        header("Location: ViewSchedule.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Tidak berjaya dipadam";
        header("Location: ViewSchedule.php");
        exit(0);
    }
}
?>
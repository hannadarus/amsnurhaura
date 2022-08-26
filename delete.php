<?php
session_start();
require 'config.php';

if(isset($_POST['delete_users']))
{
    $user_id = mysqli_real_escape_string($conn, $_POST['delete_users']);

    $query = "DELETE FROM users WHERE id='$user_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {

        $_SESSION['message'] = "Data berjaya dipadam";
        header("Location: view.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Maaf data tidak berjaya dipadam";
        header("Location: view.php");
        exit(0);
    }
}
?>
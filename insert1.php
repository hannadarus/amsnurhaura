<?php
session_start();
$server = "localhost";
$username = "root";
$password = "";
$dbname = "dbnurhaura";

$conn = new mysqli($server, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error);
}

if (isset($_POST["text"])) {
    $text = $_POST["text"];
    // $date = date('d-m-y h:i:s');

    $query = "SELECT studentic from table_attendance WHERE date(timein) = CURDATE() AND studentic = '$text'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_num_rows($result);

    // kalau attendance tidak discan lagi pada hari tersebut, bila scan qrcode tu dia akan record successfully.
    if ($row == 0) {
        $sql = "INSERT INTO table_attendance(studentic,timein) VALUES ('$text',NOW())";
        if ($conn->query($sql) === true) {
            $_SESSION["success"] = "Attendance is successfully recorded.";
        } else {
            $_SESSION["error"] = "Attendance is not recorded!";
        }
        // attendance hanya boleh record, sehari sekali sahaja, so kalau duplicate akan display this error
    } else {
        $_SESSION["error"] = "Attendance already recorded!";
    }
}
header("location: scan.php");
$conn->close();
?>
<?php
session_start();
require "config.php";

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
        $date_to_check = $i? strtotime("+{$i} day", $__date_from) : $__date_from;
        if (in_array(date("N", $date_to_check), $__weekend_days)) {
            $weekend_days_count++;
        }
    }

    // calculation untuk cari total weekdays count
    $week_days_count =
        $total_days_count - $weekend_days_count - count($__holidays_between);
    return $week_days_count;
}

$to_date = $_SESSION["to_date"];
$from_date = $_SESSION["from_date"];

$date1 = date("Y-m-d", strtotime($from_date));
$date2 = date("Y-m-d", strtotime($to_date));
$total_days = count_week_days($date1, $date2);
$total_week = $total_days + 1;

// ambil from date and to date
$query = "SELECT register_form.*, COUNT(table_attendance.studentic) as total FROM register_form LEFT JOIN table_attendance ON register_form.icMurid = table_attendance.studentic AND DATE(table_attendance.timein) BETWEEN '$from_date' AND '$to_date' GROUP BY register_form.icMurid";

$res = mysqli_query($conn, $query);

$html =
    "<table><tr><td>ID</td><td>IC Pelajar</td><td>Nama Pelajar</td><td>Jumlah (%)</td></tr>";

while ($row = mysqli_fetch_assoc($res)) {
    $percent = ($row["total"] / $total_week) * 100;
    $html .=
        "<tr><td>" .
        $row["id"] .
        "</td><td>" .
        $row["icMurid"] .
        "</td><td>" .
        $row["namaMurid"] .
        "</td><td>" .
        floor($percent) .
        "</td></tr>";
}
$html .= "</table>";
header("Content-Type:application/xls");
header("Content-Disposition:attachment;filename=attendance_report.xls");
echo $html;
?> 
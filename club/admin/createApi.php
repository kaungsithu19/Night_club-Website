<?php
require_once 'dbinfo.php';
$conn = new mysqli($host, $user, $pass, $database);

if ($conn->connect_error)
    die($conn->connect_error);

$theid = $_REQUEST['ieventid'];
$thename = $_REQUEST['ieventname'];
$thedate = $_REQUEST['idate'];
$thestart = $_REQUEST['istart'];
$theend = $_REQUEST['iend'];
$thecategory = $_REQUEST['icategory'];
$thefee = $_REQUEST['ifee'];
$themax = $_REQUEST['imax_cap'];
$theper = $_REQUEST['iper'];
$theartist = $_REQUEST['iartist_id'];
if ($stmt = $conn->prepare("INSERT INTO event(event_id, event_name, date, start_time ,end_time , category, fee, max_capacity, performance_detail, artist_id) VALUES (?,?,?,?,?,?,?,?,?,?)"))
{
    $stmt->bind_param("ssssssiiss",$theid, $thename, $thedate, $thestart, $theend, $thecategory, $thefee, $themax, $theper, $theartist);
    $stmt->execute();
    $response = "<br>Rows Inserted:" . $stmt->affected_rows;
    $response = "<br>Successfully booked!";
    echo json_encode($response);
    $stmt->close();
} else {
    echo json_encode("Something went wrong!");
}
$conn->close();
?>
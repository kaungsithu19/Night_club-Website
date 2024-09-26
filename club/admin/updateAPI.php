
<?php
require_once 'dbinfo.php';
$conn = new mysqli($host, $user, $pass, $database);
/* check connection */
if ($conn->connect_error)
    die($conn->connect_error);
parse_str(file_get_contents('php://input'), $_PUT);
$eventname = $_PUT['eventname'];
$eventID = $_PUT['eventID'];
$artistname = $_PUT['artistname'];
$date=$_PUT['date'];
$stime = $_PUT['start_time'];
$etime = $_PUT['end_time'];
$eventcat = $_PUT['eventcat'];
$fee = $_PUT['fee'];
$capacity = $_PUT['capacity'];
$detail= $_PUT['detail'];
$query = "UPDATE lucia_club.event AS e INNER JOIN artist AS a ON e.artist_id = a.artist_id
            SET e.event_name='$eventname', a.artist_name='$artistname', e.date='$date', e.start_time='$stime', e.end_time='$etime', e.category='$eventcat', e.fee='$fee', e.max_capacity='$capacity', e.performance_detail='$detail'
            WHERE e.event_id='$eventID';";
$result = $conn -> query($query);

if (!$result) {
    die("Error updating record: " . mysqli_error($conn));
}
else
echo "success";
$conn->close();
?>

<?php
    require_once 'dbinfo.php';
    $conn = new mysqli($host, $user, $pass, $database);
if($conn->connect_error) 
die($conn->connect_error);

$query = "SELECT event_name, artist.artist_name, date, start_time, end_time, category, fee, max_capacity, performance_detail FROM lucia_club.event INNER JOIN artist ON event.artist_id = artist.artist_id WHERE date BETWEEN DATE_SUB(NOW(), INTERVAL 6 MONTH) AND DATE_SUB(CURDATE(), INTERVAL 1 DAY);";
//echo $query . "<br>";
$result = $conn->query($query);
$all_rows = mysqli_fetch_all($result, MYSQLI_NUM);
$json_string = json_encode($all_rows, JSON_UNESCAPED_UNICODE);
//echo "<br>";
echo $json_string;

$conn->close();
?>
<?php
    require_once 'dbinfo.php';
    $conn = new mysqli($host, $user, $pass, $database);
if($conn->connect_error) 
die($conn->connect_error);

$query = "SELECT * FROM lucia_club.event INNER JOIN artist ON event.artist_id = artist.artist_id WHERE date BETWEEN NOW() AND DATE_ADD(NOW(), INTERVAL 6 MONTH) OR DATE(date) = CURDATE();";
//echo $query . "<br>";
$result = $conn->query($query);
$all_rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
$json_string = json_encode($all_rows, JSON_UNESCAPED_UNICODE);
//echo "<br>";
echo $json_string;

$conn->close();
?>
<?php
require_once 'dbinfo.php';
$conn = new mysqli($host,$user,$pass,$database);
/*check connection */
if($conn->connect_error)    
die($conn->connect_error);

    
$query = "SELECT * FROM artist;";
//echo $query."<br>";
$result = $conn->query($query);
$all_rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
$json_string = json_encode($all_rows, JSON_UNESCAPED_UNICODE);
// echo "<br>";
echo $json_string;
/* close connection */
$conn->close();
?>
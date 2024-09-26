<?php
    require_once 'dbinfo.php';
    $conn = new mysqli($host, $user, $pass, $database);
/* check connection */
if ($conn->connect_error)
    die($conn->connect_error);
    parse_str(file_get_contents('php://input'), $_PUT); // Convoluted, but allows us to access "PUT array"
    $id = $_PUT['edit_id'];

    $query = "SELECT *  FROM lucia_club.event INNER JOIN artist ON event.artist_id = artist.artist_id WHERE event_id=$id";

$result = $conn->query($query);
//echo $query . "<br>";
$all_rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
$json_string = json_encode($all_rows, JSON_UNESCAPED_UNICODE);
//echo "<br>";
echo $json_string;

$conn->close();

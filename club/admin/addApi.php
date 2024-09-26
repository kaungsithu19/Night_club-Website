<?php
require_once 'dbinfo.php';
$conn = new mysqli($host, $user, $pass, $database);

if ($conn->connect_error)
    die($conn->connect_error);
$theid = $_REQUEST['iid'];
$thename = $_REQUEST['iname'];
$thetype = $_REQUEST['itype'];
$thebio = $_REQUEST['ibio'];
$thefb = $_REQUEST['ifb'];
$thetw = $_REQUEST['itw'];
$theinsta = $_REQUEST['iinsta'];
$theimg = $_REQUEST['iimg'];
if ($stmt = $conn->prepare("INSERT INTO artist(artist_id, artist_name ,s_or_b , bio, uname_fb, uname_tw, uname_insta, pr_image) VALUES (?,?,?,?,?,?,?,?)"))
{
    $stmt->bind_param("ssssssss", $theid, $thename, $thetype, $thebio, $thefb, $thetw, $theinsta, $theimg);
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
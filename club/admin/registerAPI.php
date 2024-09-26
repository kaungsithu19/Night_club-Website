<?php
require_once 'dbinfo.php';
$conn = new mysqli($host, $user, $pass, $database);

$thefname = $_POST['ifname'];
$theuname = $_POST['iuname'];
$theemail = $_POST['iemail'];
$theiph = $_POST['iph'];
$thepass = $_POST['ipass'];
$thecpass = $_POST['icpass'];
$thepho = $_POST['ipho'];

if ($stmt = $conn->prepare("INSERT INTO lucia_club.user_info VALUES (?, ?, ?, ?, ?, ?, ?)")) {
    $stmt->bind_param("sssssss", $theuname, $thefname, $theemail, $theiph, $thepass, $thecpass, $thepho);
    if ($stmt->execute()) {
        echo json_encode("Rows inserted: " . $stmt->affected_rows);
    } else {
        echo json_encode("Error: " . $stmt->error);
    }
    $stmt->close();
} else {
    echo json_encode("Error: Something went wrong!");
}

/* close connection */
$conn->close();
?>

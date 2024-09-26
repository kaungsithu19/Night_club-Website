<?php
    session_start();
?>
<?php
$theemail = $_POST['email'];
$thepass = $_POST['pass'];

require_once 'dbinfo.php';
$conn = new mysqli($host, $user, $pass, $database);
if($conn->connect_error) 
die($conn->connect_error);

$query = <<<loginSQL
SELECT * FROM user_info WHERE email='$theemail' AND pass='$thepass';
loginSQL;
$result = $conn->query($query);
$rows = $result->num_rows;

if ($rows != 0) {
    $r = $result->fetch_array(MYSQLI_ASSOC);
    $_SESSION["username"] = $r["user_name"];
    $_SESSION["email"] = $r["email"];
    $_SESSION["photo"] = $r["photo"];
    $result= array("status" => 1);
    echo json_encode($result);
} else
    {
        $result= array("status" => 0);
        echo json_encode($result);
    }
?>
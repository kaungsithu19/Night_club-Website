<?php
    session_start();
?>
<<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e34dae2732.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  	<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
	<link rel="stylesheet" href="dashboard.css">
<style>
        body {
            overflow-x: hidden;
        }
    </style>

</head>

<body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<nav class="navbar navbar-expand-lg navbar-light fixed-top">
		<div class="container">
			<a class="navbar-brand" href="../lucia.php"><span class='span1'>LU<span class="span2">CIA. </span></span></a> 
            <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="addArtist.php"><i class="fas fa-user"></i><span class="text-white">Add Artist</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="editEvent.php"><i class="fas fa-edit"></i><span class="text-white">Edit Event</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="addEvent.php"><i class="far fa-calendar-alt"></i><span class="text-white">Add Events</span></a>
					</li>	
                    <li class="nav-item">
						<a class="nav-link" href="register.php"><i class="far fa-calendar-alt"></i><span class="text-white">Add Admin</span></a>
					</li>				
                    <?php
                        if (isset($_SESSION["username"])) {
                        $name = $_SESSION["username"];
                        echo <<<icon
                            <a href="http://localhost/club/admin/admindashboard.php" class="btn btn-warning me-2 nav-item login" ><i class="fas fa-sign-in-alt"></i> $name</a>
                            icon;
                        } else {
                            echo <<<login
                            <a href="loginform.php" class="btn btn-warning me-2 nav-item login" ><i class="fas fa-sign-in-alt"></i> Admin Login</a>
                            <a href="loginform.php" class="btn btn-warning me-2 nav-item sign__up"><i class="fa-solid fa-user-plus"></i> Sign up</a>
                            login;
                        }
                    ?>
				</ul>
			</div>
		</div>
	</nav>
	<?php
		if (isset($_SESSION["username"])) {
    		$name = $_SESSION["username"];
    		$email = $_SESSION["email"];
    		//$profile=$_SESSION["photo"];
		} else {
  			header('location:http://localhost/club/loginform.php');
		}
	?>
	<main class="">
            <div class=''>
<?php

if (isset($_SESSION["username"])) {
    $name = $_SESSION["username"];
    $email = $_SESSION["email"];
    $profile=$_SESSION["photo"];
    echo <<<profile
    <div class="row d-flex justify-content-center align-items-center mt-5">
        <div class="dash col-12" style="overflow-x: hidden;">
            <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">Account Information</h2>
                <div class="d-flex justify-content-center align-items-center mb-5">
                    <img src="$profile" height="200px" width="230px" class="rounded-circle" alt="Avatar Logo">
                </div>
                <div>
                    <h4 class="text-center text-uppercase mt-2">$name</h4>
                    <h6 class="text-center mt-2 mb-5">$email</h6>
                </div>
                <div class="d-flex justify-content-center mb-5">
                    <a type="button" href="http://localhost/club/loginform.php" class="btn btn-outline-light" style="margin-left:10px;" id="logoutButton">Log Out</a>
                </div>
            </div>
        </div>
    </div>
profile;
} else {
    header('location:http://localhost/club/loginform.php');
}

?>
</div>
            </main>
</body>
</html>




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
			height: auto;
			color: #f0f0f0;
			
        }
		.important {
			color: red;
		}
		h2 {
			margin-top:100px;
			margin-bottom :50px;
		}
		.main-section {
    		position: relative;
		
		}	

		.form {
    		position: relative; 
    		top: 0;
    		left: 0;
    		transform: none;
    		padding: 80px;
    		z-index: 2;
    		width: auto;
    		max-width: 120em;
    		margin: 0 auto;
			background-image: url(http://localhost/club/img/backG5.jpg) ;
  			height: auto;
  			background-position: center;
  			background-repeat: no-repeat;
  			background-size: cover;
		}
    </style>

</head>

<body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<nav class="navbar navbar-expand-lg navbar-light  fixed-top">
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
	<section class="main-section">
        <div class="form">
    		<h2 class="text-center mt-4">Add a New Artist</h2>

        	<div class="row mb-3">
            	<div class="col-12  col-md-6">
                	<label for="artistID" class="form-label">Artist ID<span class="important">*</span></label>
                	<input type="text" class="form-control" id="id" placeholder="Enter artist id" required><br>
            	</div>
            	<div class="col-12 col-md-6">
                	<label for="artistName" class="form-label">Artist Name<span class="important">*</span></label>
                	<input type="text" class="form-control" id="name" placeholder="Enter artist name" required><br>
            	</div>
        	</div>

			<div class="row mb-3">
				<div class="col-12 col-md-6">
                	<label for="type" class="form-label">Type<span class="important">*</span> (Solo or Band) </label>
					<input type="text" class="form-control" id="type" placeholder ="Enter type" required><br>
            	</div>
				<div class="col-12 col-md-6">
                	<label for="bio" class="form-label">Biography<span class="important">*</span></label>
					<input type="text" class="form-control" id="bio" placeholder ="Enter artist biography" required><br>
            	</div>
			</div>

            <div class="row mb-3">
				<div class="col-12 col-md-4">
                	<label for="fbname" class="form-label">Facebook Username<span class="important">*</span></label>
					<input type="text" class="form-control" id="fb" placeholder ="Pick facebook username" required><br>
            	</div>
				<div class="col-12 col-md-4">
                	<label for="twname" class="form-label">Twitter Username<span class="important">*</span></label>
					<input type="text" class="form-control" id="tw" placeholder ="Enter twitter username" required><br>
            	</div>
				<div class="col-12 col-md-4">
                	<label for="instaname" class="form-label">Instagram Username<span class="important">*</span></label>
					<input type="text" class="form-control" id="insta" placeholder ="Enter instagram username" required><br>
				</div>
            </div>

			<div class="mb-3">
                <label for="img" class="form-label">Artist Image<span class="important">*</span></label>
				<input type="text" class="form-control" id="img" placeholder ="Enter artist image" required><br>
            </div>
			<div class="row">
				<div class="col-6 d-flex justify-content-start">
					<a href="admindashboard.php" class="see_more btn btn-primary">< Back to Dashboard</a>
				</div>

				<div class="col-6 d-flex justify-content-end">
					<input type="button" class="btn btn-primary" id="add" value="Add">
				</div>
			</div>
			 
    	</div>
		
	</section>
</body>
<script>
	
	$(document).ready(function(){

		$('#add').click(function(){

var id = $('#id').val();
var name = $('#name').val();
var type = $('#type').val();
var bio = $('#bio').val();
var fb = $('#fb').val();
var tw = $('#tw').val();
var insta = $('#insta').val();
var img = $('#img').val();
if (id === "" || name === "" || type === "" || bio === "" || fb === "" || tw === "" || insta === "" || img === "" ) {
            alert("All fields are required");
            return;
        }

$.ajax({
method: "post",
url: "addApi.php",
data: { iid:id, iname:name, itype:type, ibio:bio, ifb:fb, itw:tw, iinsta:insta, iimg:img}
})
.done(function( msg ) {
	var retObj=JSON.parse(msg);
	$('#results').html(retObj);
	alert("Successfully added");
});
});
	});
	</script>
	</body>

</html>
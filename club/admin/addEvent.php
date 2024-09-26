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
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({ minDate: 0, maxDate: "+6M" });
  } );
  </script>
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
			background-image: url(http://localhost/club/img/backG9.jpg) ;
  			height: auto;
  			background-position: center;
  			background-repeat: no-repeat;
  			background-size: cover;
  			position: relative;
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
	<section class="main-section">
        <div class="form">
    		<h2 class="text-center mt-4">Create a New Event</h2>

        	<div class="row mb-3">
            	<div class="col-12  col-md-6">
                	<label for="eventDate" class="form-label">Event ID<span class="important">*</span></label>
                	<input type="number" class="form-control" id="e_id" placeholder="Enter event id" required><br>
            	</div>
            	<div class="col-12 col-md-6">
                	<label for="eventDescription" class="form-label">Event Name <span class="important">*</span></label>
                	<input type="text" class="form-control" id="e_name" placeholder="Enter event name" required><br>
            	</div>
        	</div>

            <div class="row mb-3">
				<div class="col-12 col-md-4">
                	<label for="eventName" class="form-label">Event Date <span class="important">*</span></label>
					<input type="text" class="form-control" id="datepicker" placeholder ="Pick a date" required><br>
            	</div>
				<div class="col-12 col-md-4">
                	<label for="eventDate" class="form-label">Event Start-time<span class="important">*</span></label>
					<input type="time" class="form-control" id="start" placeholder ="Enter start-time" required><br>
            	</div>
				<div class="col-12 col-md-4">
                	<label for="eventDescription" class="form-label">Event End-time<span class="important">*</span></label>
					<input type="time" class="form-control" id="end" placeholder ="Enter end-time" required><br>
				</div>
            </div>

			<div class="mb-3">
                <label for="eventDescription" class="form-label">Event Category <span class="important">*</span>(Music, Poetry or Comedy)</label>
				<input type="text" class="form-control" id="category" placeholder ="Enter category type" required><br>
            </div>

			<div class="row mb-3">
				<div class="col-12 col-md-6">
                	<label for="eventDescription" class="form-label">Fee<span class="important">*</span></label>
					<input type="number" class="form-control" id="fee" placeholder ="Enter fee" required><br>
            	</div>
				<div class="col-12 col-md-6">
                	<label for="eventDescription" class="form-label">Event Max-Capacity<span class="important">*</span></label>
					<input type="number" class="form-control" id="max_cap" placeholder ="Enter max-capacity" required><br>
            	</div>
			</div>

			<div class=" mb-3">
                <label for="eventDescription" class="form-label">Performance detail<span class="important">*</span></label>
				<input type="text" class="form-control" id="per" placeholder ="Enter performance-detail" required><br>
            </div>

			<div class="mb-3">
                <label for="eventDescription" class="form-label">Artist ID<span class="important">*</span></label>
				<input type="text" class="form-control" id="artist_id" placeholder ="Enter the artist ID" required><br>
            </div>
			<div class="row">
				<div class="col-6 d-flex justify-content-start">
					<a href="admindashboard.php" class="see_more btn btn-primary">< Back to Dashboard</a>
					
				</div>

				<div class="col-6 d-flex justify-content-end">
					<input type="button" class="btn btn-primary" id="book" value="Book">
				</div>
			</div>
            <article id="results"></article>
			
    	</div>
		
	</section>
</body>
<script>
	$(document).ready(function(){

	$('#book').click(function(){
	var eventid = $('#e_id').val();
	var eventname = $('#e_name').val();
	var dateTypeVar = $('#datepicker').datepicker('getDate');
	var date= $.datepicker.formatDate('yy-mm-dd', dateTypeVar);
	var start = $('#start').val();
	var end = $('#end').val();
	var category = $('#category').val();
	var fee = $('#fee').val();
	var max_cap = $('#max_cap').val();
	var per = $('#per').val();
	var artist_id = $('#artist_id').val();
	if (eventid === "" || eventname === "" || date === "" || start === "" || end === "" || category === "" || fee === "" || max_cap === "" || per === "" || artist_id === "") {
            alert("All fields are required");
            return;
        }
	$.ajax({
	method: "post",
	url: "createApi.php",
	data: { ieventid:eventid, ieventname:eventname, idate:date, istart:start, iend:end, icategory:category, ifee:fee, imax_cap:max_cap, iper:per, iartist_id:artist_id}
	})
	.done(function( msg ) {
	var retObj=JSON.parse(msg);
	$('#results').html(retObj);
	alert("Successfully booked");
	});
	});
	});
	</script>
</html>
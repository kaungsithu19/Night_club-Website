<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucia Club</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>

    <script src="https://kit.fontawesome.com/e34dae2732.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link href="lucia.css" rel="stylesheet">

</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg navbar-light  fixed-top">
		<div class="container">
			<a class="navbar-brand" href="lucia.php"><span class='span1'>LU<span class="span2">CIA. </span></span></a> 
            <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
					<li class="nav-item ">
						<a class="nav-link " href="lucia.php#home"><i class="bi bi-house text-white"></i><span class="text-white">Home</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="lucia.php#event"><i class="bi bi-calendar-event text-white"></i><span class="text-white">Event</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="lucia.php#artist"><i class="bi bi-file-text text-white"></i><span class="text-white">Artist</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="lucia.php#contact"><i class="bi bi-person-lines-fill text-white"></i><span class="text-white">Contact</span></a>
					</li>
					<li class="nav-item login">
						<a href="loginform.php" class="" ><i class="fas fa-sign-in-alt"></i>Admin Login</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

    <section class="events section-padding" id="event">
		<div class='container'>
			<div class="col-md-12">
    			<div class='row' id='result'>
					<div class="section-header text-center pb-5">
						<h2>Previous Event</h2>
                        <p>Review Event for a Musical Extravaganza!</p>
						<div class="outter-wrapper">
						<div class="table-wrapper">
        				<table class='table table-striped table-secondary display' id='example' style="width:100%"></table><br><br><br><br>
						</div>
						</div>
						Back to Upcoming Event ! <br>
						<i class="fa-solid fa-hand-point-right fa-beat-fade hand"></i>
						<a href="lucia.php#event" class="btn btn-warning p_event">Upcoming Events</a> 
						<i class="fa-solid fa-hand-point-left fa-beat-fade hand"></i> 
					</div>			
				</div>
    		</div>
		</div>
	</section>
</body>
    <script>
        $(document).ready(function(){
    $.ajax({
        method: "POST",
        url: "readPreviousAPI.php",
        //data: { upcoming:1 }
    })
    .done(function( msg ) {
       let retObj=JSON.parse(msg);
       console.log(retObj);
       new DataTable('#example', {
        columns: [
            { title: 'Event' },
			{ title: 'Artist' },
            { title: 'Date' },
            { title: 'Start Time' },
            { title: 'End Time' },
            { title: 'Category' },
            { title: 'Fee' },
            { title: 'Capacity' },
            { title: 'Description' },
        ],
        data: retObj
    });
    });
});
    </script>
</html>
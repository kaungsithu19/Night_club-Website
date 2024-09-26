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
			<a class="navbar-brand" href="#"><span class='span1'>LU<span class="span2">CIA. </span></span></a> 
            <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
					<li class="nav-item ">
						<a class="nav-link " href="#home"><i class="bi bi-house text-white"></i><span class="text-white">Home</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#event"><i class="bi bi-calendar-event text-white"></i><span class="text-white">Event</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#artist"><i class="bi bi-file-text text-white"></i><span class="text-white">Artist</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contact"><i class="bi bi-person-lines-fill text-white"></i><span class="text-white">Contact</span></a>
					</li>
					<li class="nav-item login">
						<a href="loginform.php" class="" ><i class="fas fa-sign-in-alt"></i>Admin Login</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

    <section id="home">
        <div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
		    <div class="carousel-indicators">
			    <button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators" type="button"></button>
		    </div>
		    <div class="carousel-inner inner-1">
			    <div class="carousel-item item-1 active">
				    <img alt="" class="d-block w-100" src="img/home_bg3.png">
				    <div class="carousel-caption">
					    <h5>Dive into a world of music, lights, and unforgettable memories</h5>
				    </div>
			    </div>
			    <div class="carousel-item item-1">
				    <img alt="" class="d-block w-100" src="img/home_bg2.png">
				    <div class="carousel-caption">
					    <h5>Experience the pulsating rhythms and electrifying energy</h5>
				    </div>
			    </div>
			    <div class="carousel-item item-1">
				    <img alt="" class="d-block w-100" src="img/backG3.jpg">
				    <div class="carousel-caption">
					    <h5>Step into the realm of luxury and excitement</h5>
				    </div>
			    </div>
		    </div>
			<button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators" type="button">
				<span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span>
			</button> 
			<button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button">
				<span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span>
			</button>
	    </div>
    </section>

	<section class="about section-padding" id="artist-solo">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12 col-12">
					<div class="about-img"><img alt="" class="img-fluid image" src="img/solo.png"></div>
				</div>
				<div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
					<div class="about-text">
						<h2>~Welcome to  <br>
                            the Solo-Artist Event!~</h2>
						<p>Elevate your event with the mesmerizing talent of our solo artist. With a soulful voice and captivating presence, they'll deliver a performance that touches hearts and leaves a lasting impression. Bring an intimate yet powerful musical experience to your event by booking our exceptional solo artist!</p>
					</div>
				</div>
			</div>
        </div>
    </section>

	<section class="about section-padding" id="artist-band">
        <div class="container">
			<div class="row" >
				<div class="col-lg-4 col-md-12 col-12">
					<div class="about-img"><img alt="" class="img-fluid image" src="img/band.png"></div>
				</div>
				<div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5 order-lg-first">
					<div class="about-text">
						<h2>~Welcome to  <br>
                            Band-Artist Event!~</h2>
						<p>Book our dynamic band for your event and ignite the stage with unforgettable performances. With a blend of genres and infectious energy, we'll keep the crowd entertained and the atmosphere electric. Get ready to groove and make your event a hit!</p>
					</div>
				</div>
			</div>
		</div>
	</section>

    <section class="events section-padding" id="event">
		<div class='container'>
			<div class="col-md-12">
    			<div class='row' id='result'>
					<div class="section-header text-center pb-5">
						<h2>Event</h2>
                        <p>Get Ready for a Musical Extravaganza!</p>
						<div class="outter-wrapper">
						<div class="table-wrapper">
        				<table class='table table-striped table-secondary display' id='example' style="width:100%"></table><br><br><br><br> 
						</div>
						</div>
						Click the button and relive the moments of our unforgettable past events ! <br>
						<i class="fa-solid fa-hand-point-right fa-beat-fade hand"></i>
						<a href="previousEvent.php" class="btn btn-warning p_event">Previous Events</a> 
						<i class="fa-solid fa-hand-point-left fa-beat-fade hand"></i>
					</div>			
				</div>
    		</div>
		</div>
	</section>

	<section class="artists section-padding" id="artist">
		<div class='container'>
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center pb-5">
						<h2>Artist</h2>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
    		</div>
			<article id="r_artist"></article>
		</div>
	</section>

	<section class="contact" id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="text section-header text-center">
						<h3 class="mt-4">DOWNTOWN PREMIER NIGHTCLUB</h3>
						<p>No.27, Jln 4/3XPerak Darul Ridzuan,<br> Inanam<br><br> <span class="con_email">shumwoon.linggam@ko.com</span> <br><br> +603-1100 5325<br> 
						<span class="right_mark">@2023 LUCIA.</span></p>
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
        url: "readUpcomingAPI.php",
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

	///////////////////////Artist/////////////////////////
	
	$(document).ready(function(){
    $.ajax({
	method: "POST",
	url: "readAPI.php",
	})
	.done(function( msg ) {
		var retObj = JSON.parse(msg);
		
		
		var table_str = '<div class="row artist">';
		if(retObj.length){
			$.each(retObj, function(key, value){ 
			table_str += '<div class="card-3 col-12 col-md-6 col-lg-3 mb-3">';
    		table_str += '<div class="card ">'; 
    		table_str += '<div class="row p-3">'; 
			table_str += '<div class="card-body col-5 col-sm-5 col-md-10 ">';
     		table_str += '<img alt="" class="img-fluid " src="'+value.pr_image+'"></div>';
			table_str += '<div class="card-body col-5 col-sm-7 col-md-10 p-4">';
			
			
			
			table_str += '<p class="card-text"><i class="bi bi-person-circle"></i> Artist<tab2>-</tab2> '+value.artist_name+'</p>';
			table_str += '<p class="card-text"><i class="bi bi-file-person-fill"></i> Biography - '+value.bio+'</p>';
			table_str += '<p class="card-text"><i class="bi bi-card-list"></i> Type <tab2>-</tab2> '+value.s_or_b+'</p>';
			table_str += '<p class="card-text"><i class="bi bi-twitter text-dark mx-1"></i> - '+value.uname_tw+'</p>';
			table_str += '<p class="card-text"><i class="bi bi-facebook text-dark mx-1"></i> - '+value.uname_fb+'</p>';
			table_str += '<p class="card-text"><i class="bi bi-instagram text-dark mx-1"></i> - '+value.uname_insta+'</p>';
		
			table_str += '</div></div></div></div>';

			});
		}
		table_str += '</div>';
		table_str += '<div class="d-flex justify-content-end"><a href="artist.php" class="see_more btn btn-warning">See More...</a></div>';


		$('#r_artist').html(table_str);
	});
});

	</script>
</html>
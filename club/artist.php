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

    <section class="artist section-padding" id="artist">
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
</body>
    <script>
        $(document).ready(function(){
    $.ajax({
	method: "POST",
	url: "artistAPI.php",
	})
	.done(function( msg ) {
		var retObj = JSON.parse(msg);
		
		
		var table_str = '<div class="row">';
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
			table_str += '<p class="card-text"><i class="bi bi-card-list"></i> Category <tab2>-</tab2> '+value.s_or_b+'</p>';
			table_str += '<p class="card-text"><i class="bi bi-twitter text-dark mx-1"></i> - '+value.uname_tw+'</p>';
			table_str += '<p class="card-text"><i class="bi bi-facebook text-dark mx-1"></i> - '+value.uname_fb+'</p>';
			table_str += '<p class="card-text"><i class="bi bi-instagram text-dark mx-1"></i> - '+value.uname_insta+'</p>';
		
			table_str += '</div></div></div></div>';

			});
		}
		table_str += '</div>';
		table_str += '<div class="d-flex justify-content-start"><a href="lucia.php" class="see_more btn btn-warning">< Back to Home-page</a></div>';


		$('#r_artist').html(table_str);
	});
});</script>
</html>
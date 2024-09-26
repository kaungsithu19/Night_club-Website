<?php
    session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coursework</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="register.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/e34dae2732.js" crossorigin="anonymous"></script>

  </head>
  
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
		<div class="container">
			<a class="navbar-brand" href="../lucia.php"><span class='span'>LU<span class="span-org">CIA. </span></span></a> 
            <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="http://localhost/club/admin/addArtist.php"><i class="fas fa-user"></i><span class="text-white">Add Artist</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="http://localhost/club/admin/editEvent.php"><i class="fas fa-edit"></i><span class="text-white">Edit Event</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="http://localhost/club/admin/addEvent.php"><i class="far fa-calendar-alt"></i><span class="text-white">Add Events</span></a>
					</li>					
					<li class="nav-item">
						<a class="nav-link" href="http://localhost/club/register.php"><i class="far fa-calendar-alt"></i><span class="text-white">Add Admin</span></a>
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
    		
		} else {
  			header('location:http://localhost/club/loginform.php');
		}
	?>

    <div class="container reg-con">
      <div class="login_content">
            <img src="http://localhost/club/img/sample2.png" alt="login image" class="login__img">
      
            <div class="content">
                <form>
                <h1 class="login__title">
                  Welcome to<br> <span class='span1'>LU<span class="span2">CIA. </span>!</span>
                </h1>
                <div class="user-details">
                    <div class="input-box">
                        <span class="details"><i class="ri-user-3-fill"></i> Full Name</span>
                        <input type="text" placeholder="Enter your name" required id="input_fname">
                    </div>
                <div class="input-box">
                    <span class="details"><i class="ri-user-3-fill"></i> Username</span>
                    <input type="text" placeholder="Enter your username" required id="input_uname">
                </div>
                <div class="input-box">
                    <span class="details"><i class="ri-mail-fill"></i> Email</span>
                    <input type="text" placeholder="Enter your email" required id="input_email">
                </div>
                <div class="input-box">
                    <span class="details"><i class="ri-phone-fill"></i> Phone Number (+95xxxxxxxxxx) </span>
                    <input type="text" placeholder="Enter your number" required id="input_ph">
                </div>
                <div class="input-box">
                    <span class="details"><i class="ri-lock-fill"></i> Password</span>
                    <input type="text" placeholder="Enter your password" required id="input_pass">
                </div>
                <div class="input-box">
                    <span class="details"><i class="ri-lock-fill"></i> Confirm Password</span>
                    <input type="text" placeholder="Confirm your password" required id="input_cpass">
                </div>
                <div class="input-box">
                    <span class="details col-12 col-sm-12"><i class="ri-user-3-fill"></i> Photo </span>
                    <input class="col-12" type="text" placeholder="Enter your photo url" required id="input_photo">
                </div>
            </div>

                <div class="button">
                    <input type="submit" id="submit" value="Register">
                </div>
                
                <p id="main"></p>
              </form>
    </div>
    
  </div>

<script>
$(document).ready(function(){
    $('#submit').click(function(event){
        event.preventDefault();

        // Get input values
        var uname = $('#input_uname').val();
        var fname = $('#input_fname').val();
        var email = $('#input_email').val();
        var ph = $('#input_ph').val();
        var pass = $('#input_pass').val();
        var cpass = $('#input_cpass').val();
        var pho = $('#input_photo').val();

        // Basic validation
        if (uname === "" || fname === "" || email === "" || ph === "" || pass === "" || cpass === "" || pho === "") {
            alert("All fields are required");
            return;
        }

        if (pass !== cpass) {
            alert("Passwords do not match");
            return;
        }

        // Additional validation
        if (!isValidEmail(email)) {
            alert("Invalid email format");
            return;
        }

        if (!isValidPhoneNumber(ph)) {
            alert("Invalid phone number format");
            return;
        }

        if (!isValidPassword(pass)) {
            alert("Password must be at least 6 characters long and contain a mix of letters, numbers, and special characters");
            return;
        }

        
        $.ajax({
            method: "POST",
            url: "registerAPI.php",
            data: { iuname: uname, ifname: fname, iemail: email, iph: ph, ipass: pass, icpass: cpass, ipho: pho },
        })
        .done(function( msg ) {
            var retObj = JSON.parse(msg);
            $('#main').html(retObj);
            alert("Successfully added");
        });
    });
});


function isValidEmail(email) {
    var pattern = /^[a-zA-Z0-9._-]+@lucia\.us$/;
    return pattern.test(email);
}


function isValidPhoneNumber(ph) {
    var pattern = /^\+\d{12}$/;
    return pattern.test(ph);
}


function isValidPassword(pass) {
    var pattern = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{6,}$/;
    return pattern.test(pass);
}
</script>
</body>
</html>

  </body>
</html>
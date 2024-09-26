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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/e34dae2732.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="loginform.css">
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    


    <div class="container container-form">
        <div class="login_content">
            <img src="img/sample2.png" alt="login image" class="login__img">
            <div class="login__block">
                <form class="login__form">
                    <div>
                        <h1 class="login__title">
                            Welcome to <span class='span1 span_lu'>LU<span class="span2 span_cia">CIA. </span>!</span>
                        </h1>
                        
                    </div>
                    <div>
                        <div class="user-details">
                            <div class="input-box">
                                
                                <span class="login__label" id='email'><i class="ri-mail-fill login__mail" ></i> Email</span>
                                <input type="email" placeholder= 'Enter your email address' required class="login__input" id = "input_email">   
                            </div>
                            
                            <div class="input-box">
                                
                                <span class="login__label"><i class="ri-lock-fill login__password" ></i> Password</span>    
                                <input type="password" placeholder="Enter your password" required class="login__input" id="input-pass">
                                <i class="ri-eye-off-line login__eye" id="input-icon"></i>
                            </div>
                        </div>
                        
                        <div class="login__check">
                            <input type="checkbox" class="login_check-input">
                            <label for="" class="login__check-label">Remember me</label>
                        </div>
                    </div>

                    <div>
                        <div class="login__buttons">
                            <!--<a href="" id = "login" class="login__button">Log In</a>-->
                            <input type="button" id="login" class="button__input" value="Login">
                        </div>
                        <div class="login__forget">
                        <a href="" class="login__forgot">Forgot Password?</a>
                        </div>
                        <a type="button" href="http://localhost/club/lucia.php" class="btn btn-outline-light" style="margin-top:10px; font-size: 13px;" id="logoutButton">Back to Homepage</a>
                    </div>
                    <p id="loginInfo"></p>
                </form>
            </div>
        </div>
    </div>

<script>
        /*=============== SHOW HIDDEN - PASSWORD ===============*/      
        const showHiddenPass = (inputPass, inputIcon) =>{

const input = document.getElementById(inputPass),
    iconEye = document.getElementById(inputIcon)
    iconEye.addEventListener('click', () =>{
    // Change password to text
    if(input.type === 'password'){
        // Switch to text
        input.type = 'text'
        // Add icon
        iconEye.classList.add('ri-eye-line')
        // Remove icon
        iconEye.classList.remove('ri-eye-off-line')
    }else{
        // Change to password
        input.type = 'password'
        // Remove icon
        iconEye.classList.remove('ri-eye-line')
        // Add icon
        iconEye.classList.add('ri-eye-off-line')
    }
    })
}
showHiddenPass('input-pass','input-icon');

/////////////////login//////////////////////////////
    $(document).ready(function(){
    $('#login').click(function(){
        var email = $('#input_email').val();
        var pass = $('#input-pass').val();
        if (!isValidEmail(email)) {
            alert("Invalid email format");
            return;
        }
        
        $.ajax({
            method: "POST",
            url: "loginAPI.php", // Change this to the correct endpoint for handling login
            data: { email: email, pass: pass },
        })
        .done(function(msg) {
            var retObj = JSON.parse(msg);
            if (retObj.status == 1)
                window.location.href = "http://localhost/club/admin/admindashboard.php";
            else
                $('#loginInfo').html("Invalid Login");
        });
    });
});
function isValidEmail(email) {
    var pattern = /^[a-zA-Z0-9._-]+@lucia\.us$/;
    return pattern.test(email);
}
</script>
</body>
</html>
<?php
if(isset($_COOKIE["user_buddy"])) {
    header('Location: https://buddytorest.co.uk/profile/');
    exit;
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BUDDY | Sign Up</title>
        <link rel="icon" type="image/x-icon" href="https://buddytorest.co.uk/wp-content/plugins/buddy/assets/images/buddy_icon.png">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://icons.getbootstrap.com/assets/font/bootstrap-icons.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <link rel='stylesheet' id='bootstrap-css' href='https://buddytorest.co.uk/wp-content/plugins/buddy/assets/css/bootstrap.min.css?ver=6.1.1' media='all' />
      <link rel='stylesheet' id='datatable-css' href='https://buddytorest.co.uk/wp-content/plugins/buddy/assets/css/jquery.dataTables.min.css?ver=6.1.1' media='all' />
      <link rel='stylesheet' id='style-css' href='https://buddytorest.co.uk/wp-content/plugins/buddy/assets/css/style.css' media='all' />
      <link rel='stylesheet' id='dashicons-css' href='https://buddytorest.co.uk/wp-includes/css/dashicons.min.css?ver=6.1.1' media='all' />
      <link rel='stylesheet' id='admin-bar-css' href='https://buddytorest.co.uk/wp-includes/css/admin-bar.min.css?ver=6.1.1' media='all' />
      <link rel='stylesheet' id='elementor-icons-css' href='https://buddytorest.co.uk/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.18.0' media='all' />
      <link rel='stylesheet' id='elementor-common-css' href='https://buddytorest.co.uk/wp-content/plugins/elementor/assets/css/common.min.css?ver=3.12.1' media='all' />
      <link rel='stylesheet' id='e-theme-ui-light-css' href='https://buddytorest.co.uk/wp-content/plugins/elementor/assets/css/theme-light.min.css?ver=3.12.1' media='all' />
      <link rel='stylesheet' id='wp-block-library-css' href='https://buddytorest.co.uk/wp-includes/css/dist/block-library/style.min.css?ver=6.1.1' media='all' />
      <link rel='stylesheet' id='classic-theme-styles-css' href='https://buddytorest.co.uk/wp-includes/css/classic-themes.min.css?ver=1' media='all' />
      <link rel='stylesheet' id='hello-elementor-css' href='https://buddytorest.co.uk/wp-content/themes/hello-elementor/style.min.css?ver=2.6.1' media='all' />
      <link rel='stylesheet' id='hello-elementor-theme-style-css' href='https://buddytorest.co.uk/wp-content/themes/hello-elementor/theme.min.css?ver=2.6.1' media='all' />
      <link rel='stylesheet' id='elementor-frontend-css' href='https://buddytorest.co.uk/wp-content/plugins/elementor/assets/css/frontend-lite.min.css?ver=3.12.1' media='all' />
      <link rel='stylesheet' id='elementor-post-8-css' href='https://buddytorest.co.uk/wp-content/uploads/elementor/css/post-8.css?ver=1681522127' media='all' />
      <link rel='stylesheet' id='litespeed-cache-css' href='https://buddytorest.co.uk/wp-content/plugins/litespeed-cache/assets/css/litespeed.css?ver=5.3.3' media='all' />
      <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
      <script src='https://buddytorest.co.uk/wp-includes/js/jquery/jquery.min.js?ver=3.6.1' id='jquery-core-js'></script>
      <script src='https://buddytorest.co.uk/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
      <script src='https://buddytorest.co.uk/wp-content/plugins/buddy/assets/js/script.js?ver=1' id='script.js-js'></script>
      <script src='https://buddytorest.co.uk/wp-content/plugins/buddy/assets/js/bootstrap.min.js?ver=1' id='bootstrap.min.js-js'></script>
      <script src='https://buddytorest.co.uk/wp-content/plugins/buddy/assets/js/jquery.validate.min.js?ver=1' id='jquery.validate.min.js-js'></script>
      <script src='https://buddytorest.co.uk/wp-content/plugins/buddy/assets/js/jquery.notifyBar.js?ver=1' id='jquery.notifyBar.js-js'></script>
      <script src='https://buddytorest.co.uk/wp-content/plugins/buddy/assets/js/jquery.dataTables.min.js?ver=1' id='jquery.dataTables.min.js-js'></script>
      <link rel="icon" type="image/x-icon" href="https://buddytorest.co.uk/wp-content/plugins/buddy/assets/images/buddy_icon.png">
        <link rel='stylesheet' id='bootstrap-css' href='https://buddytorest.co.uk/wp-content/plugins/buddy/assets/css/bootstrap.min.css?ver=6.1.1' media='all' />
        <link rel='stylesheet' id='style-css' href='https://buddytorest.co.uk/wp-content/plugins/buddy/assets/css/style.css' media='all' />
    </head>
    <style>
    </style>
    <body>
        <video defaultMuted playsinline autoplay muted loop id="backgroundVideo">
          <source src="https://buddytorest.co.uk/wp-content/plugins/buddy/assets/videos/background.mp4" type="video/mp4">
          Your browser does not support HTML5 video.
        </video>
        <div id="lgoin_page">
            <div id="sign_up_form" class="d-flex  flex-column justify-content-center h-100 text-white" id="header">
                <div class="Row">
                    <div class="col-sm-12" style="padding-left:0px;">
                        <div class="Row">
                            <div class="col-sm-6" style="padding-left:0px;transform: translateY(30%);">
                                <div class="d-flex justify-content-center" style="font-size:100px;color:black">
                                    <p>BUDDY</p>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <h1 class="" style="color:black ">BE A STRESS FREE SOUL</h1>
                                </div>
                            </div>
                            <div class="col-sm-6" style="font-size:14px;padding-left:0px;">
                                <!--<form method="post" name="form">-->
                                    <div class="d-flex justify-content-center" style="margin-top:30px">
                                        <input name="fname" id="first_name" style="margin-bottom:20px;width:350px;" class="form-control" required placeholder="First Name *" type="text">
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <input name="lname" id="last_name" style="margin-bottom:20px;width:350px;" class="form-control" required placeholder="Last Name *" type="text">
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <input name="email" id="email" style="margin-bottom:20px;width:350px;" class="form-control" required placeholder="Email *" type="text">
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <input name="password" id="password" type="password" style="margin-bottom:20px;width:350px;" class="form-control" required placeholder="Password *" type="text">
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <input name="re_password" id="re_password" type="password" style="margin-bottom:20px;width:350px;" class="form-control" required placeholder="Re-Password *" type="text">
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <input name="dob" id="dob" placeholder="Date of Birth *" type="text" onfocus="(this.type='date')" style="margin-bottom:20px;width:350px;" class="form-control" required type="text">
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <select name="gender" id="gender" style="margin-bottom:20px;width:350px;height: 34px;" class="form-select" style="opacity: 1 !important;visibility: visible !important;">
                                            <option value="female">Female</option>
                                            <option value="male">Male</option>
                                        </select>
                                        <label id="email_error" style="display:none; visibility:hidden;color:red">Please enter a valid email address</label>
                                    </div>
                                    <div class="d-flex justify-content-center" id="error" style="display:none; visibility:hidden;color:red;padding-bottom:10px;">
                                        <label id="error-msg" style="font-weight:normal !important;font-size: 14px;"></label>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" id="signup-btn" class="btn" style="color:black;border-color: black;font-weight:bold;font-size:14px;" onclick="signup()">Sign Up</button>
                                    </div>
                                    <div class="d-flex justify-content-center"  style="padding-top:20px;color:black">
                                        <p>Already have an account? <a style="font-weight:bold !important;font-size:14px;" onclick="signin()">Sign In</a></p>
                                    </div>
                                <!--</form>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<script>
document.getElementById("first_name").addEventListener('keydown', (event) => {
    if (event.key === 'Enter') {
        event.preventDefault();
        document.getElementById("last_name").focus();
    }
});

document.getElementById("last_name").addEventListener('keydown', (event) => {
    if (event.key === 'Enter') {
        event.preventDefault();
        document.getElementById("email").focus();
    }
});

document.getElementById("email").addEventListener('keydown', (event) => {
    if (event.key === 'Enter') {
        event.preventDefault();
        document.getElementById("password").focus();
    }
});

document.getElementById("password").addEventListener('keydown', (event) => {
    if (event.key === 'Enter') {
        event.preventDefault();
        document.getElementById("re_password").focus();
    }
});

document.getElementById("re_password").addEventListener('keydown', (event) => {
    if (event.key === 'Enter') {
        event.preventDefault();
        document.getElementById("dob").focus();
    }
});

document.getElementById("dob").addEventListener('keydown', (event) => {
    if (event.key === 'Enter') {
        event.preventDefault();
        document.getElementById("gender").focus();
    }
});

document.getElementById("gender").addEventListener('keydown', (event) => {
    if (event.key === 'Enter') {
        event.preventDefault();
        document.getElementById("signup-btn").click();
    }
});

function signin() {
    window.location.href = 'https://buddytorest.co.uk/';
}

function signup() {
    var fname = document.getElementById("first_name").value;
    var lname = document.getElementById("last_name").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var repassword = document.getElementById("re_password").value;
    var dob = document.getElementById("dob").value;
    var gender = document.getElementById("gender").value;
    if(fname.length > 0 && lname.length > 0 && email.length > 0 && password.length > 0 && repassword.length > 0 && dob.length > 0)
    {
        if(!validate_email(document.getElementById("email").value)){
            show_error("Please enter valid email");
            return;
        }
        if(password != repassword){
            show_error("Password mismatch");
            return;
        }
        var userExistRequestUrl = "https://buddytorest.co.uk/php_request?func=signup&fname=" + fname + "&lname=" + lname + "&email=" + email + "&password=" + password + "&dob=" + dob + "&gender=" + gender;
        const userExistRequestXhttp = new XMLHttpRequest();
        userExistRequestXhttp.onload = function() {
        	if (this.readyState == 4 && this.status == 200) {
        		var responseArr = JSON.parse(this.responseText);
                if(responseArr)
                {
                     
                    Swal.fire({title: "BUDDY", html: 'Successfully added!', showConfirmButton: false,});
                    setTimeout(function () {
                        window.location.href = 'https://buddytorest.co.uk/';
                    }, 5000);
                }
                else
                {
                    show_error("Already a user exists for this email");
                    
                }
        	}
        };
        userExistRequestXhttp.open("GET", userExistRequestUrl, true);
        userExistRequestXhttp.send();
    }
    else
    {
        if(fname.length == 0){
            document.getElementById("first_name").style.border = "1px solid red";
        }
        if(lname.length == 0){
            document.getElementById("last_name").style.border = "1px solid red";
        }
        if(email.length == 0){
            document.getElementById("email").style.border = "1px solid red";
        }
        if(password.length == 0){
            document.getElementById("password").style.border = "1px solid red";
        }
        if(repassword.length == 0){
            document.getElementById("re_password").style.border = "1px solid red";
        }
        if(dob.length == 0){
            document.getElementById("dob").style.border = "1px solid red";
        }
        show_error("Please enter all required fields");
    }
}
</script>
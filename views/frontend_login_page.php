<?php
if(isset($_COOKIE["user_buddy"])) {
    header('Location: https://buddytorest.co.uk/profile/');
    exit;
}
?>
<html lang="en-US">
   <head>
   	  <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>BUDDY | Profile</title>
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
   </head>
   <body onload="init();">
        <video defaultMuted playsinline autoplay muted loop id="backgroundVideo">
          <source src="https://buddytorest.co.uk/wp-content/plugins/buddy/assets/videos/background.mp4" type="video/mp4">
          Your browser does not support HTML5 video.
        </video>
        <div id="lgoin_page">
            <div class="d-flex  flex-column justify-content-center h-100 text-white" id="header">
                <div class="Row">
                    <div class="col-sm-12" style="padding-left:0px;">
                        <div class="Row">
                            <div class="col-sm-6">
                                <div class="d-flex justify-content-center" style="font-size:100px;color:black">
                                    <p>BUDDY</p>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <h1 class="" style="color:black ">BE A STRESS FREE SOUL</h1>
                                </div>
                            </div>
                            <div class="col-sm-6 " style="color:black">
                                <div class="d-flex justify-content-center" style="margin-top:30px">
                                    <input id="email" style="margin-bottom:20px;width:350px;" class="form-control form-control-lg" required placeholder="Email" type="text">
                                </div>
                                <div class="d-flex justify-content-center" style="padding-bottom:10px;">
                                    <input id="password" type="password" style="width:350px;" class="form-control form-control-lg" required placeholder="Password" type="text">
                                </div>
                                <div class="d-flex justify-content-center" id="error" style="display:none; visibility:hidden;color:red;padding-bottom:10px;">
                                    <label id="error-msg" style="font-weight:normal !important;font-size: 14px;"></label>
                                </div>
                                <div class="d-flex justify-content-center" style="padding-bottom:20px;">
                                    <div class="Row" style="width:350px;">
                                        <div class="col-sm-12">
                                            <a style="float:right;font-size:14px;font-weight:bold !important;" onclick="forgetPassword()">Forget Password?</a><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center" style="padding-bottom:30px;">
                                    <button id="signin-btn" type="button" class="btn" style="color:black;border-color: black;font-weight:bold;font-size:14px;" onclick="login()">Sign In</button>
                                </div>
                                
                                <div class="d-flex justify-content-center"  style="padding-bottom:20px;font-size:14px;">
                                    <p>Don't have an account? <a style="font-weight:bold !important" onclick="signup()">Sign Up</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<script>

document.getElementById("email").addEventListener('keydown', (event) => {
    if (event.key === 'Enter') {
        event.preventDefault();
        document.getElementById("password").focus();
    }
});

document.getElementById("password").addEventListener('keydown', (event) => {
    if (event.key === 'Enter') {
        event.preventDefault();
        document.getElementById("signin-btn").click();
    }
});
  
function signup(){
    window.location.href = "https://buddytorest.co.uk/signup/";
}

function forgetPassword(){
    window.location.href = "https://buddytorest.co.uk/calander/";
}



function login() {
    if(document.getElementById("email").value == "" || document.getElementById("password").value == "")
    {
        show_error("Please enter valid email and password");
        return;
    }
    if(!validate_email(document.getElementById("email").value)){
        show_error("Please enter valid email");
        return;
    }
    
    var url = "https://buddytorest.co.uk/php_request?func=login&username=" + document.getElementById("email").value + "&password="+document.getElementById("password").value;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var myArr = JSON.parse(this.responseText);
        if(myArr)
        {
            window.location.href = "https://buddytorest.co.uk/profile/";
        }
        else
        {
            show_error("Please enter valid email and password");
        }
      }
    };
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}
</script>
</body>
</html>
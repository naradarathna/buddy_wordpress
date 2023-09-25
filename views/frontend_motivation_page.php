<?php
   if(!isset($_COOKIE["user_buddy"])) {
       header('Location: https://buddytorest.co.uk/');
       exit;
   }
   ?>
<!doctype html>
<html lang="en-US">
   <head>
       <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>BUDDY | Motivational Videos</title>
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
   <body onload="onLoad();">
      <video defaultMuted playsinline autoplay muted loop id="backgroundVideo">
          <source src="https://buddytorest.co.uk/wp-content/plugins/buddy/assets/videos/background.mp4" type="video/mp4">
          Your browser does not support HTML5 video.
        </video>
      <div class="container-fluid">
         <div class="row nav-bar">
            <div class="col-sm-7" id="main_title_div"><img src="https://buddytorest.co.uk/wp-content/plugins/buddy/assets/images/buddy_icon.png" width="50" height="50"/> <span class="main_title" style="vertical-align: bottom;">BUDDY</span> <span class="sub_title" style="vertical-align: bottom;">BE A STRESS FREE SOUL</small></div>
            <div class="col-sm-5 d-flex justify-content-end">
               <div class="dropdown">
                  <button style="margin:0px;background-color: transparent; border-color: transparent; background: none;" class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" onclick="toHome()"><i class="bi bi-house-fill" style="font-size:30px;color:black"></i></button>
               </div>
               <div class="dropdown">
                  <button style="margin:0px;background-color: transparent; border-color: transparent; background: none;" class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><i class="bi bi-person-circle" style="font-size:30px;color:black"></i></button>
                  <ul class="dropdown-menu dropdown-menu-right">
                     <li><a onclick="logout()">Log Out</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="container-fluid" style="margin-top:10px">
            <div class="row" style="color:black">
               <!--<hr>-->
               <h1 style="width: 100%; text-align: center;font-size:50px;background-color:black;color:white;padding-bottom:5px;">Motivational Videos</h1>
               <!--<hr>-->
               <h2 style="font-size:25px;">Favorites</h3><hr>
            </div>
            <div class="row" id="favorites" style="min-height:200px;">
            </div>
            <div class="row" style="margin-top:25px; color:black">
               <hr style="height:18px;border:none;color:#333;background-color:#333;">
               <h2 style="font-size:25px;">All</h3><hr>
            </div>
            <div class="row" id="all">
            </div>
         </div>
      </div>
      <script>
         function onLoad(){
             loadAllVideos();
             //loadFavouriteVideos();
         }
         
         function loadAllVideos(){    
             // All Video
         	var videos = "https://buddytorest.co.uk/php_request?func=motivation";
             const videosRequestXhttp = new XMLHttpRequest();
             videosRequestXhttp.onload = function() {
             	if (this.readyState == 4 && this.status == 200) {
             		var responseArr = JSON.parse(this.responseText);
                     if(responseArr)
                     {
                         var fav_videos = "https://buddytorest.co.uk/php_request?func=favmotivation&user_id=" + getCookie("user_buddy");
                         const favvideosRequestXhttp = new XMLHttpRequest();
                         favvideosRequestXhttp.onload = function() {
                         	if (this.readyState == 4 && this.status == 200) {
                         		var favresponseArr = JSON.parse(this.responseText);
                                 if(favresponseArr.length > 0)
                                 {
                                     var html_content = "";
                                     const fav_video = [];
                                     const other_video = [];
                                     
                                     for(var i =0 ; i < responseArr.length; i++)
                                     {
                                         for(var j = 0; j< favresponseArr.length; j++)
                                         {
                                             if(responseArr[i].motivation_id == favresponseArr[j].motivation_id)
                                             {
                                                 if(!fav_video.includes(responseArr[i].motivation_id))
                                                 {
                                                     fav_video.push(responseArr[i].motivation_id);
                                                 }
                                             }
                                         }
                                     }
                                     console.log(fav_video);
                                     var fav_html_content = "";
                                     var html_content ="";
                                     for(var i =0 ; i < responseArr.length; i++)
                                     {
                                         if(fav_video.includes(responseArr[i].motivation_id))
                                         {
                                             console.log("Include - " + responseArr[i].motivation_id);
                                             fav_html_content = fav_html_content + 
                                                 "<div class='col-sm-2' id='Yoga_22' style='margin-bottom:25px;margin-right:25px'>" + 
                                                 "<div style='padding:56.25% 0 0 0;position:relative;'>" + 
                                                 "<iframe src='" + responseArr[i].motivation_url + "' style='position:absolute;top:0;left:0;width:100%;height:100%;' frameborder='0' allow='fullscreen; picture-in-picture' allowfullscreen></iframe>" + 
                                                 "</div>" +
                                                 "<span style='font-size:20px;inline-size: 80%;overflow: hidden;white-space: nowrap;display: inline-block;text-overflow: ellipsis;'>"+ responseArr[i].motivation_title +"</span>" +
                                                 "<i id='next_prev' class='bi bi-heart-fill' style='color:black;font-size:25px;float: right;padding-top:5px;padding-right:5px;' onClick='unsetFavourite("+ responseArr[i].motivation_id +")'></i>" + 
                                                 "</div>";
                                         }
                                         else
                                         {
                                             html_content = html_content + 
                                                 "<div class='col-sm-2' id='Yoga_22' style='margin-bottom:25px;margin-right:25px'>" + 
                                                 "<div style='padding:56.25% 0 0 0;position:relative;'>" + 
                                                 "<iframe src='" + responseArr[i].motivation_url + "' style='position:absolute;top:0;left:0;width:100%;height:100%;' frameborder='0' allow='fullscreen; picture-in-picture' allowfullscreen></iframe>" + 
                                                 "</div>" +
                                                 "<span style='font-size:20px;inline-size: 80%;overflow: hidden;white-space: nowrap;display: inline-block;text-overflow: ellipsis;'>"+ responseArr[i].motivation_title +"</span>" +
                                                 "<i id='next_prev' class='bi bi-heart' style='color:black;font-size:25px;float: right;padding-top:5px;padding-right:5px;' onClick='setFavourite("+ responseArr[i].motivation_id +")'></i>" + 
                                                 "</div>";
                                         }
                                     }
                                     var calender_title = document.getElementById("all");
                                     if(html_content.length > 0){
                                        calender_title.innerHTML = html_content;
                                     }
                                     else{
                                         calender_title.innerHTML = "<h2>All motivational videos are favourite</h2>";;
                                     }
                                     var fav_div = document.getElementById("favorites");
                                     fav_div.innerHTML = fav_html_content;
                                 }
                                 else
                                 {
                                     //console.log("TEST");
                                     var html_content = "";
                                     for(var i =0 ; i < responseArr.length; i++)
                                     {
                                         //console.log(responseArr[i].motivation_url);
                                         html_content = html_content + 
                                             "<div class='col-sm-2' id='Yoga_22' style='margin-bottom:25px;margin-right:25px'>" + 
                                             "<div style='padding:56.25% 0 0 0;position:relative;'>" + 
                                             "<iframe src='" + responseArr[i].motivation_url + "' style='position:absolute;top:0;left:0;width:100%;height:100%;' frameborder='0' allow='fullscreen; picture-in-picture' allowfullscreen></iframe>" + 
                                             "</div>" +
                                             "<span style='font-size:20px;inline-size: 80%;overflow: hidden;white-space: nowrap;display: inline-block;text-overflow: ellipsis;'>"+ responseArr[i].motivation_title +"</span>" +
                                             "<i id='next_prev' class='bi bi-heart' style='color:black;font-size:25px;float: right;padding-top:5px;padding-right:5px;' onClick='setFavourite("+ responseArr[i].motivation_id +")'></i>" + 
                                             "</div>";
                                     }
                                     //console.log(html_content);
                                     var calender_title = document.getElementById("all");
                                     calender_title.innerHTML = html_content;
                                     var fav_div = document.getElementById("favorites");
                                     fav_div.innerHTML = "<h2>No favourite motivational videos</h2>";
                                 }
                         	}
                         };
                         favvideosRequestXhttp.open("GET", fav_videos, true);
                         favvideosRequestXhttp.send();
                         
                         //$("#all").html(html_content);
                     }
                     else
                     {
                         alert("Already a user exists for this email");
                         
                     }
             	}
             };
             videosRequestXhttp.open("GET", videos, true);
             videosRequestXhttp.send();
         }
         
         function loadFavouriteVideos(){
             // Fav Video
         	var fav_videos = "https://buddytorest.co.uk/php_request?func=favmotivation&user_id=" + getCookie("user_buddy");
             const favvideosRequestXhttp = new XMLHttpRequest();
             favvideosRequestXhttp.onload = function() {
             	if (this.readyState == 4 && this.status == 200) {
             		var favresponseArr = JSON.parse(this.responseText);
                     if(favresponseArr)
                     {
                         var fav_html_content = "";
                         for(var i =0 ; i < favresponseArr.length; i++)
                         {
                             //console.log(favresponseArr[i].motivation_url);
                             var fav_html_content = fav_html_content + 
                                 "<div class='col-sm-2' id='Yoga_22' style='margin-bottom:25px;margin-right:25px'>" + 
                                 "<div style='padding:56.25% 0 0 0;position:relative;'>" + 
                                 "<iframe src='" + favresponseArr[i].motivation_url + "' style='position:absolute;top:0;left:0;width:100%;height:100%;' frameborder='0' allow='fullscreen; picture-in-picture' allowfullscreen></iframe>" + 
                                 "</div>" +
                                 "<span style='font-size:20px;inline-size: 80%;overflow: hidden;white-space: nowrap;display: inline-block;text-overflow: ellipsis;'>"+ favresponseArr[i].motivation_title +"</span>" +
                                 "<i id='next_prev' class='bi bi-heart-fill' style='color:black;font-size:25px;float: right;padding-top:5px;padding-right:5px;' onClick='setFavourite("+ favresponseArr[i].motivation_id +")'></i>" + 
                                 "</div>";
                         }
                         //console.log(fav_html_content);
                         var fav_div = document.getElementById("favorites");
                         fav_div.innerHTML = fav_html_content;
                         //$("#all").html(html_content);
                     }
                     else
                     {
                         alert("Already a user exists for this email");
                         
                     }
             	}
             };
             favvideosRequestXhttp.open("GET", fav_videos, true);
             favvideosRequestXhttp.send();
         }
         
         function setFavourite(video_id){
             // Set favourite Video
         	var videos = "https://buddytorest.co.uk/php_request?func=motivationSetFav&user_id=" + getCookie("user_buddy") + "&motivation_id=" + video_id;
             const videosRequestXhttp = new XMLHttpRequest();
             videosRequestXhttp.onload = function() {
             	if (this.readyState == 4 && this.status == 200) {
             		var responseArr = JSON.parse(this.responseText);
                     if(responseArr)
                     {
                         loadAllVideos();
                     }
                     else
                     {
                         alert("Already a user exists for this email");
                         
                     }
             	}
             };
             videosRequestXhttp.open("GET", videos, true);
             videosRequestXhttp.send();
         }
         function unsetFavourite(video_id){
             // Set favourite Video
         	var videos = "https://buddytorest.co.uk/php_request?func=motivationUnsetFav&user_id=" + getCookie("user_buddy") + "&motivation_id=" + video_id;
             const videosRequestXhttp = new XMLHttpRequest();
             videosRequestXhttp.onload = function() {
             	if (this.readyState == 4 && this.status == 200) {
             		var responseArr = JSON.parse(this.responseText);
                     if(responseArr)
                     {
                         loadAllVideos();
                     }
                     else
                     {
                         alert("Already a user exists for this email");
                         
                     }
             	}
             };
             videosRequestXhttp.open("GET", videos, true);
             videosRequestXhttp.send();
         }
      </script>
   </body>
</html>
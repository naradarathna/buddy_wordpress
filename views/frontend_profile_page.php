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
         <div class="row justify-content-center d-flex align-items-center status-area">
            <div class="col-sm-5">
               <div class="col text-center">
                  <h1 class="card-title pricing-card-title" style="font-size:80px"><strong><span id='time' ></span></strong></h1>
                  <h3 style="font-size:30px"><span id='date' ></span></h3>
                  <div style="height:0px"></div>
                  <a onclick="moodChange()" style="cursor: pointer;"><img id="my-mood" src="" width="250" height="250" style="padding:20px;"/></a>
                  <h3 style="font-size:35px" id="mood-title"></h3>
                  <button type="button" class="btn" style="color:black;border-color: black;font-weight:bold" onclick="moodChange()">CHANGE MOOD</button>
                  <!--<a onclick="moodChange()" style="cursor: pointer;"><i class="bi bi-pencil-fill" style="font-size:20px"></i></a>-->
                  <!--<p id="my-mood2" style="font-size:180px">&#128544;</p>-->
               </div>
            </div>
            <div class="col-sm-7">
               <div class="row" style="padding-bottom:10px;" id="motivation_quotes">
                  <div class="col-sm-12">
                     <div class="col-sm-10">
                        <div class="content-slider">
                           <div class="slider">
                              <div class="mask">
                                 <ul id="all_gratitudes">
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-2" style="padding-bottom:20px;">
                        <button type="button" class="btn" style="color:black;border-color: black;font-weight:bold;" onclick="editGratitude()">EDIT GRATITUDE</button>
                     </div>
                  </div>
                  <hr>
               </div>
               <div class="row">
                  <div class="col-sm-6">
                     <a onclick="toDiary()">
                        <div class="option" style="background-image: linear-gradient(rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.55)),url(https://buddytorest.co.uk/wp-content/plugins/buddy/assets/images/main_images/diary.jpg); background-size: cover;background-repeat: no-repeat;">DIARY</div>
                     </a>
                  </div>
                  <div class="col-sm-6">
                     <a onclick="toOrganizer()">
                        <div class="option" style="background-image:linear-gradient(rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.55)),url(https://buddytorest.co.uk/wp-content/plugins/buddy/assets/images/main_images/calender.jpg); background-size: cover;background-repeat: no-repeat;">WORKLOAD ORGANIZER</div>
                     </a>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-4">
                     <a onclick="toYoga()">
                        <div class="option" style="background-image: linear-gradient(rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.55)),url(https://buddytorest.co.uk/wp-content/plugins/buddy/assets/images/main_images/images.jfif); background-size: cover;background-repeat: no-repeat;">YOGA</div>
                     </a>
                  </div>
                  <div class="col-sm-4">
                     <a onclick="toMotivation()">
                        <div class="option" style="background-image: linear-gradient(rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.55)),url(https://buddytorest.co.uk/wp-content/plugins/buddy/assets/images/main_images/motivation.avif); background-size: cover;background-repeat: no-repeat;">MOTIVATIONAL VIDEOS</div>
                     </a>
                  </div>
                  <div class="col-sm-4">
                     <a onclick="toMeditation()">
                        <div class="option" style="background-image: linear-gradient(rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.55)),url(https://buddytorest.co.uk/wp-content/plugins/buddy/assets/images/main_images/meditation.jpg); background-size: cover;background-repeat: no-repeat;">GUIDED MEDITATION</div>
                     </a>
                  </div>
               </div>
               <hr>
               <div class="row">
                  <div class="col-sm-10">
                     <p style="font-size:20px;color:black;font-weight:bold;">CALMING & RELAXATION MUSIC</P>
                  </div>
                  <div class="col-sm-2">
                     <button type="button" class="btn" style="color:black;border-color: black;font-weight:bold" onclick="edit_playlist()">EDIT PLAYLIST</button>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="relaxing-option">
                        <audio controls style="width: 100%;" id="audio_with_controls">
                           <source src="" type="audio/mpeg">
                           Your browser does not support the audio element.
                        </audio>
                        <p id="relaxing-title" style="padding-top:10px; font-size:15px;tex-alignment:right"> </P>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script>
         function init(){
             display_ct();
             profileGratitudeLoader();
             audioPlayerSetup();
             loadReminders();
             // Set Mode
         	var userModeUrl = "https://buddytorest.co.uk/php_request?func=getLatetestMode&user_id=" + getCookie("user_buddy");
             const userModeRequestXhttp = new XMLHttpRequest();
             userModeRequestXhttp.onload = function() {
             	if (this.readyState == 4 && this.status == 200) {
             		var responseArr = JSON.parse(this.responseText);
                     if(responseArr)
                     {
                         document.getElementById('my-mood').src = responseArr[0].mode_symbol;
                         document.getElementById('mood-title').innerText = "I AM FEELING " + responseArr[0].mode_name;
                     }
                     else
                     {
                         alert("Already a user exists for this email");
                         
                     }
             	}
             };
             userModeRequestXhttp.open("GET", userModeUrl, true);
             userModeRequestXhttp.send();
             
             
             var allUserModeUrl = "https://buddytorest.co.uk/php_request?func=getAllUserModes&user_id=" + getCookie("user_buddy");
             const alluserModeRequestXhttp = new XMLHttpRequest();
             alluserModeRequestXhttp.onload = function() {
             	if (this.readyState == 4 && this.status == 200) {
             		var responseArr = JSON.parse(this.responseText);
                     if(responseArr)
                     {
                         //console.log(responseArr);
                     }
                     else
                     {
                         alert("Already a user exists for this email");
                         
                     }
             	}
             };
             alluserModeRequestXhttp.open("GET", allUserModeUrl, true);
             alluserModeRequestXhttp.send();
         	//document.getElementById('my-mood').src = img_dict[formValues];
         	//document.getElementById('mood-title').innerText = "I AM FEELING " + formValues;
         }
         
         function getDiaryDateKey(fullDate){
             var month = (fullDate.getMonth() + 1) < 10 ? '0' + (fullDate.getMonth() + 1) : (fullDate.getMonth() + 1);
             var date = fullDate.getDate() < 10 ? '0' + fullDate.getDate() : fullDate.getDate();
         	return fullDate.getFullYear() + "-" + month + "-" + date;
         }
         
         function diff_minutes(dt2, dt1) 
          {
         
           var diff =(dt2.getTime() - dt1.getTime()) / 1000;
           diff /= 60;
           return Math.abs(Math.round(diff));
           
          }
          
         var reminder_dict = {}; // create an empty array
         function loadReminders()
         {
             var date = new Date();
         	var hours = date.getHours() < 10 ? '0' + date.getHours() : date.getHours();
         	var minutes = date.getMinutes() < 10 ? '0' + date.getMinutes() : date.getMinutes();
         	var seconds = date.getSeconds() < 10 ? '0' + date.getSeconds() : date.getSeconds();
         	var requested_time = hours + ":" + minutes + ":00";
             var taskUrl = "https://buddytorest.co.uk/php_request?func=getUserTasks&user_task_date=" + getDiaryDateKey(date) + "&user_id=" + getCookie("user_buddy") + "&user_task_start_time=" + requested_time;
             const taskRequestXhttp = new XMLHttpRequest();
             taskRequestXhttp.onload = function() {
             	if (this.readyState == 4 && this.status == 200) {
             		var responseArr = JSON.parse(this.responseText);
                     if(responseArr)
                     {
                         for(var i = 0; i< responseArr.length; i++)
                         {
                             var splitted1 = requested_time.split(":");
                             var splitted2 = responseArr[i].user_task_start_time.split(":");
                             dt1 = new Date(date.getFullYear(),date.getMonth() + 1,date.getDate(),splitted1[0],splitted1[1])
                             dt2 = new Date(date.getFullYear(),date.getMonth() + 1,date.getDate(),splitted2[0],splitted2[1])
                             if (diff_minutes(dt1, dt2) > responseArr[i].user_task_reminding_time)
                             {
                                 dt2.setMinutes(dt2.getMinutes() - responseArr[i].user_task_reminding_time);
                                 var r_time = (dt2.getHours() < 10 ? '0' + dt2.getHours() : dt2.getHours()) + ":" + (dt2.getMinutes() < 10 ? '0' + dt2.getMinutes() : dt2.getMinutes()) + ":00";
                                 reminder_dict[r_time] = responseArr[i].user_task_title;
                             }
                         }
                     }
                     else
                     {
                         alert("Already a user exists for this email");
                         
                     }
             	}
             };
             taskRequestXhttp.open("GET", taskUrl, true);
             taskRequestXhttp.send();
         }
         
         function display_c(){
         	
         	var refresh=1000; // Refresh rate in milli seconds
         	mytime=setTimeout('display_ct()',refresh)
         }
         
         
         
         function display_ct() {
         	var date = new Date();
         	var hours = date.getHours();
         	var minutes = date.getMinutes();
         	var seconds = date.getSeconds();
         	  
         	// Check whether AM or PM
         	var newformat = hours >= 12 ? 'PM' : 'AM';
         	  
         	// Find current hour in AM-PM Format
         	hours = hours % 12;
         	  
         	// To display "0" as "12"
         	hours = hours ? hours : 12;
         	hours = hours < 10 ? '0' + hours : hours;
         	minutes = minutes < 10 ? '0' + minutes : minutes;
         	seconds = seconds < 10 ? '0' + seconds : seconds;
         	
         	var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
         	var daysInWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
         
         	var time = new Date().toLocaleTimeString();
         	document.getElementById('time').innerHTML = hours + ':' + minutes + ' ' + newformat;
         	var date = new Date().getDate();
         	document.getElementById('date').innerHTML = new Date().getDate() + " " + monthNames[new Date().getMonth() - 1] + " " + new Date().getFullYear() + "<p style='height:10px'></p><small style='font-weight:bold'>" + daysInWeek[new Date().getDay() - 1] + "</small>";
         	display_c();
         	
         	// Reminders
         	var current_time = (new Date().getHours() < 10 ? '0' + new Date().getHours() : new Date().getHours()) + ":" + minutes + ":" + seconds;
         	console.log(current_time);
             console.log(reminder_dict);
         	//reminder_dict["025300PM"] = "Go to school";
         	//reminder_dict["025200PM"] = "Drink Water";
         	if(reminder_dict[current_time]){
         	    Swal.fire({
         		  customClass: 'swal-wide',
         		  html: '<label style="font-size:20px;padding-bottom:10px;background-color:black;width:100%;color:white;padding-top:10px;">REMINDER</label><br><br><p style="font-size:15px" id="swal-input1" class="swal1-input">' + reminder_dict[current_time] + '</p>',
         		  focusConfirm: false,
         		  preConfirm: () => {
         			return document.getElementById('swal-input1').value
         		  }
         		});
         		//Swal.fire(reminder_dict[current_time])
         	}
         	
         	
         }
         // Mood Change
         function moodChange()
         {
             // Get all modes
         	var allModesUrl = "https://buddytorest.co.uk/php_request?func=getAllModes";
             const allModeRequestXhttp = new XMLHttpRequest();
             allModeRequestXhttp.onload = function() {
             	if (this.readyState == 4 && this.status == 200) {
             		var responseArr = JSON.parse(this.responseText);
                     if(responseArr)
                     {
                         
                         var img_dict = []; // create an empty array
                         var show_array = '<label style="font-size:20px;padding-bottom:10px;background-color:black;width:100%;color:white;padding-top:10px;">MOODS</label><br><br><select id="swal-input1" class="swal1-input">';
                         for(var i = 0; i< responseArr.length; i++)
                         {
                             show_array += "<option value='" + responseArr[i].mode_name + "'>" + responseArr[i].mode_name + "</option>";
                             img_dict[responseArr[i].mode_name] = [responseArr[i].mode_id, responseArr[i].mode_symbol];
                         }
                         show_array += '</select>';
                     	(async () => {
                     		const { value: formValues } = await Swal.fire({
                     		  customClass: 'swal-wide',
                     		  html: show_array,
                     		  focusConfirm: false,
                     		  preConfirm: () => {
                     			return document.getElementById('swal-input1').value
                     		  }
                     		})
                     
                     		if (formValues) {
                     			document.getElementById('my-mood').src = img_dict[formValues][1];
                     			document.getElementById('mood-title').innerText = "I AM FEELING " + formValues;
                     			//updateMode
                     			var changeModesUrl = "https://buddytorest.co.uk/php_request?func=updateMode&user_id=" + getCookie("user_buddy") + "&mode_id=" + img_dict[formValues][0];
                                 const changeModesRequestXhttp = new XMLHttpRequest();
                                 changeModesRequestXhttp.onload = function() {
                                 	if (this.readyState == 4 && this.status == 200) {
                                 		var responseArrChangeMode = JSON.parse(this.responseText);
                                         if(responseArrChangeMode)
                                         {
                                             //console.log(responseArrChangeMode);
                                         }
                                 	}
                                 };
                                 changeModesRequestXhttp.open("GET", changeModesUrl, true);
                                 changeModesRequestXhttp.send();
                     		}
                     	})()
                     }
                     else
                     {
                         alert("Already a user exists for this email");
                         
                     }
             	}
             };
             allModeRequestXhttp.open("GET", allModesUrl, true);
             allModeRequestXhttp.send();
         }
         
         // Audio player
         var dict = []; // create an empty array
         
         function audioPlayerSetup()
         {
             //var audioPlayer = document.getElementById('audio_with_controls');
             
             
             var videos = "https://buddytorest.co.uk/php_request?func=relaxing";
             const videosRequestXhttp = new XMLHttpRequest();
             videosRequestXhttp.onload = function() {
             	if (this.readyState == 4 && this.status == 200) {
             		var responseArr = JSON.parse(this.responseText);
                     if(responseArr)
                     {
                         var fav_videos = "https://buddytorest.co.uk/php_request?func=favrelaxing&user_id=" + getCookie("user_buddy");
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
                                             if(responseArr[i].relaxing_id == favresponseArr[j].relaxing_id)
                                             {
                                                 if(!fav_video.includes(responseArr[i].relaxing_id))
                                                 {
                                                     fav_video.push(responseArr[i].relaxing_id);
                                                 }
                                             }
                                         }
                                     }
                                     var fav_html_content = "";
                                     var html_content ="";
                                     for(var i =0 ; i < responseArr.length; i++)
                                     {
                                         if(fav_video.includes(responseArr[i].relaxing_id))
                                         {
                                             dict.push({
                                                     key:   responseArr[i].relaxing_title,
                                                     value: responseArr[i].relaxing_url
                                                 });
                                             
                                         }
                                     }
                                     //console.log(dict);
                                     document.getElementById('audio_with_controls').src = dict[0].value;
                                     document.getElementById('audio_with_controls').addEventListener('ended', PlayNext);
                                     document.getElementById('relaxing-title').innerText = '"' + dict[currentIndex].key + '"';
                                     document.getElementById('audio_with_controls').onerror = function() {
                                     	document.getElementById('audio_with_controls').src = dict[currentIndex].value;
                                     	document.getElementById('audio_with_controls').play();
                                     	document.getElementById('relaxing-title').innerText = '"' + dict[currentIndex].key + '"';
                                     };
                                     
                                     var calender_title = document.getElementById("all");
                                     calender_title.innerHTML = html_content;
                                     var fav_div = document.getElementById("favorites");
                                     fav_div.innerHTML = fav_html_content;
                                 }
                                 else
                                 {
                                     
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
             
             
             //var nextAudio = "https://buddytorest.co.uk/wp-content/plugins/buddy/assets/audio/relaxing/relaxing_music_02.mp3";
             
             
             
             
             
         }
         
         var currentIndex= 0;
         function PlayNext() {
             currentIndex = currentIndex + 1;
             if(currentIndex== dict.length)
             {
                 currentIndex = 0;
             }
             document.getElementById('audio_with_controls').src = dict[currentIndex].value;
             document.getElementById('audio_with_controls').play();
             document.getElementById('relaxing-title').innerText = '"' + dict[currentIndex].key + '"';
         
         }
         
         function toDiary(){
             window.location.href = "https://buddytorest.co.uk/diary/";
         }
         function toOrganizer(){
             window.location.href = "https://buddytorest.co.uk/workload_organizer/";
         }
         function toYoga(){
             window.location.href = "https://buddytorest.co.uk/yoga/";
         }
         function toMotivation(){
             window.location.href = "https://buddytorest.co.uk/motivation/";
         }
         function toMeditation(){
             window.location.href = "https://buddytorest.co.uk/meditation/";
         }
         
         function edit_playlist()
         {
             window.location.href = "https://buddytorest.co.uk/calming_and_relaxing/";
         }
         
         
         function editGratitude() {
             
         	(async () => {
         		const { value: formValues } = await Swal.fire({
         		  customClass: 'swal-gratitude',
         		  focusConfirm: false,
         		  focusCancel:false,
         		  showConfirmButton: false,
         		  html:
         			'<label style="font-size:20px;padding-bottom:10px;background-color:black;width:100%;color:white;padding-top:10px;">GRATITUDES</label>'+
         			'<div name="all_gratitude" style="max-height:200px;overflow:scroll;overflow-x: hidden;">' +
         			'</div><hr style="height:5px;border:none;color:#333;background-color:#333;">'+
         			'<div style="padding-bottom:15px;padding-top:15px;"><label style="width:108.19px;padding-top:5px;padding-right:5px;font-size:14px;vertical-align: top;">New Gratitude</label><input name="new_gratitude" id="new_gratitude" type="text" style="width:620px;height:25px;font-size:15px;"/>'+
         			'<button style="margin-left:5px;width:60px;font-size: 12px;" id="addGratitude_btn" onclick="addGratitude();">Add</button></div>',
         		  didRender: () => {
         			loadAllGratitude();
         		  },
         		})
         
         		if (formValues) {
         		    profileGratitudeLoader();
         		}
         	})()
         };
         
         function profileGratitudeLoader()
         {
             var userExistRequestUrl = "https://buddytorest.co.uk/php_request?func=allUserGratitude&user_id=" + getCookie("user_buddy");
             const userExistRequestXhttp = new XMLHttpRequest();
             userExistRequestXhttp.onload = function() {
             	if (this.readyState == 4 && this.status == 200) {
             		var responseArr = JSON.parse(this.responseText);
                     if(responseArr)
                     {
                         var content = "";
                         if(responseArr.length > 0)
                         {
                             for(var i = responseArr.length; i > 0; i--)
                             {
                                 var index = responseArr.length - i + 1;
                                 content = content + '<li class="anim'+ index +'"><div class="quote">' + responseArr[i-1].custom_gratitude_content +'</div></li>';
                             }
                         }
                         else
                         {
                             content = content + '<li class="anim1"><div class="quote">Please enter your day to day gratitudes to see from here via &ldquo;Edit Gratitude&rdquo;</div></li>';
                             content = content + '<li class="anim2"><div class="quote">Please enter your day to day gratitudes to see from here via &ldquo;Edit Gratitude&rdquo;</div></li>';
                             content = content + '<li class="anim3"><div class="quote">Please enter your day to day gratitudes to see from here via &ldquo;Edit Gratitude&rdquo;</div></li>';
                         }
                         document.getElementById('all_gratitudes').innerHTML = content;
                     }
                     
             	}
             };
             userExistRequestXhttp.open("GET", userExistRequestUrl, true);
             userExistRequestXhttp.send();
         }
         
         function addGratitude()
         {
             var result = document.evaluate('//input[@name="new_gratitude"]', document.body);
             var input = result.iterateNext();
             var userExistRequestUrl = "https://buddytorest.co.uk/php_request?func=addGratitude&user_id=" + getCookie("user_buddy") + "&custom_gratitude_content=" + encodeURIComponent(input.value);
             const userExistRequestXhttp = new XMLHttpRequest();
             userExistRequestXhttp.onload = function() {
             	if (this.readyState == 4 && this.status == 200) {
             		var responseArr = JSON.parse(this.responseText);
                     if(responseArr)
                     {
                         input.value = "";
                         loadAllGratitude();
                     }
             	}
             };
             userExistRequestXhttp.open("GET", userExistRequestUrl, true);
             userExistRequestXhttp.send();
         }
         
         function loadAllGratitude()
         {
             var userExistRequestUrl = "https://buddytorest.co.uk/php_request?func=allUserGratitude&user_id=" + getCookie("user_buddy");
             const userExistRequestXhttp = new XMLHttpRequest();
             userExistRequestXhttp.onload = function() {
             	if (this.readyState == 4 && this.status == 200) {
             		var responseArr = JSON.parse(this.responseText);
                     if(responseArr)
                     {
                         var content = "";
                         for(var i = 0; i< responseArr.length; i++)
                         {
                             content = content + '<div><label style="width:108.19px;padding-right:5px;font-size:10px;vertical-align: top;"> </label><label style="text-align:left;float:left;width:608px;height:25px;font-size:15px;background-color:light-gray;">' +  responseArr[i].custom_gratitude_content + '</label><button style="margin-left:5px;width:60px;" id="deleteGratitude_btn" onclick="deleteGratitude(' + responseArr[i].user_custom_gratitude_id +');">Delete</button><hr></div>';
                         }
                         //var xpathExpression = '//*[@id="swal2-html-container"]/div'; 
                         //var result2 = document.evaluate(xpathExpression, document, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null);
                         //alert('Xpath Result:' + result2.singleNodeValue.innerHTML);
                         var gratitude_corner = document.evaluate('//div[@name="all_gratitude"]', document.body);
                         var gratitude_corner_input = gratitude_corner.iterateNext();
                         gratitude_corner_input.innerHTML = content;
                     }
                     
             	}
             };
             userExistRequestXhttp.open("GET", userExistRequestUrl, true);
             userExistRequestXhttp.send();
             
         }
         function deleteGratitude(id)
         {
             var userExistRequestUrl = "https://buddytorest.co.uk/php_request?func=deleteGratitude&user_id=" + getCookie("user_buddy") + "&user_custom_gratitude_id=" + id;
             const userExistRequestXhttp = new XMLHttpRequest();
             userExistRequestXhttp.onload = function() {
             	if (this.readyState == 4 && this.status == 200) {
             		var responseArr = JSON.parse(this.responseText);
                     if(responseArr)
                     {
                         loadAllGratitude();
                     }
                     
             	}
             };
             userExistRequestXhttp.open("GET", userExistRequestUrl, true);
             userExistRequestXhttp.send();
         }
      </script>
   </body>
</html>
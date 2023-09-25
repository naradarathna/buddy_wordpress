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
      <title>BUDDY | Diary</title>
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
      <script type="text/javascript">
         function display_date(fullDate) {
         	var date = fullDate.getDate() < 10 ? '0' + fullDate.getDate() : fullDate.getDate();
         	document.getElementById('date').innerHTML = date;
         	
         	const months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
         	var month = months[fullDate.getUTCMonth()];
         	document.getElementById('month').innerHTML = month;
         	
         	const weekdays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
         	var weekday = weekdays[fullDate.getUTCDay()];
         	document.getElementById('weekday').innerHTML = weekday;
         }
         
         function getDiaryDateKey(fullDate){
             var month = (fullDate.getMonth() + 1) < 10 ? '0' + (fullDate.getMonth() + 1) : (fullDate.getMonth() + 1);
             var date = fullDate.getDate() < 10 ? '0' + fullDate.getDate() : fullDate.getDate();
         	return fullDate.getFullYear() + "-" + month + "-" + date;
         }
         var diary_notes = {};
         var diary_images = {};
         
         //diary_notes["2023-06-12"]= "Note 15th April";
         //diary_notes["2023-06-13"]= "Note 16th April";
         //diary_notes["2023-06-14"]= "Note 17th April";
         
         //diary_images["2023-06-12"]= ["https://buddytorest.co.uk/wp-content/plugins/buddy/assets/images/test/img1.jpg","https://buddytorest.co.uk/wp-content/plugins/buddy/assets/images/test/img2.jpg",
         //"https://buddytorest.co.uk/wp-content/plugins/buddy/assets/images/test/img3.jpg"];
         
         //diary_images["2023-06-13"]= ["https://buddytorest.co.uk/wp-content/plugins/buddy/assets/images/test/img4.jpg","https://buddytorest.co.uk/wp-content/plugins/buddy/assets/images/test/img5.jpg",
         //"https://buddytorest.co.uk/wp-content/plugins/buddy/assets/images/test/img6.jpg",
         //"https://buddytorest.co.uk/wp-content/plugins/buddy/assets/images/test/img7.jpg",
         //"https://buddytorest.co.uk/wp-content/plugins/buddy/assets/images/test/img8.jpg",
         //"https://buddytorest.co.uk/wp-content/plugins/buddy/assets/images/test/img9.jpg"];
         
         //diary_images["2023-06-14"]= ["https://buddytorest.co.uk/wp-content/plugins/buddy/assets/images/test/img10.jpg","https://buddytorest.co.uk/wp-content/plugins/buddy/assets/images/test/img11.jpg",
         //"https://buddytorest.co.uk/wp-content/plugins/buddy/assets/images/test/img12.jpg",
         //"https://buddytorest.co.uk/wp-content/plugins/buddy/assets/images/test/img13.jpg",
         //"https://buddytorest.co.uk/wp-content/plugins/buddy/assets/images/test/img14.jpg"];
         
         function onLoad(){
             document.getElementById("diary-note").disabled = true;
             document.getElementById("clear-btn").style.visibility = 'hidden';
             document.getElementById("clear-btn").style.display = 'none';
             document.getElementById("diary-note").style.fontFamily = "cursive";
             document.getElementById("diary-note").style.color = "gray";
         	var fullDate = new Date();
         	display_date(fullDate);
         	diaryUpdate(getDiaryDateKey(fullDate));
         }
         
         function diaryUpdate(date)
         {
             var url = "https://buddytorest.co.uk/php_request?func=getDiary&user_id=" + getCookie("user_buddy") + "&user_diary_date=" + encodeURIComponent(date);
             var xmlhttp = new XMLHttpRequest();
             xmlhttp.onreadystatechange = function() {
               if (this.readyState == 4 && this.status == 200) {
                 var myArr = JSON.parse(this.responseText);
                 console.log(myArr);
                 if(myArr.length > 0)
                 {
                     console.log(myArr);
                     for(var i=0; i< myArr.length ; i++)
                     {
                         diary_notes[myArr[i].user_diary_date] = myArr[i].user_diary_note;
                         var note = diary_notes[myArr[i].user_diary_date] ? diary_notes[myArr[i].user_diary_date] : '';
         	            document.getElementById('diary-note').value = note;
         	            
         	            document.getElementById("diary-note").disabled = true;
                         document.getElementById("edit-btn").style.visibility = 'visible';
                         document.getElementById("edit-btn").style.display = 'block';
                         
                         document.getElementById("clear-btn").style.visibility = 'hidden';
                         document.getElementById("clear-btn").style.display = 'none';
                         
                         document.getElementById("diary-note").style.fontFamily = "cursive";
                         document.getElementById("diary-note").style.color = "gray";
                     }
                     
                 }
                 else
                 {
                     document.getElementById('diary-note').value = "";
                     editNote();
                 }
               }
             };
             xmlhttp.open("GET", url, true);
             xmlhttp.send();
         }
         
         var days_dif = 0;
         function getPrevDate(){
         	days_dif = days_dif - 1;
         	var date = new Date();
         	date.setDate(date.getDate() + days_dif);
         	display_date(date);
         	diaryUpdate(getDiaryDateKey(date));
         	//var note = diary_notes[getDiaryDateKey(date)] ? diary_notes[getDiaryDateKey(date)] : '';
         	//document.getElementById('diary-note').value = note;
         	
         	//while (document.getElementById('pictures').hasChildNodes()) {
         	//  document.getElementById('pictures').removeChild(document.getElementById('pictures').firstChild);
         	//}
         	//for (var i = 0; i < diary_images[getDiaryDateKey(date)].length; i++){
         	//	var newImage = document.createElement('img')
         	//	newImage.setAttribute('class', 'image-item')
         	//	newImage.src = diary_images[getDiaryDateKey(date)][i]
         	//	
         	//	var liItem = document.createElement('li')
         	//	liItem.appendChild(newImage)
         	//	
         	//	document.getElementById('pictures').appendChild(liItem)
         	//}
         }
         function getNextDate(){
         	days_dif = days_dif + 1;
         	var date = new Date();
         	date.setDate(date.getDate() + days_dif);
         	display_date(date);
         	diaryUpdate(getDiaryDateKey(date));
         	//var note = diary_notes[getDiaryDateKey(date)] ? diary_notes[getDiaryDateKey(date)] : '';
         	//document.getElementById('diary-note').value = note;
         	//
         	//while (document.getElementById('pictures').hasChildNodes()) {
         	//  document.getElementById('pictures').removeChild(document.getElementById('pictures').firstChild);
         	//}
         	//for (var i = 0; i < diary_images[getDiaryDateKey(date)].length; i++){
         	//	var newImage = document.createElement('img')
         	//	newImage.setAttribute('class', 'image-item')
         	//	newImage.src = diary_images[getDiaryDateKey(date)][i]
         		
         	//	var liItem = document.createElement('li')
         	//	liItem.appendChild(newImage)
         		
         	//	document.getElementById('pictures').appendChild(liItem)
         	//}
         }
         
         function saveNote() {
             Swal.fire({
                  title: 'Do you want to save?',
                  showDenyButton: true,
         		  showLoaderOnDeny: false,
         		  confirmButtonText: 'Yes',
                  denyButtonText: `No`,
         		  focusConfirm: false,
                }).then((result) => {
                    var date = new Date();
                 	date.setDate(date.getDate() + days_dif);
                  /* Read more about isConfirmed, isDenied below */
                  if (result.isConfirmed) {
                    
                 	console.log(document.getElementById('diary-note').value);
                 	var url = "https://buddytorest.co.uk/php_request?func=changeDiary&user_id=" + getCookie("user_buddy") + "&user_diary_date=" + encodeURIComponent(getDiaryDateKey(date)) + "&user_diary_note=" +  encodeURIComponent(document.getElementById('diary-note').value);
                     var xmlhttp = new XMLHttpRequest();
                     xmlhttp.onreadystatechange = function() {
                       if (this.readyState == 4 && this.status == 200) {
                         var myArr = JSON.parse(this.responseText);
                         if(myArr)
                         {
                             //diary_notes[getDiaryDateKey(date)] = document.getElementById('diary-note').value;
                         	document.getElementById('diary-note').value = diary_notes[getDiaryDateKey(date)];
                         	
                         	document.getElementById("diary-note").disabled = true;
                             document.getElementById("edit-btn").style.visibility = 'visible';
                             document.getElementById("edit-btn").style.display = 'block';
                             
                             document.getElementById("clear-btn").style.visibility = 'hidden';
                             document.getElementById("clear-btn").style.display = 'none';
                         }
                         else
                         {
                             document.getElementById("email_error").style.visibility = "visible";
                             document.getElementById("password_error").style.visibility = "visible";
                             
                             
                         }
                         document.getElementById("diary-note").style.fontFamily = "cursive";
                         document.getElementById("diary-note").style.color = "gray";
                       }
                     };
                     xmlhttp.open("GET", url, true);
                     xmlhttp.send();
                     document.getElementById("diary-note").style.fontFamily = "cursive";
                     document.getElementById("diary-note").style.color = "gray";
                  }
                  else
                  {
                      diaryUpdate(getDiaryDateKey(date));
                      document.getElementById("diary-note").style.fontFamily = "cursive";
                      document.getElementById("diary-note").style.color = "gray";
                  }
                });
         	
         	
         }
         
         function clearNote(){
             document.getElementById("diary-note").value = "";
         }
         function editNote(){
             document.getElementById("diary-note").disabled = false;
             document.getElementById("edit-btn").style.visibility = 'hidden';
             document.getElementById("edit-btn").style.display = 'none';
             
             document.getElementById("clear-btn").style.visibility = 'visible';
             document.getElementById("clear-btn").style.display = 'block';
             
             document.getElementById("diary-note").style.fontFamily = "Arial";
             document.getElementById("diary-note").style.color = "black";
         }
      </script>
      <style>
         .note{
         color:black;
         font-size:20px;
         font-family: Segoe Print;
         }
         .images{
         }
         .content{
         overflow: auto;
         position: relative;
         background-color: #333;
         height: auto;
         float: left;
         }
         .content li{
         overflow: hidden;
         border: 7px solid rgba(255,255,255,.1);
         }
         .content.light, .content.light { background-color: #c2beb2; }
         .content.light li a{ border: 7px solid rgba(255,255,255,.4); }
         #content-2{
         width: 100%;
         height: 600px;
         }
         #content-2{ padding: 55px 10px; }
         @media screen and (min-width: 601px) {
         #titile_desktop{
         display:block !important;
         visibility:visible !important;
         }
         #titile_mobile{
         display:none !important;
         visibility:hidden !important;
         }
         #next_prev {
         font-size: 30px;
         }
         #next_month {
         font-size: 50px;
         }
         #next_date {
         font-size: 150px;
         }
         #next_weekday {
         font-size: 40px;
         }
         }
         /* If the screen size is 600px wide or less, set the font-size of 
         <div>
         to 30px */
         @media screen and (max-width: 600px) {
         #titile_desktop{
         display:none !important;
         visibility:hidden !important;
         }
         #titile_mobile{
         display:block !important;
         visibility:visible !important;
         }
         #diary-note{
         height:230px !important;
         margin-left:7px;
         }
         #content-2{
         height:230px !important;
         margin-left:7px;
         }
         #next_prev {
         font-size: 15px;
         }
         #next_month {
         font-size: 25px;
         }
         #next_date {
         font-size: 75px;
         }
         #next_weekday {
         font-size: 20px;
         }
         }
      </style>
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
            <div class="col-sm-3" id="date_time_desktop">
               <div class="col text-center">
                  <i id="next_prev" class="bi bi-caret-up-fill" style="color:black" onClick="getPrevDate()"></i>
                  <h3 id="next_month"><span id='month' ></span></h3>
                  <h1 id="next_date"><span id='date' ></span></h1>
                  <h3 id="next_weekday"><span id='weekday' ></span></h3>
                  <i id="next_prev" class="bi bi-caret-down-fill" style="color:black" onClick="getNextDate()"></i>
               </div>
            </div>
            <div class="col-sm-9" style="height: 100%;">
               <textarea id="diary-note" class="row note" style="background-color:#E8E8E8; margin-top:20px; height:500px;white-space: pre-wrap;font-family: cursive;color:gray;"></textarea>
               <div class="d-flex justify-content-end" style="width:100%">
                  <button type="button" id="clear-btn" class="btn" style="width:100px;margin-right:7px; margin-top:10px;color:black;border-color: black;font-weight:bold" onClick="clearNote();">CLEAR</button>
                  <button type="button" id="edit-btn" class="btn" style="width:100px;margin-right:7px; margin-top:10px;color:black;border-color: black;font-weight:bold" onClick="editNote();">EDIT</button>
                  <button type="button" class="btn" style="width:100px;margin-right:7px; margin-top:10px;color:black;border-color: black;font-weight:bold" onClick="saveNote();">SAVE</button>
               </div>
            </div>
            
         </div>
      </div>
   </body>
</html>
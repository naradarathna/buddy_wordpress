<?php
   if(!isset($_COOKIE["user_buddy"])) {
       header('Location: https://buddytorest.co.uk/');
       exit;
   }
   ?>
<!doctype html>
<html lang="en-US">
   <head>
      <title>BUDDY | Workload Organizer</title>
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
   <body onload="fillCalendar();">
      <style>
        .swal2-validation-message{
            font-size:15px !important;
            color:red;
            padding: 0 0 0 0 !important;
            margin: 0 0 0 0 !important;
        }
         .swal-wide{
         width:500px !important;
         }
         .swal2-confirm {
         font-size: 15px !important;
         width:80px;
         background:#8A8AFF !important;
         border: 1px solid #8A8AFF !important;
         color:white !important;
         }
         .swal2-confirm:hover {
         font-size: 15px !important;
         width:80px;
         background:white !important;
         border: 1px solid blue !important;
         color:blue !important;
         }
         .swal2-deny{
         font-size: 15px !important;
         width:80px;
         background:#FF8A8A !important;
         border: 1px solid #FF8A8A !important;
         color:white !important;
         }
         .swal2-deny:hover{
         font-size: 15px !important;
         width:80px;
         background:white !important;
         border: 1px solid red !important;
         color:red !important;
         }
         .content-calendar {
         display: grid;
         grid-template-columns: 1fr;
         grid-template-rows: auto auto 1fr;
         grid-gap: 20px;
         border: 25px solid transparent;
         box-sizing: border-box;
         font-size: 1.8em;
         }
         header {
         display: grid;
         grid-template-columns: auto 1fr auto;
         grid-template-rows: auto auto;
         }
         header i:hover {
         cursor: pointer;
         }
         #year {
         grid-row: 1;
         grid-column: 2;
         justify-self: center;
         font-size: 2.5em;
         }
         #month {
         grid-row: 2;
         grid-column: 2;
         justify-self: center;
         font-size: 3em;
         }
         #prev, #next {
         grid-row: 1 / span 2;
         align-self: center;
         }
         button {
         border: 5px solid #00A36C;
         color: #a8f7dc;
         padding: 5px;
         margin: 0px 20px;
         background: red;
         font-size: 1.5em;
         }
         button:hover {
         background: #BE946A;
         }
         button:active {
         border: 5px solid #A9ABBE;
         color: #A9ABBE;
         background: #A52430s;
         position: relative;
         top: 2px;
         left: 2px;
         }
         nav {
         display: grid;
         grid-template-columns: repeat(7, 1fr);
         grid-gap: 10px;
         justify-items: center;
         }
         #abr {
         display: none;
         }
         main {
         display: grid;
         grid-template-columns: repeat(7, 1fr);
         grid-auto-rows: 1fr;
         grid-gap: 10px;
         }
         .red {
         color: #A52430;
         }
         .day {
         background: white;
         min-height:300px;
         max-height:300px;
         }
         .red.day {
         background: white;
         }
         .today {
         background: #DEDEDE;
         font-weight: bold;
         }
         @media (max-width: 1200px) {
         body {
         font-size: 1.2em;
         }
         #days {
         display: none;
         font-size: 2em;
         }
         #abr {
         display: grid;
         }
         button {
         border: 3px solid #A52430;
         border-radius: 15px;
         padding: 10px;
         margin: 0px 10px;
         font-size: 1.2em;
         }
         }
      </style>
      <video defaultMuted playsinline autoplay muted loop id="backgroundVideo">
          <source src="https://buddytorest.co.uk/wp-content/plugins/buddy/assets/videos/background.mp4" type="video/mp4">
          Your browser does not support HTML5 video.
        </video>
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
      <div class="content-calendar">
         <header>
            <!--<h1 id="year"></h1>
               <h2 id="month"></h2>-->
            <h1 id="month"></h1>
            <i id="prev" class="bi bi-caret-left-fill" style="color:black;font-size:80px;" onClick="prev()"></i>
            <i id="next" class="bi bi-caret-right-fill" style="color:black;font-size:80px;" onClick="next()"></i>
            <!--<button id="prev" onclick="prev();">&lt;&lt;&lt;</button>
               <button id="next" onclick="next();">&gt;&gt;&gt;</button>-->
         </header>
         <nav id="days">
            <div class="dayname">Sunday</div>
            <div class="dayname">Monday</div>
            <div class="dayname">Tuesday</div>
            <div class="dayname">Wednesday</div>
            <div class="dayname">Thursday</div>
            <div class="dayname">Friday</div>
            <div class="dayname">Saturday</div>
         </nav>
         <nav id="abr">
            <div class="dayname red">Sun</div>
            <div class="dayname">Mon</div>
            <div class="dayname">Tue</div>
            <div class="dayname">Wed</div>
            <div class="dayname">Thu</div>
            <div class="dayname">Fri</div>
            <div class="dayname">Sat</div>
         </nav>
         <main></main>
      </div>
      <script>
         var date = new Date();
         
         function fillCalendar() {
                var saved_items = {};
                // Get all tasks
            	var tasksUrl = "https://buddytorest.co.uk/php_request?func=getTasks&user_task_month=" + (date.getMonth() + 1) + "&user_id=" + getCookie("user_buddy");
            	
                const tasksRequestXhttp = new XMLHttpRequest();
                tasksRequestXhttp.onload = function() {
                	if (this.readyState == 4 && this.status == 200) {
                		var responseArr = JSON.parse(this.responseText);
                        if(responseArr)
                        {
                            for(var i=0; i< responseArr.length ; i++)
                            {
                                if(saved_items[parseInt(responseArr[i].user_task_date.split("-")[2])])
                                {
                                    
                                    saved_items[parseInt(responseArr[i].user_task_date.split("-")[2])].push.apply(saved_items[parseInt(responseArr[i].user_task_date.split("-")[2])],[[responseArr[i].user_task_id,responseArr[i].user_task_title,responseArr[i].user_task_start_time,responseArr[i].user_task_end_time,responseArr[i].user_task_description,responseArr[i].user_task_location,responseArr[i].user_task_is_reminder > 0 ? "true" : "false",responseArr[i].user_task_reminding_time]]);
                                }
                                else
                                {
                                    saved_items[parseInt(responseArr[i].user_task_date.split("-")[2])] = [[responseArr[i].user_task_id,responseArr[i].user_task_title,responseArr[i].user_task_start_time,responseArr[i].user_task_end_time,responseArr[i].user_task_description,responseArr[i].user_task_location,responseArr[i].user_task_is_reminder > 0 ? "true" : "false",responseArr[i].user_task_reminding_time]];
                                }
                            }
                            var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                    		var month = document.getElementById("month");
                    		var year = document.getElementById("year");
                            
                            var calender_title = document.getElementById("month");
                    		calender_title.innerHTML = monthNames[date.getMonth()] + " " + date.getUTCFullYear();
                    		
                    		var lastDay = new Date(date.getUTCFullYear(), date.getMonth() + 1, 0).getDate();
                    
                    		var main = document.querySelector("main");
                    		for (var dayNumber = 1; dayNumber <= lastDay; dayNumber++) {
                    			var no_of_events = 0;
                    			if(saved_items[dayNumber])
                    			{
                    			    
                    				no_of_events = saved_items[dayNumber].length;
                    			}
                    			
                    			var day = document.createElement('div');
                    			day.className = "day";
                    			day.addEventListener('click', myFunc, false);
                                day.myParam = dayNumber;
                                
                                function myFunc(event)
                                {
                                    var event_date = date.getUTCFullYear() + "-" + (date.getMonth() + 1) + "-" + event.currentTarget.myParam;
                                    GFG_Fun("0||00:00|00:00| | |True|10|"+ event_date);
                                  
                                }
                    			
                    			var day_items = document.createElement('div');
                    			day_items.style.cssText = 'margin: 10px';
                    			
                    			
                    			var day_item = document.createElement('p');
                    			day_item.innerText = dayNumber;
                    			day_item.style.cssText = 'margin:0px; background: transparent; color:black; padding-left:5px';
                    			day_item.id = currentItem;
                    			day_items.appendChild(day_item);
                    			var horizontal_line = document.createElement('hr');
                    			day_items.appendChild(horizontal_line);
                    			for(var currentItem = 0; currentItem < no_of_events; currentItem++)
                    			{
                    				if(saved_items[dayNumber])
                    				{
                    					var meetingId = saved_items[dayNumber][currentItem][0];
                    					var title = saved_items[dayNumber][currentItem][1];
                    					var timeStart = saved_items[dayNumber][currentItem][2];
                    					var timeEnd = saved_items[dayNumber][currentItem][3];
                    					var description = saved_items[dayNumber][currentItem][4];
                    					var venue = saved_items[dayNumber][currentItem][5];
                    					var setReminder = saved_items[dayNumber][currentItem][6];
                    					var remindTime = saved_items[dayNumber][currentItem][7];
                    					
                    					var day_item = document.createElement('p');
                    					day_item.style.cssText = "margin:5px; border-color: black;border-style: solid; color:black; padding-left:5px;cursor: pointer;border-radius:10px;background-color:white;";
                    					var day_item_title = document.createElement('p');
                    					day_item_title.innerText = title;
                    					day_item_title.style.cssText = 'margin:0px; padding-left:5px; font-size:15px;font-weight:bold';
                    					day_item.id = meetingId;
                    					
                    					var day_item_time = document.createElement('p');
                    					if(timeStart == timeEnd){
                    					    day_item_time.innerText = timeStart.split(":")[0] + ":" + timeStart.split(":")[1];
                    					}
                    					else{
                    					    day_item_time.innerText = timeStart.split(":")[0] + ":" + timeStart.split(":")[1] + " To " + timeEnd.split(":")[0] + ":" + timeEnd.split(":")[1];
                    					}
                    					
                    					day_item_time.style.cssText = 'margin:0px;padding-left:5px;font-size:15px;';
                    					
                    					day_item.appendChild(day_item_title);
                    					day_item.appendChild(day_item_time);
                    					
                    					day_item.addEventListener('click', myFunc2, false);
                    					day_item.myParam = meetingId + "|" + title + "|" + timeStart + "|" + timeEnd + "|" + description + "|" + venue + "|" + setReminder + "|" + remindTime + "|" + date.getUTCFullYear() + "-" + (date.getMonth() + 1) + "-" + dayNumber;
                                        function myFunc2(event)
                                        {
                                            GFG_Fun(event.currentTarget.myParam);
                                            event.stopPropagation();
                                          
                                        }
                    					
                    					
                    
                    					day_items.appendChild(day_item);
                    				}
                    			}
                    			day.appendChild(day_items);
                    
                    			if (dayNumber == 1)
                    				day.style.gridColumn = new Date(date.getUTCFullYear(), date.getMonth(), 1).getDay() + 1;
                    			if (new Date(date.getUTCFullYear(), date.getMonth(), dayNumber).getDay() == 0)
                    				day.className += " red";
                    
                    			var today = new Date();
                    			if (dayNumber == today.getDate() && date.getUTCFullYear() == today.getUTCFullYear() && date.getMonth() == today.getMonth())
                    				day.className += " today";
                    
                    			main.appendChild(day);
                    		}
                        }
                        else
                        {
                            alert("Already a user exists for this email");
                            
                        }
                	}
                };
                tasksRequestXhttp.open("GET", tasksUrl, true);
                tasksRequestXhttp.send();
                
                
         	
         }
         
         function removeDays() {
         	var main = document.querySelector("main");
         	main.innerHTML = "";
         }
         
         function prev() {
         	removeDays();
         
         	date = new Date(date.getUTCFullYear(), date.getMonth(), 0);
         
         	fillCalendar();
         }
         
         function next() {
         	removeDays();
         
         	date = new Date(date.getUTCFullYear(), date.getMonth() + 1, 2);
         
         	fillCalendar();
         }
         
         document.ondblclick = function() {
         	// Change alignment of day numbers.
         	var days = document.getElementsByClassName("day");
         	for (var i = 0; i < days.length; i++) {
         		days[i].style.alignItems = days[i].style.alignItems == "end" ? "start" : "end";
         		days[i].style.justifyItems = days[i].style.justifyItems == "end" ? "start" : "end";
         	}
         };
         
         function GFG_Fun(meetingContent) {
         	(async () => {
         		const { value: formValues } = await Swal.fire({
         		  customClass: 'swal-wide',
         		  html:
         			'<div style="background-color:white;font-size:15px">'+
         			'<div style="padding-top:10px">'+
         			'<input id="title_input" type="text" placeholder="Title" style="width:450px;font-size:20px;font-weight:bold"/>'+
         			'</div>'+
         			'<div style="padding-top:15px">'+
         			'<label style="padding-right:5px;">From</label><input id="start_time" type="time" style="width:182px;font-size:18px"><label style="padding-right:5px;padding-left:5px;">&nbsp;&nbsp;&nbsp;To</label><input id="end-time" type="time" style="width:182px;font-size:18px">'+
         			'</div>'+
         			'<div style="padding-top:10px">'+
         			'<label style="padding-right:5px;">Location</label><input id="venue" input type="text" style="width:380px;font-size:15px"/>'+
         			'</div>'+
         			'<div style="padding-top:10px;">'+
         			'<label style="padding-right:5px;vertical-align: top;">Description</label><textarea id="description" type="text" style="width:360px;height:150px;font-size:15px;resize: none;overflow-y: scroll;"/></textarea>'+
         			'</div>'+
         			'<div style="padding-top:10px">'+
         			'<input id="remind_enable" type="checkbox"><label style="padding-right:5px;padding-left:5px;"> set reminder before </label><input id="remind_time" type="text" style="width:50px;font-size:15px"/><label style="padding-right:5px;padding-left:5px;"> mins </label>'+
         			'</div>'+
         			'</div><hr>',
         		  showDenyButton: true,
         		  denyButtonText: 'Delete',
         		  showLoaderOnDeny: false,
         		  confirmButtonText: 'Save',
         		  focusConfirm: false,
         		  preConfirm: () => {
         		      if(document.getElementById('title_input').value.length > 0)
         		      {
         		          return meetingContent.split("|")[0] + "|" +  document.getElementById('title_input').value + "|" + document.getElementById('start_time').value + "|" +  document.getElementById('end-time').value + "|" + document.getElementById('venue').value + "|" + document.getElementById('description').value + "|" + document.getElementById('remind_enable').checked + "|" + document.getElementById('remind_time').value + "|" + meetingContent.split("|")[8];
         		      }
         		      else{
         		          Swal.showValidationMessage(`Title is required`);
         		      }
         			
         		  },
         		  preDeny: () => {
         			return meetingContent.split("|")[0];
         		  },
         		  didRender: () => {
         			var content = meetingContent.split("|");
         			document.getElementById('title_input').value = content[1]
         			document.getElementById('start_time').value = content[2]
         			document.getElementById('end-time').value = content[3]
         			document.getElementById('venue').value = content[5]
         			document.getElementById('description').value = content[4]
         			document.getElementById('remind_enable').checked  = (content[6] == 'true')
         			document.getElementById('remind_time').value = content[7]
         			
         			
         		  },
         		})
         
         		if (formValues) {
         		    var output = formValues.split("|");
         		    if(output.length == 1)
         		    {
         		        Swal.fire({
                          title: 'Do you want to delete?',
                          showDenyButton: true,
                 		  denyButtonText: 'Delete',
                 		  showLoaderOnDeny: false,
                 		  confirmButtonText: 'Yes',
                          denyButtonText: `No`,
                 		  focusConfirm: false,
                        }).then((result) => {
                          /* Read more about isConfirmed, isDenied below */
                          if (result.isConfirmed) {
                            // Delete task
                        	var taskUrl = "https://buddytorest.co.uk/php_request?func=deletetask&user_task_id=" + formValues;
                            const taskRequestXhttp = new XMLHttpRequest();
                            taskRequestXhttp.onload = function() {
                            	if (this.readyState == 4 && this.status == 200) {
                            		var responseArr = JSON.parse(this.responseText);
                                    if(responseArr)
                                    {
                                        removeDays();
                                        fillCalendar();
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
                        })
         		        
         		    }
         		    else
         		    {
         		        var user_task_id = output[0];
            			    var user_id = getCookie("user_buddy");
            				var user_task_title = output[1];
            				var user_task_date = output[8] ;
            				var user_task_start_time = output[2] + ":00";
            				var user_task_end_time = (output[3] == "00:00") ? output[2] + ":00" : output[3] + ":00";
            				var user_task_location = output[4];
            				var user_task_description = output[5];
            				var user_task_is_reminder  = output[6] == 'true' ? 1 : 0;
            				var user_task_reminding_time = output[7];
            				
                            // Get all tasks
                        	var taskUrl = "https://buddytorest.co.uk/php_request?func=task&user_task_id=" + user_task_id + "&user_id=" + user_id + "&user_task_title=" + encodeURIComponent(user_task_title) + "&user_task_date=" + encodeURIComponent(user_task_date) + "&user_task_start_time=" + encodeURIComponent(user_task_start_time) + "&user_task_end_time=" + encodeURIComponent(user_task_end_time) + "&user_task_location=" + encodeURIComponent(user_task_location) + "&user_task_description=" + encodeURIComponent(user_task_description) + "&user_task_is_reminder=" + user_task_is_reminder + "&user_task_reminding_time=" + user_task_reminding_time;
                            const taskRequestXhttp = new XMLHttpRequest();
                            taskRequestXhttp.onload = function() {
                            	if (this.readyState == 4 && this.status == 200) {
                            		var responseArr = JSON.parse(this.responseText);
                                    if(responseArr)
                                    {
                                        removeDays();
                                        fillCalendar();
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
         		    
         		}
         	})()
         };
      </script>
   </body>
</html>
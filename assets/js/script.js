function getCookie(name) {
  var value = "; " + document.cookie;
  var parts = value.split("; " + name + "=");
  if (parts.length == 2) return parts.pop().split(";").shift();
}

function toHome(){
    window.location.href = 'https://buddytorest.co.uk/';
}

function logout(){
    var userExistRequestUrl = "https://buddytorest.co.uk/php_request?func=logout";
    const userExistRequestXhttp = new XMLHttpRequest();
    userExistRequestXhttp.onload = function() {
    	if (this.readyState == 4 && this.status == 200) {
    		var responseArr = JSON.parse(this.responseText);
            if(responseArr)
            {
                window.location.href = "https://buddytorest.co.uk/";
            }
    	}
    };
    userExistRequestXhttp.open("GET", userExistRequestUrl, true);
    userExistRequestXhttp.send();
}

function validate_email(mail) 
{
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(mail.match(mailformat)) {
        return true;
    }
    else {
        return false;
    }
}

function show_error(msg) {
    document.getElementById("error").style.display = "block";
    document.getElementById("error").style.visibility = "visible";
    document.getElementById("error-msg").innerHTML  = msg;
}
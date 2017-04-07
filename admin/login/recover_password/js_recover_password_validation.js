//Credits must stay intact
//Script by Samiuddin. Samiuddin phpdevsami@gmail.com | samiun_@hotmail.com
//For more scripts or tutorials visit http://www.webdevtown.com
//If this script is uploaded on any website without credits, it will be taken down.


function isEmailValid(){
	var email									= document["forms"]["recover_password"]["email"];
	var error_email 							= document.getElementById("error_email");
	error_email.innerHTML						= "";
	email.style.backgroundColor					= "white";
	var re										= /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	
	if( !re.test(email.value) ){
		error_email.innerHTML					= "<i>Invalid email provided.</i>";
		email.style.backgroundColor				= "yellow";
		return false;
	}else{
		return true;
	}
}

document["forms"]["recover_password"].onsubmit = function(){
	return isEmailValid();
}
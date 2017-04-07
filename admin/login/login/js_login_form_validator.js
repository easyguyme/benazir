//Credits must stay intact
//Script by Samiuddin. Samiuddin phpdevsami@gmail.com | samiun_@hotmail.com
//For more scripts or tutorials visit http://www.webdevtown.com
//If this script is uploaded on any website without credits, it will be taken down.

	
LoginValidator = {

	setData : function(){
		this.username							= document["forms"]["login"]["username"];
		this.password							= document["forms"]["login"]["password"];
		this.error_username						= document.getElementById("error_username");
		this.error_password						= document.getElementById("error_password");
		this.username_pattern					= /^[0-9a-zA-Z]+$/;  
		this.username.style.backgroundColor		= "white";
		this.password.style.backgroundColor		= "white";
	},
	
	areFieldsEmpty : function(){
		if( (this.username.value.length == 0) || (this.password.value.length == 0) ){	
			this.error_password.innerHTML				= "<i>Fill all the fields</i>";
			return true;
		}else{
			return false;
		}
	},
	
	isUsernameValid : function(){
		var matched									= username.value.search(this.username_pattern);
		if(matched !== -1){
			return true;
		}else{
			error_username.innerHTML			= "<i>Invalid username. Only Numbers and Letters allowed.</i>";
			username.style.backgroundColor		= "yellow";
			return false;
		}
	},
	
	isPasswordValid : function(){
		if(this.password.value.length > 5){
			return true;
		}else{
			this.password.style.backgroundColor			= "yellow";
			this.error_password.innerHTML				= "<i>Password cannot be smaller than 5 characters.</i>";
			return false;
		}
	}
	
}

document["forms"]["login"].onsubmit = function(){
	LoginValidator.setData();
	var areFieldsEmpty		= LoginValidator.areFieldsEmpty();

	if(!areFieldsEmpty){
		var isUsernameValid		= LoginValidator.isUsernameValid();
		var isPasswordValid		= LoginValidator.isPasswordValid();
		
		if(isUsernameValid && isPasswordValid){
			return true;
		}else{
			return false;
		}
	}else{
		return false;
	}
}

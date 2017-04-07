//Credits must stay intact
//Script by Samiuddin. Samiuddin phpdevsami@gmail.com | samiun_@hotmail.com
//For more scripts or tutorials visit http://www.webdevtown.com
//If this script is uploaded on any website without credits, it will be taken down.

validateChangePassword = {


	set_data : function(){
		this.new_password					= document["forms"]["change_password"]["new_password"];
		this.new_password_two				= document["forms"]["change_password"]["new_password_two"];		
		this.error							= document.getElementById("error").innerHTML = "";
	},

	are_fields_filled : function(){
	
		if( (	this.new_password.value.length > 5		)	&&
			(	this.new_password_two.value.length > 5	) ){
			return true;
		}else{
			error.innerHTML = "<i>Leave no field empty. Make sure password is atleast 5 characters long</i>";
			return false;
		}
		
	},
	
	
	do_passwords_match : function(){
		if(this.new_password.value == this.new_password_two.value){
			return true;
		}else{
			error.innerHTML = "<i>Passwords do not match</i>";
			return false;
		}
	}
	
	
	
}

document["forms"]["change_password"].onsubmit = function(){
	validateChangePassword.set_data();
	var are_fields_filled = validateChangePassword.are_fields_filled();
	if(are_fields_filled){
		do_passwords_match = validateChangePassword.do_passwords_match();
		if(do_passwords_match){
			return true;
		}else{
			return false;
		}
	}else{
		return false;
	}
		
}
<?PHP
    //Credits must stay intact
    //Script by Samiuddin. Samiuddin phpdevsami@gmail.com | samiun_@hotmail.com
    //For more scripts or tutorials visit http://www.webdevtown.com
    //If this script is uploaded on any website without credits, it will be taken down.

	//this function checks if value is set. 
	//It's used in form value to remember the values..
	//..and showing empty form if there's an error.
	function is_value_set($field_name){
		if(isset($_POST["$field_name"])){
			return $_POST["$field_name"];
		}
	}
	
	
	

?>
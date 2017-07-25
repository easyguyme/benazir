<?PHP
    
	function is_value_set($field_name){
		if(isset($_POST["$field_name"])){
			return $_POST["$field_name"];
		}
	}
	
	
	

?>
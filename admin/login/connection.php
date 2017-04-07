<?PHP
	try {
		$user					= 'root';
		$pass					= 'password';
		$host					= 'localhost';
		$dbname					= 'login_db';
		$dbh					= new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $user, $pass);
	} catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "<br/>";
		die();
	}
?>
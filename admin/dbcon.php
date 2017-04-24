<?PHP
try {
    $user					= 'root';
    $pass					= '';
    $host					= 'localhost';
    $dbname					= 'umande';
    $conn					= new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
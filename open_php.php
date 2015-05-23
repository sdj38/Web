<?php
	$servername = getenv('OPENSHIFT_MYSQL_DB_HOST');
	$username = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
	$password = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
	$port = getenv('OPENSHIFT_MYSQL_DB_PORT');
	$dbname = "web";
	// Create connection
	#$servername = 'localhost';
	#$user = 'sdj';
	#$password = 'password';
	#$dbname='sandwich_db';
	try{
	$conn = new PDO('mysql:host='.$servername.';dbname='.$dbname, $user, $password);
	}
	// Check connection
	catch (PDOException $e){
	echo "error!: " . $e.getMessage();
	}
	

?>
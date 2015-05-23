<?php
	$servername = getenv('OPENSHIFT_MYSQL_DB_HOST');
	$username = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
	$password = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
	$port = getenv('OPENSHIFT_MYSQL_DB_PORT');
	$dbname = "sandwich_db";
	// Create connection
	#$servername = 'localhost';
	#$user = 'sdj';
	#$password = 'password';
	#$dbname='sandwich_db';
//echo "host:$servername:$port dbname:$dbname user:$username password:$password<br >\n";
	try{
	$conn = new PDO("mysql:host=$servername:$port;dbname=$dbname", $username, $password);
	}
	// Check connection
	catch (PDOException $e){
	echo "error!: " . $e.getMessage();
	}
	

?>
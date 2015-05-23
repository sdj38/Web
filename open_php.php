<?php

define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST'));
define('DB_PORT',getenv('OPENSHIFT_MYSQL_DB_PORT')); 
define('DB_USER',getenv('OPENSHIFT_MYSQL_DB_USERNAME'));
define('DB_PASS',getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
$dbname = "web";

$dsn = 'mysql:dbname='.$dbname.';host='.DB_HOST.';port='.DB_PORT;
$conn = new PDO($dsn, DB_USER, DB_PASS);

?>
<?php
session_start();
 include("open_php.php");
?>
<?php
$name = $_POST['user'];
$pwd = $_POST['pswd'];
$_SESSION["user_name"] = $name;

 $password = password_hash($pswd, PASSWORD_DEFAULT);

//if (password_verify('bad-password', $passwordHash)) {
    // Correct Password
//} else {
    // Wrong password
//}
//$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );


$query = "INSERT INTO buyer (name,password) VALUES(:name,:password)";
	$statement = $conn->prepare($query);
	$statement->bindParam(':name', $name);
	$statement->bindParam(':password', $password);
	$statement->execute();
	
	
	$_SESSION['msg'] = "";
	header("Location: sandwhich_shop.php");
die(); 
	
?>
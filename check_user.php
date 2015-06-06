<?php
session_start();
 include("open_php.php");
?>
<?php
$name = $_POST['user'];
$pwd = $_POST['pswd'];
$_SESSION["user_name"] = $name;

// $password = password_hash('secret-password', PASSWORD_DEFAULT);


$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

$query = "SELECT name FROM buyer b WHERE b.name ='" .$name."'";
	$result = $conn->query($query);
		
		$row = $result->fetch(PDO::FETCH_ASSOC);
		$value = $row['name'];
		//echo "$value";
		if($value == ""){
		die();
		}else{
		$query = "SELECT password FROM buyer b WHERE b.name ='" .$name."'";
	$result = $conn->query($query);
		
		$row = $result->fetch(PDO::FETCH_ASSOC);
		$value = $row['password'];
		if (password_verify($pswd, $value)) {
		$_SESSION['msg'] = "";
		header("Location: sandwhich_shop.php");
		die(); 
    // Correct Password
		} else {
		 echo "incorrect password!";
		 header("Location: signin.php");
		 $_SESSION['msg'] = "Incorrect password!";
		 die();
 
}
		 
		}
		
		
	
	
	
?>
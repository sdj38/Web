<?php
session_start();
 include("open_php.php");
 require("password.php");
?>
<?php
$name = $_POST['user'];
$pwd = $_POST['pswd'];
$_SESSION["user_name"] = $name;


$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

		$query = "SELECT password FROM buyer b WHERE b.name ='" .$name."'";
	$result = $conn->query($query);
		
		$row = $result->fetch(PDO::FETCH_ASSOC);
		$value = $row['password'];
		if (password_verify($pwd, $value)) {
		$_SESSION['msg'] = "";
		header("Location: sandwhich_shop.php");
		die(); 
    
		} else {
		 echo "incorrect password!";
		 header("Location: signin.php");
		 $_SESSION['msg'] = "Incorrect password!";
		 die();
 
}
		 
		
		
		
	
	
	
?>
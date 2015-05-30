<?php
session_start();
 include("open_php.php");
?>
<?php
$name = $_POST['user'];
$pwd = $_POST['pswd'];
$_SESSION["user_name"] = $name;


//$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

$query = "SELECT name FROM buyer b WHERE b.name ='" .$name."'";
	$result = $conn->query($query);
		
		$row = $result->fetch(PDO::FETCH_ASSOC);
		$value = $row['name'];
		//echo "$value";
if($value == ""){	
$query = "INSERT INTO buyer (name,password) VALUES(:name,:password)";
	$statement = $conn->prepare($query);
	$statement->bindParam(':name', $name);
	$statement->bindParam(':password', $pwd);
	$statement->execute();
	}else{
	$query = "SELECT password FROM buyer b WHERE b.name ='" .$name."'";
	$result = $conn->query($query);
		
		$row = $result->fetch(PDO::FETCH_ASSOC);
		$value = $row['password'];
		if($value != $pwd){
		 echo "incorrect password!";
		 header("Location: login.php");
		 $_SESSION['msg'] = "Incorrect password!";
		 die();
		}
		
		}
	
	$_SESSION['msg'] = "";
	header("Location: sandwhich_shop.php");
die(); 
	
?>
<?php
 session_start();
 include("open_php.php");
?>
<?php
$meat = $_POST['Meat'];
$cheese = $_POST['Cheese'];
$veggie = $_POST['Veggie'];
$condiment = $_POST['Condiment'];
$bread = $_POST['bread'];
$totalPrice = 0;
$sammich = array("Meat","Cheese","Veggie","Condiment");


$query = "SELECT id FROM buyer b WHERE b.name ='" .$_SESSION['user_name']."'";
$result = $conn->query($query);
		
		$row = $result->fetch(PDO::FETCH_ASSOC);
		$userID = $row['id'];
		$_SESSION['user_ID'] = $userID;
		echo "$value";

$sandwichName = $bread ." with ". $meat[0]. " (". $_SESSION['user_ID'].")";
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
$query = "INSERT INTO Sandwich (name) VALUES(:name)";
	$statement = $conn->prepare($query);
	$statement->bindParam(':name', $sandwichName);
	$statement->execute();
$sandwichId = $conn->lastInsertId();
$query = "INSERT INTO Delivery (buyer_id, sandwich_id) VALUES(:buyer_id, :sandwich_id)";
	$statement = $conn->prepare($query);
	$statement->bindParam(':buyer_id', $userID);
	$statement->bindParam(':sandwich_id', $sandwichId);
	$statement->execute();
$sandwichId = $conn->lastInsertId();
$_SESSION['sandID'] = $sandwichId;
$query = "SELECT id FROM Bread b WHERE b.name ='" .$bread."'";
$result = $conn->query($query);
		
		$row = $result->fetch(PDO::FETCH_ASSOC);
		$value = $row['id'];
		echo "$value";

		
	$query = "INSERT INTO bread_sandwich (bread_id, sandwich_id) VALUES(:bread_id, :sandwich_id)";
	$statement = $conn->prepare($query);
	$statement->bindParam(':bread_id', $value);
	$statement->bindParam(':sandwich_id', $sandwichId);
	$statement->execute();
		foreach($meat as $name){
	   
		echo "$name";
		$query = "SELECT id FROM Meat m WHERE m.name ='" .$name."'";
		$result = $conn->query($query);
		
		$row = $result->fetch(PDO::FETCH_ASSOC);
		$value = $row['id'];
		echo "$value";

		
	$query = "INSERT INTO meats (meat_id, sandwich_id) VALUES(:meat_id, :sandwich_id)";
	$statement = $conn->prepare($query);
	$statement->bindParam(':meat_id', $value);
	$statement->bindParam(':sandwich_id', $sandwichId);
	$statement->execute();
	
	}
	
	foreach($cheese as $name) {
           
		echo "$name";
		$query = "SELECT id FROM Cheese m WHERE m.name ='" .$name."'";
		$result = $conn->query($query);
		
		$row = $result->fetch(PDO::FETCH_ASSOC);
		$value = $row['id'];
		echo "$value";

		
	$query = "INSERT INTO cheeses (cheese_id, sandwich_id) VALUES(:cheese_id, :sandwich_id)";
	$statement = $conn->prepare($query);
	$statement->bindParam(':cheese_id', $value);
	$statement->bindParam(':sandwich_id', $sandwichId);
	$statement->execute();
	
    }
	foreach($condiment as $name) {
           
		echo "$name";
		$query = "SELECT id FROM Condiment m WHERE m.name ='" .$name."'";
		$result = $conn->query($query);
		
		$row = $result->fetch(PDO::FETCH_ASSOC);
		$value = $row['id'];
		echo "$value";

		
	$query = "INSERT INTO condiments (condiment_id, sandwich_id) VALUES(:condiment_id, :sandwich_id)";
	$statement = $conn->prepare($query);
	$statement->bindParam(':condiment_id', $value);
	$statement->bindParam(':sandwich_id', $sandwichId);
	$statement->execute();
	
    }

	
 foreach($veggie as $name) {
           
		echo "$name";
		$query = "SELECT id FROM Veggie m WHERE m.name ='" .$name."'";
		$result = $conn->query($query);
		
		$row = $result->fetch(PDO::FETCH_ASSOC);
		$value = $row['id'];
		echo "$value";

		
	$query = "INSERT INTO veggies (veggie_id, sandwich_id) VALUES(:veggie_id, :sandwich_id)";
	$statement = $conn->prepare($query);
	$statement->bindParam(':veggie_id', $value);
	$statement->bindParam(':sandwich_id', $sandwichId);
	$statement->execute();
	
    }
	header("Location: show_sandwich.php");
die(); 
	
?>
<?php
session_start();
include('open_php.php')
?>

<html>
<head>
<title> Sandwich Shop </title>
		 <link rel="stylesheet" href="sandwhich_style.css">
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="shop.js"></script>
</head>
<body>
<?php
$sammich = array("Meat","Cheese","Veggie","Condiment");
$multiple = array("meats","cheeses","veggies","condiments");
$maxID = "SELECT max(id) from sandwich;";

$length = count($sammich);
?>
<div id="main_end">

<?php
echo "<div id='end_banner'><h1>". $_SESSION['user_name'] ."s Sandwich </h1> </div>"; 
$total_price = 0;
for($i = 0; $i < $length; $i++){
$count = 0;
$sql  =$conn->prepare( "SELECT name,price FROM ".$sammich[$i]." m join ".$multiple[$i]." ms on m.id=ms.".lcfirst($sammich[$i])."_id where ms.sandwich_id=".$_SESSION['sandID']);
$sql->execute();
			// output data of each row
			echo "<div ><table class ='end'><tr><th colspan='2'>".$sammich[$i]."s</th></tr><tr>";
			while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
			$total_price += $row['price'];
			if($count %2 == 1){
				echo "<td class='sand'>-" .$row['name']. "</td>";
			}else{
				echo "</tr><tr>";
				echo "<td class ='sand'>-". $row['name']. "</td>";
			}
			$count ++;
			}
			$count = 0;
			
			
		echo "</table></div>";
}
if(!isset($_SESSION['price'])){
$_SESSION['price'] = $total_price;
}
else{
$_SESSION['price'] += $total_price;
}

echo "<table class ='end'<tr> <td class ='sand'>Total Price </td><td class='sand'>$ ".$total_price."</td></tr><table>";

//$stmtTopics = $db->prepare('SELECT name FROM topic t'
	//		. ' INNER JOIN scripture_topic st ON st.topicId = t.id'
		//	. ' WHERE st.scriptureId = :scriptureId');

//		$stmtTopics->bindParam(':scriptureId', $row['id']);

	//	$stmtTopics->execute();

		// Go through each topic in the result
		//while ($topicRow = $stmtTopics->fetch(PDO::FETCH_ASSOC))
		//{
			//echo $topicRow['name'] . ' ';
		//}
?>
</div>

</body>
</html>

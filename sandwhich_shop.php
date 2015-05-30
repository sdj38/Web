<?php
session_start();
?>

<!doctype = html>
<?php
	include 'open_php.php';
?>
<html>
	<head>
		<title> Sandwich Shop </title>
		 <link rel="stylesheet" href="sandwhich_style.css">
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="shop.js"></script>
	</head>
	<body>
	
		<div id="banner">
			 Sandwich Shop 
		</div>
	<div id="top">	
<?php
echo "<table><tr><td class ='choice'><div class ='click' id='r4'>";
echo "Bread";
echo "</div></td>";
$sammich = array("Meat","Cheese","Veggie","Condiment");
for($i = 0; $i < 4; $i++){
echo "<td class ='choice'><div class ='click' id=r".$i.">";
echo $sammich[$i]."s";
echo "</div></td>";

}
echo "</tr></table>";
?></div>
<form action="build_sandwhich.php" method="post">
			<div class='hide' id='Bread'>
			Bread type
		<select name="bread" id="selectBread">
<?php
	$sql = "SELECT id, name FROM Bread order by id";	
	$result = $conn->query($sql);
	    // output data of each row
	
	    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
			echo "<option value=".$row['name'].">".$row['name']."</input>";
	      
	    }	
	
?>
		</select>
		
		</div>
<?php
   
	$length = count($sammich);
	$count = 0;
	for ( $i = 0; $i < $length; $i ++){
		$sql = "SELECT id, name FROM ". $sammich[$i]. " order by id";
		$result = $conn->query($sql);
			// output data of each row
			echo"<div id =".$sammich[$i]." class='hide'><table><th colspan='2'>".$sammich[$i]."s<th><tr>";
			while($row = $result->fetch(PDO::FETCH_ASSOC)) {
			if($count %2 == 1){
				echo "<td><input type='checkbox' name='".$sammich[$i]."[]' value= '".$row['name']."' />". $row['name']. "</td></input>";
			}else{
				echo "</tr><tr>";
				echo "<td><input type='checkbox' name='".$sammich[$i]."[]' value='".$row['name']."' />". $row['name']. "</td></input>";
			}
			$count ++;
			}
			$count = 0;
		echo "</table></div>";
	}
	
?>


<br/>
	<div id="results">
		<table>
		<?php
		echo "<tr><th colspan='2'>".$_SESSION['user_name']."'s Sandwich</th></tr>"; 
		?>
		<tr>
		<td>Bread type: </td>
			<td id="bread_row"></td>
			</tr>
			<tr><td>Meats: </td>
			<td id="meat_row"></td>
			</tr><tr><td>Cheeses:</td>
			<td id="cheese_row"></td>
			</tr><tr><td>Veggies:</td>
			<td id="veggie_row"></td>
			</tr><tr><td>Condiments:</td>
			<td id="condiment_row"></td>
			</tr><tr><td><input type ="button" value="Show Sandwiches" id="showMe" onclick="document.location.href='sandwiches.php'" />
			</td>
		<td><input type="submit" value="Build Sandwich" id ="build"/></td>
		</tr>
		</table>
		
		
	</div>
</form>
	</body>
</html>

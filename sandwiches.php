<?php
session_start();
include('open_php.php');

?>
<html>
<head>
 <link rel="stylesheet" href="sandwhich_style.css">
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="shop.js"></script>
</head>
<body>
</body>
<?php
$sql  =$conn->prepare( "select name from Sandwich s join Delivery d on d.sandwich_id=s.id where d.buyer_id ='".$_SESSION['user_ID']."'");
$sql->execute();

// change to Get to add URL for sandwich description
?>
<form action='show_sandwich.php' method='post'>
<?php
echo "<div ><table class ='end'><tr><th colspan='2'>".$_SESSION['user_name']."'s Sandwiches</th></tr><tr>";
			while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
			$sql2  =$conn->prepare( "select id from Sandwich s where s.name='".$row['name']."'");
$sql2->execute();
			$value = $sql2->fetch(PDO::FETCH_ASSOC);
				echo "<tr><td><button type='submit' name='checkSandwich' value='".$value['id']."' class='build' />".$row['name']."</td></tr>";
			
			
			
			
		
}

echo "</table></div>";
?>
</form>
</html>
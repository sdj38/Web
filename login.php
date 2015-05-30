<?php
session_start();

?>
<html>
	<head>
	 <link rel="stylesheet" href="sandwhich_style.css">
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="login.js"></script>
	</head>
	<body>
		<form action="insert_user.php" method="POST" onsubmit=" return confirmation()">
		<table id ="first"><th colspan="2">Login</th>
		
			<tr><td class ="log">Name: </td><td class ="log"><input type="text" name="user" class="log_input" /></td></tr> <br/>
			<tr><td class ="log">Password: </td> <td class ="log"><input type="password" name="pswd" class="log_input" /></td></tr> <br/>
			<tr><td class ="log">Confirm Password: </td> <td class ="log"><input type ="password" name="confirm" class="log_input"/></td></tr>
			<tr><td class="log"></td><td class="log"><input type="submit" id="sub" value="Login" /></td></tr>
			<?php
			if(isset($_SESSION['msg'])){
				echo "<tr><td class='log'> " .$_SESSION['msg']. "</td></tr> ";
			} 
			?>
			</table>
			
		</form>
	</body>
</html>
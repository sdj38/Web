<?php
session_start();
require("password.php");
?>
<html>
	<head>
	 <link rel="stylesheet" href="sandwhich_style.css">
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		  
        
	</head>
	<body>
		<form action="check_user.php" method="POST" onsubmit=''>
		<table class ="first"><th colspan="2">Login</th>
		
			<tr><td class ="log">Name: </td><td class ="log"><input type="text" name="user" class="log_input" /></td></tr> <br/>
			<tr><td class ="log">Password: </td> <td class ="log"><input type="password" name="pswd" class="log_input" /></td></tr> <br/>
			
			<tr><td class="log"></td><td class="log"><input type="submit" id="sub" value="Login" /></td></tr>
			<tr><td class="log">Not already a customer?</td><td class="log"><a href='login.php'> Click Here! </a> </td>
			<?php
			if(isset($_SESSION['msg'])){
				echo "<tr><td class='log'> " .$_SESSION['msg']. "</td></tr> ";
			} 
			?>
			</table>
			
		</form>
	</body>
</html>
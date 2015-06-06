<html>
	<head>
		<title>PHP Test</title>

	</head>
	<body>
		<div>

			<?php
			
echo "this is from php .. <br />"; 

$file = fopen("myFile.txt", "r");
if($file){
echo "file is open <br />";
while ($line = fgets($file))
{
	echo "this is from the file: $line <br />";
}

}

 $file = fopen("myFile.txt", "w");
 if($file){
 fwrite($file, "hello world\n");
 fclose($file);
 echo "wrote file";
 }
 else{
 die("file not created");
 }

echo " keeps going on";
?>
		</div> 
	</body>
</html>
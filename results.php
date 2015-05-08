
<html>
    <head>
     <link rel="stylesheet" href="survey_style.css" />
       <title>Results</title>
    </head>
    <body>
<?php
if(!isset($_COOKIE["taken"])){
    $house = $_POST["house"];
    $star = $_POST["jedi"];
    $race =$_POST["race"];
    $villain =  $_POST['villain'];
}else{
    echo "already taken the survey";
}
$tally = array('Gryffindor', 'Hufflepuff', 'Ravenclaw' ,'Slytherin',
'Dwarf','Hobbit','Human','Elf','Orc','Uruk-Hai',
'Qui-gon Jinn','Yoda','Mace Windu','Luke Skywalker', 'Anakin Skywalker', 'Obi-wan Kenobi',
'Loki','Magento','Emperor Palpatine','Voldemort','Sauron','The Joker');
$tally = array_fill_keys($tally, 0);
$file = fopen("results.txt","r");
if($file){
    while ($line = fgets($file)){
        $num = explode(',',$line);
        if(isset($line)){
            $tally[$num[0]] = $num[1] ;
        }
    }
    fclose($file);
    if(!isset($_COOKIE["taken"])){
        $tally[$house] += 1;
        $tally[$star] += 1;
        $tally[$race] += 1;
        $tally[$villain] += 1;
        $file = fopen("results.txt","w");
        foreach($tally as $key => $value){
            fwrite($file, "$key,$value," . PHP_EOL);
	}
	fclose($file);
	
    }
}
    else{
	echo "creating new results file";
	$file =fopen("results.txt", "w");
	if($file){
            foreach($tally as $key => $value){
		fwrite($file, "$key,$value," .  PHP_EOL);
            }
            fclose($file);
	}
	else{
            echo "unable to write to file";
	}
    }
	
echo " <div id='main'> <h1> Results </h1><div class='answer'><table> ";
    foreach($tally as $key => $value){
        if(!$value == 0){
            echo "<tr><td>$key</td><td>$value</td></tr>";
        }       
	if($key === "Slytherin" || $key === "Uruk-Hai" ||$key === "Obi-wan Kenobi"){
            echo "</table></div><br /><div class='answer'><table>";
	}
    }
    echo " </table></div></div>";

    setcookie("taken", TRUE, time() + (24*24), "/");
?>
    </body>
</html>
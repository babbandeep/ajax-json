<?php

	$data = file_get_contents("new.json");
	$jdata = json_decode($data, true);

 $ga = $_GET['fetchda'];

 	foreach ($jdata["dws"] as $key => $value) {
 		if($key == $ga){
 		echo "<br>" . $key . "<br>";
			for($x = 0; $x < count($value); $x++){
				echo  "The name of ". $key ." is " . $value[$x]["name"] . " by having experience of " . $value[$x]["exp"] . "yr.<br>";
			}
 		}
 	}

?>

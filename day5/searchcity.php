<?php 
	require("config.php");
	$KEYWORD	=  $_REQUEST['key'];
	$query		= "SELECT name FROM CITY WHERE NAME LIKE '%$KEYWORD%' order by name limit 10";

	$run	= mysqli_query($conn,$query);
	echo "<ul>";
	while($result		= mysqli_fetch_assoc($run)){
		echo "<li><a href='test.php'>".$result['name']."</a></li>";
	}
	echo "</ul>";

	// $i = 0;
	// while($i <= 10){
	// 	echo $i."<br>";
	// 	$i++;
	// }

?>
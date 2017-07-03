<?php 
require("../config.php");

$key	= $_GET['sortby'];
$start	= $_GET['total'];
$query	=	"select * from city order by $key limit $start, 15";

$run    = mysqli_query($conn,$query);

$total 	= $start+15;
$showingText	=	"SHOWING RECORDS $total from totalrecords";
$content = "";
 while($result     = mysqli_fetch_assoc($run)){
          $content.= "<div class='box'>";
          $content.= "<div><img src='images/page2-img2.jpg' height='150'></div>";
          $content.= "<div>".$result['Name']."<br>Population:".$result['Population']."</div>";
          $content.= "</div>";
 } 


$final['showtext'] 	= $showingText;
$final['content'] 	= $content;
//print_r($final);
echo json_encode($final);

// $i = 0;
// $content = "";
// while ($i <= 10) {
// 	$content .= "numbenr is".$i."<br>";
// 	$i++;
// }

// echo $content;

// exit;

 ?>

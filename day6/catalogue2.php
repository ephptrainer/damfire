<?php 
require("config.php");

$query      = "select * from city limit 14";
$run        = mysqli_query($conn,$query);
while($result     = mysqli_fetch_assoc($run)){ 
  $results[]  = $result;
}
echo "<pre>";
//print_r($results);
echo "</pre>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Catering.com | Catalogue</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen">

<script type="text/javascript">
$(document).ready(function () {
    $('#slider-2').bxSlider({
        pager: true,
        controls: false,
        moveSlideQty: 1,
        displaySlideQty: 4
    });
    $("a[data-gal^='prettyPhoto']").prettyPhoto({
        theme: 'facebook'
    });
});
</script>
<!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]-->
</head>
<body id="page3">
<!--==============================header=================================-->
<header>
  <div class="row-top">
    <div class="main">
      <div class="wrapper">
        <h1><a href="index.html">Catering<span>.com</span></a></h1>
        <nav>
          <ul class="menu">
            <li><a href="index.html">About</a></li>
            <li><a href="menu.html">Menu</a></li>
            <li><a class="active" href="catalogue.html">Catalogue </a></li>
            <li><a href="shipping.html">Shipping</a></li>
            <li><a href="faq.html">FAQ </a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <div class="row-bot">
    <div class="row-bot-bg">
      <div class="main">
        <h2>Impressive Selection <span>for any Occasion</span></h2>
      </div>
    </div>
  </div>
</header>
<!--==============================content================================-->
<section id="content">
  <div class="main">
    <div class="container">
      <h3 class="prev-indent-bot">Catalogue</h3>
      <div>
        <div style="overflow: auto;">
          <style>
            .box{
              float: left;
              width: 300px;
            }
          </style>
<?php  foreach($results as $values){ ?>

          <div class="box">
              <div><img src="img/<?php echo $values['img']; ?>" height="150"></div>
              <div><?php echo $values['Name']; ?><br>Population:<?php echo $values['Population']; ?></div>
          </div>
<?php } ?>




        </div>





        
        
      </div>
    </div>
  </div>
</section>
<!--==============================footer=================================-->
<footer>
  <div class="main">
    <div class="aligncenter"> <span>Copyright &copy; <a href="#">Domain Name</a> All Rights Reserved</span> Design by <a target="_blank" href="http://www.templatemonster.com/">TemplateMonster.com</a> </div>
  </div>
</footer>
<script type="text/javascript">Cufon.now();</script>
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>

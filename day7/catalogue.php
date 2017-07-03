<?php 
require("config.php");

$query      = "select * from city limit 15";
$run        = mysqli_query($conn,$query);

  

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
<style>
            .box{
              float: left;
              width: 300px;
              font-size: 24px;
              font-weight: bold;
            }
            .sortingnav{
              list-style: none;
            }
            .sortingnav li{
              float: left;
              padding: 20px;
              margin-right: 30px;
              font-size: 20px;
              font-weight: bold;
            }
            #loadmore{
              text-align: center;
              font-weight: bold;
              font-size: 20px;
              background-color: black;
              color: white;
            }
            .currentsort  {
              text-decoration: underline;
              color: red;
            }
          </style>
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/custom_js.js"></script>
<script type="text/javascript">

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
      <h3 class="prev-indent-bot" id="showheading">Catalogue ( showing 15 Records from TotalRecords)</h3>
      <nav class="sortingnav">
          <ul>
            <li>Sort By:</li>
            <li class="sortbtn currentsort">ID</li>
            <li class="sortbtn">Name</li>
            <li class="sortbtn">Population</li>
          </ul>
      </nav>
      <div style="clear: both"></div>
      <div>
      <div id="mainContent" style="overflow: auto;">
          
      <?php 
      $total = 0;
      while($result     = mysqli_fetch_assoc($run)){ 
        $total++;
        ?>

          <div class="box">
              <div><img src="img/<?php echo $result['img']; ?>" height="150"></div>
              <div><?php echo $result['Name']; ?><br>Population:<?php echo $result['Population']; ?></div>
          </div>
      <?php } ?>
    
        </div>
        <div id="loadmore">Load More</div>
<input type="text" name="total_products" id="totalrecords" value="<?php echo $total; ?>">
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

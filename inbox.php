<?php 
include("config.php");
echo $_SESSION['userid'];
if(!isset($_SESSION['userid'])){
    header("location:login.php");
}

?>
<a href="logout.php">Logout</a>
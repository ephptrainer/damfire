<?php 
$conn = mysqli_connect("localhost","root","","damfire");
session_start();


setcookie("TESTINGCOOKIE","tajmahal",time()+120);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Jquery</title>
	<style>
		.maindiv{
			width: 800px;
			margin:auto;
		}
		.wrap{
			height: 150px;
			width:260px;
			float:left; 
			/*overflow: hidden;*/
			position: relative;
		}
		.wrap img{
			position: absolute;
		}
	</style>
</head>
<body>

<div class="maindiv">
	<div class="wrap">
		<img src="img/back.jpg">
		<img src="img/front.jpg" class="front">
	</div>

	<div class="wrap">
		<img src="img/back.jpg">
		<img src="img/front.jpg" class="front">
	</div>

	<div class="wrap">
		<img src="img/back.jpg">
		<img src="img/front.jpg" class="front">
	</div>
</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script>
	
	$(document).ready(function(){

		$(".wrap").hover(function(){
			$(this).children(".front").stop().animate({"top":"200px"},700).animate({"left":"200px"},700).animate({"height":"400px"},700);
		}, function(){
			$(this).children(".front").stop().animate({"height":"140px"},700).animate({"top":"0px"},700).animate({"left":"0px"},700);
		})

	})

</script>
</body>
</html>
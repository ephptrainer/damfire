<!DOCTYPE html>
<html>
<head>
	<title>AUTOSUGGEST</title>
	<style>
		#wrapper{
			width: 600px;
    		margin: 50px auto 0 auto;
		}
		.searchtext{
			width: 350px;
			height: 40px;
			font-size: 20px;
			padding-left: 5px;
		}
		#autosuggest{
			border: 1px solid;
    		width: 400px;
    		font-size: 20px;
    		display: none;
		}
		#autosuggest ul{
			list-style: none;
		    margin: 0px;
		    padding: 0;
		    padding-left: 20px;
		}
		#autosuggest ul li{
			padding-bottom: 3px;
		}
	</style>
</head>
<body>
<div id="wrapper">
<img src="img/homepage.png" width="400">
<div>
	<input type="text" name="search" placeholder="SEARCH THE WEB" class="searchtext">
	<div id="autosuggest"></div>
</div>
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
	
$(document).ready(function(){
	$(".searchtext").keyup(function(){
		
		keyword	= $(this).val();
		
		if(keyword == ""){
			$("#autosuggest").hide();
		}else{
			$("#autosuggest").show();
			$.ajax({
				url:"searchcity.php",
				type:"post",
				data:"key="+keyword+"&device=desktop",
				success:function(data){
					$("#autosuggest").html(data);
				},
				error:function(){
					alert("ajax error");
				}
			})
		}


	})






	// $(".searchtext").keydown(function(){
	// 	$keyword	= $(this).val();
	// 	console.log("keydown:"+$keyword);
	// })

	// $(".searchtext").keypress(function(){
	// 	$keyword	= $(this).val();
	// 	console.log("keypress:"+$keyword);
	// })


})

</script>
</body>
</html>